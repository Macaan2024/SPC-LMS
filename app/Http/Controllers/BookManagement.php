<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookManagement extends Controller
{
    public function index() {
        $book = Book::all();

        return view('Users.admin.pages.bookmanagement.bookmanagement', ['book' => $book]);
    }
    public function fetchBooks(Request $request) {
        $books = Book::orderBy('level')->orderBy('category')->get();
    
        return response()->json(['books' => $books]);
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
