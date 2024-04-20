<?php

namespace App\Http\Controllers\pagesController;

use App\Models\Books;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index () {

        $booksGroupedByCategory = Books::all()->groupBy('level');
    
    
        return view('Users.student.pages.index', ['booksGroupedByCategory' => $booksGroupedByCategory]);  
    }
}
