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


}
