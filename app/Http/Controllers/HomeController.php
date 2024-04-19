<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    

    public function studentHome() {
        return view("Users.student.pages.dashboard");
    }

}
