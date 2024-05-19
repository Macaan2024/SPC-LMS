<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;
class StudentIndexController extends Controller
{
    public function index() {
        
        $data = Book::orderBy('level')->get();

        return view('Users.student.pages.index', ['data'  => $data]);
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

        return view('Users.student.pages.dashboard', ['book' => $book]);
    }
}
