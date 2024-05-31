<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Transaction;

class BookManagementController extends Controller
{
    public function index() {
        $book = Book::all();
        $college = Book::where('level', 'College')->where('status', 'Available')->count();
        $seniorhigh = Book::where('level', 'Senior Highschool')->where('status', 'Available')->count();
        $juniorhigh = Book::where('level', 'Junior Highschool')->where('status', 'Available')->count();
        $elementary = Book::where('level', 'Elementary')->where('status', 'Available')->count();
        $level = Book::all()->groupBy('level');



        return view('Users.admin.pages.bookmanagement.bookmanagement', ['book' => $book, 'college' => $college, 'seniorhigh' => $seniorhigh, 'juniorhigh' => $juniorhigh, 'elementary' => $elementary, 'level' => $level]);
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
            'image' => ['nullable', 'image'],
        ]);
    
        // Check if an image file is uploaded
        if ($request->hasFile('image')) {
            // Capturing filename with extension
            $extension = $request->file('image')->getClientOriginalExtension();
            // Renaming image
            $newFilename = str_replace(' ', ' ', $bookValidation['isbn']) . '.' . $extension;
    
            // Constructing the dynamic folder path
            $levelFolder = str_replace(' ', ' ', $bookValidation['level']);
            if (!empty($bookValidation['category'])) {
                $categoryFolder = str_replace(' ', '_', $bookValidation['category']);
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
    
               // Check if an image file is uploaded
            if ($request->hasFile('image')) {
                // Capturing filename with extension
                $extension = $request->file('image')->getClientOriginalExtension();
                // Renaming image
                $newFilename = str_replace(' ', ' ', $validatedData['isbn']) . '.' . $extension;
        
                // Constructing the dynamic folder path
                $levelFolder = str_replace(' ', ' ', $validatedData['level']);
                if (!empty($validatedData['category'])) {
                    $categoryFolder = str_replace(' ', '_', $validatedData['category']);
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
                $validatedData['image'] = $newFilename;
            } else {
                // Set default image if no image is uploaded
                $validatedData['image'] = 'default_image.jpg';
            }
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
