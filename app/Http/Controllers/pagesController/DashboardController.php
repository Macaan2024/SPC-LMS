<?php

namespace App\Http\Controllers\pagesController;

use App\Models\Books;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\View\Components\student\DisplayBook;

class DashboardController extends Controller
{
    public function index () {

        $booksGroupedByCategory = Books::all()->groupBy('level');
    
        return $booksGroupedByCategory;
    }

    public function fetchBooks($yearLevel)
    {
        // Assuming you have a Books model and it has a 'level' attribute
        $booksGroupedByCategory = Books::where('level', $yearLevel)->get()->groupBy('category');
        return response()->json($booksGroupedByCategory);
    }
}
