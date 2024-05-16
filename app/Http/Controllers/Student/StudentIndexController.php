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
