<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Transaction;

class BookManagementController extends Controller
{
    public function index(Request $request) {
        $search = $request->input('search');
    
        // If a search query is provided, filter the books
        if ($search) {
            $books = Book::where('title', 'LIKE', "%{$search}%")
                        ->orWhere('isbn', 'LIKE', "%s{$search}%")
                        ->orWhere('author', 'LIKE', "%{$search}%")
                        ->orWhere('level', 'LIKE', "%{$search}%")
                        ->get();
        } else {
            $books = Book::all();
        }
    
        $college = $books->where('level', 'College')->where('status', 'Available')->count();
        $seniorhigh = $books->where('level', 'Senior Highschool')->where('status', 'Available')->count();
        $juniorhigh = $books->where('level', 'Junior Highschool')->where('status', 'Available')->count();
        $elementary = $books->where('level', 'Elementary')->where('status', 'Available')->count();
        $level = $books->groupBy('level');
    
        return view('Users.admin.pages.bookmanagement.bookmanagement', [
            'books' => $books,
            'college' => $college,
            'seniorhigh' => $seniorhigh,
            'juniorhigh' => $juniorhigh,
            'elementary' => $elementary,
            'level' => $level
        ]);
    }
    public function view($id) {

        $book = Book::find($id);

        $transaction = Transaction::where('book_id', $id)->get();


        return view('Users.admin.pages.bookmanagement.bookview', ['book' => $book, 'transaction' => $transaction]);
    }

    public function store(Request $request) {
        $bookValidation = $request->validate([
            'isbn' => ['required'],
            'accesion_number' => ['required'],
            'title' => ['required'],
            'author' => ['required'],
            'publication_year' => ['required'],
            'publication_address' => ['required'],
            'level' => ['required'],
            'category' => ['nullable'],
            'edition' => ['required'],
            'pages' => ['required'],
            'quantity' => ['required'],
            'status' => ['nullable'],
            'total_borrow' => ['nullable'],
            'image' => ['required', 'image'],
        ]);

        switch ($request->input('level')) {
            case 'College':
                $bookValidation['category'] = $request->input('collegeCategory');
                break;
            case 'Senior Highschool':
                $bookValidation['category'] = $request->input('seniorCategory');
                break;
            case 'Junior Highschool':
                $bookValidation['category'] = $request->input('juniorCategory');
                break;
            case 'Elementary':
                $bookValidation['category'] = $request->input('elementaryCategory');
                break;
            default:
                $bookValidation['category'] = null; // Or any other default value you see fit
        }
    
    
        // Check if an image file is uploaded
        if ($request->hasFile('image')) {
            // Capturing filename with extension
            $extension = $request->file('image')->getClientOriginalExtension();
            // Renaming image
            $newFilename = str_replace(' ', ' ', $bookValidation['isbn']) . '.' . $extension;
    
            // Constructing the dynamic folder path
            $levelFolder = str_replace(' ', ' ', $bookValidation['level']);
            if (!empty($bookValidation['category'])) {
                $categoryFolder = str_replace(' ', ' ', $bookValidation['category']);
                $path = public_path("books_images/{$levelFolder}/{$categoryFolder}");
            } else {
                $path = public_path("books_images/{$levelFolder}");
            }
    
            // Create the directories if they do not exist
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }
    
            // Move the uploaded file to the constructed path
            $request->file('image')->move($path, $newFilename);
    
            // Save the image path in the book validation array
            $bookValidation['image'] = $newFilename;
        } else {
            // Set default image if no image is uploaded
            $bookValidation['image'] = 'default_image.jpg';
        }
    
        $book = Book::create($bookValidation);
        $book->save();
    
        return back()->with('bookCreated', 'Successfully adding book');
    }

    public function edit (Request $request, $id) {

        $book = Book::find($id);

        $category = Book::all()->groupBy('category');

        return view('Users.admin.pages.bookmanagement.bookedit', ['book' => $book, 'category' => $category]);
    }
    public function update(Request $request, $id) {
        $book = Book::find($id);
    
        // Validate the incoming request...
        $validatedData = $request->validate([
            'isbn' => 'required',
            'accesion_number' => 'required',
            'title' => 'required',
            'author' => 'nullable|string',
            'publication_year' => 'nullable|integer',
            'publication_address' => 'nullable|string',
            'level' => 'nullable|string',
            'edition' => 'nullable|string',
            'category' => 'nullable|string',
            'pages' => 'nullable|integer',
            'quantity' => 'nullable|integer',
            'image' => ["nullable", "image", "max:2048"],
        ]);
    
        // Construct the new folder path
        $levelFolder = $validatedData['level'];
        $categoryFolder = !empty($validatedData['category']) ? $validatedData['category'] : '';
        $newPath = public_path("books_images/{$levelFolder}" . ($categoryFolder ? "/{$categoryFolder}" : ''));
    
        // Ensure the new directories exist
        if (!file_exists($newPath)) {
            mkdir($newPath, 0777, true);
        }
    
        // Handle image upload
        if ($request->hasFile('image')) {
            // Capture filename with extension
            $extension = $request->file('image')->getClientOriginalExtension();
            // Rename image
            $newFilename = str_replace(' ', ' ', $validatedData['isbn']) . '.' . $extension;
    
            // Move the uploaded file to the constructed path
            $request->file('image')->move($newPath, $newFilename);
    
            // Save the image path in the book validation array
            $validatedData['image'] = $newFilename;
    
            // Delete the old image file if it exists
            $oldImagePath = public_path("books_images/{$book->level}/{$book->category}/{$book->image}");
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
    
                // Delete old folder if empty
                $oldFolder = public_path("books_images/{$book->level}/{$book->category}");
                if (is_dir($oldFolder) && count(scandir($oldFolder)) == 2) {
                    rmdir($oldFolder);
                }
            }
        } else {
            // If no new image is uploaded, check if the level or category has changed and move the old image
            if ($book->level !== $validatedData['level'] || $book->category !== $validatedData['category']) {
                // Move the existing image to the new location
                $oldImagePath = public_path("books_images/{$book->level}/{$book->category}/{$book->image}");
                $newImagePath = "{$newPath}/{$book->image}";
    
                // Ensure the new directories exist
                if (!file_exists($newPath)) {
                    mkdir($newPath, 0777, true);
                }
    
                if (file_exists($oldImagePath)) {
                    rename($oldImagePath, $newImagePath);
    
                    // Delete old folder if empty
                    $oldFolder = public_path("books_images/{$book->level}/{$book->category}");
                    if (is_dir($oldFolder) && count(scandir($oldFolder)) == 2) {
                        rmdir($oldFolder);
                    }
                }
    
                $validatedData['image'] = $book->image;
            } else {
                // Preserve the existing image if no new image is uploaded and no level/category change
                $validatedData['image'] = $book->image;
            }
        }
    
        // Update the book record
        $book->update($validatedData);
    
        // Redirect or return a response indicating success
        return back()->with('editsuccess', 'Book updated successfully.');
    }
    public function destroy($id) {
        $book = Book::findOrFail($id);

        if (!$book) {
            return redirect()->back()->with('errorDelete', 'Fail Deleted Books');
        }else {
               
            $book->update([
                'status' => 'removed',
            ]);
            return redirect()->back()->with('successdelete', 'Successfully Deleted Books');
        }
       
    }
}
