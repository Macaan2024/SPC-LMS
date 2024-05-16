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

    public function store (Request $request) {

        $bookValidation = $request->validate([
            'isbn' => ['required'],
            'accesion_number' => ['required'],
            'title' => ['required'],
            'author' => ['required'],
            'publication_year' => ['required'],
            'publication_address' => ['required'],
            'level' => ['required'],
            'category' => ['required'],
            'edition' => ['required'],
            'pages' => ['required'],
            'quantity' => ['required'],
            'status' => ['nullable'],
            'total_borrow' => ['nullable'],
            'image' => ['nullable', 'image'],
        ]);

        if ($request->hasFile('image')) {
            
            //Capturing filename with extension
            $extension = $request->file('image')->getClientOriginalExtension();
            //Renaming image
            $newFilename = str_replace(' ', '_', $bookValidation['isbn']). '.'. $extension;

            $path = public_path('images/'. $newFilename);

            $request->file('image')->move(public_path('images'), $newFilename);

            $bookValidation['image'] = $newFilename;

        }else {
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
