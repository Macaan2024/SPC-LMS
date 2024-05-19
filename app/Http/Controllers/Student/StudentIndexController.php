<?php

namespace App\Http\Controllers\Student;

use Illuminate\Support\Facades\Schema;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;
class StudentIndexController extends Controller
{
    public function index() {
        
        $data = Book::orderBy('level')->get();

        return view('Users.student.pages.index', ['data'  => $data]);
    }

    public function view($category) {
        // Retrieve all books
        $books = Book::all();
    
        // Filter books by category
        $bookCategory = $books->where('category', $category);
    
        $bookAttributes = Schema::getColumnListing('books');
    
        return view('Users.student.pages.Dashboard.viewCategory', [
            'bookCategory' => $bookCategory,
            'bookAttributes' => $bookAttributes
        ]);
    }

    public function search(Request $request) {
        $search = $request->input('bookSearch');
        $results = Book::where('title', 'LIKE', "%{$search}%")->get(); // Changed 'column_name' to 'title'
    
        return response()->json($results);
    }
    public function fetchLevelBook(Request $request) {

        

        // Group books by level
        $book = Book::all()->groupBy('level');
        $groupBooks = $book->map(function ($bookByLevel){
            return $bookByLevel->groupBy('category');
        });

        return response()->json(['groupBooks' => $groupBooks]);
    }

    public function dashboard() {
        $book = Book::all()->groupBy('level');

        return view('Users.student.pages.dashboard.dashboard', ['book' => $book]);
    }
}
