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
        $bookLevel = Book::orderBy('level')->get();
        $bookCategory = Book::all();


        return response()->json(['bookLevel' => $bookLevel, 'bookCategory' => $bookCategory]);
    }

    public function dashboard() {
        $book = Book::all()->all();

        return view('Users.student.pages.dashboard', ['book' => $book]);
    }
}
