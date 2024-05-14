<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;
class StudentIndexController extends Controller
{
    public function index() {
        
        $allBooks = Book::all();

        // Initialize an array to hold books in the desired sequence
        $bookData = [
            'College' => [],
            'Senior Highschool' => [],
            'Junior Highschool' => [],
            'Elementary' => [],
        ];
    
        // Iterate over all books and assign them to the correct level
        foreach ($allBooks as $book) {
            $bookData[$book->level][] = $book;
        }

        return view('Users.student.pages.index', ['bookData'  => $bookData]);
    }

    public function fetchData(Request $request) {
        $yearLevel = $request->input('level');
        $data = Book::where('level', $yearLevel)->orderBy('category')->get();
        return response()->json(['data' => $data]);
    }

    public function dashboard() {
        $book = Book::all()->groupBy('level');

        return view('Users.student.pages.dashboard', ['book' => $book]);
    }
}
