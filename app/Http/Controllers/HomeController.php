<?php

namespace App\Http\Controllers;

use App\Http\Controllers\pagesController\DashboardController;
use Illuminate\Http\Request;
use App\Models\Books;

class HomeController extends Controller
{
    

    public function studentHome() {


        // Instantiating bookFetch class to display books on dashboard 
        $dashboardController = new DashboardController();
        $booksGroupedByCategory = $dashboardController->index();

        return view("Users.student.pages.dashboard", ["booksGroupedByCategory"=> $booksGroupedByCategory]);
    }
    public function fetchData(Request $request) {
        $yearLevel = $request->input('level');
        $data = Books::where('level', $yearLevel)->orderBy('category')->get();
        return response()->json(['data' => $data]);
    }

}
