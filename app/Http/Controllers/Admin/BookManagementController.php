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
        $college = Book::where('level', 'College')->count();
        $seniorhigh = Book::where('level', 'Senior Highschool')->count();
        $juniorhigh = Book::where('level', 'Junior Highschool')->count();
        $elementary = Book::where('level', 'Elementary')->count();
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

    public function destroy($id) {
        $book = Book::findOrFail($id);
        $book->delete();

        return response()->json(['success' => 'Book deleted successfully']);
    }
}
