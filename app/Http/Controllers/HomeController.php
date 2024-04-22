<?php

namespace App\Http\Controllers;

use App\Http\Controllers\pagesController\DashboardController;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    

    public function studentHome() {

        $dashboardController = new DashboardController();
        $booksGroupedByCategory = $dashboardController->index();

        return view("Users.student.pages.dashboard", ["booksGroupedByCategory"=> $booksGroupedByCategory]);
    }

}
