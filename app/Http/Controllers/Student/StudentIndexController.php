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
        
        $bookCategory = $category;

        $books = Book::where('category', $category)->orderBy('title')->get();// Adjust the column to order by as needed
    
        $bookAttributes = Schema::getColumnListing('books');
    
        return view('Users.student.pages.Dashboard.viewCategory', [
            'books' => $books,
            'bookAttributes' => $bookAttributes,
            'bookCategory' => $bookCategory
        ]);
    }

    public function requestBook($id) {
        $requestBook = Book::findOrFail($id);

        return view('Users.student.pages.dashboard.requestBook', ['requestBook' => $requestBook]);
    }

    public function search(Request $request)
    {
        $search = $request->input('query');
        $attribute = $request->input('attribute');

        $results = Book::where($attribute, 'LIKE', "%{$search}%")->get();

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
