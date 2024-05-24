<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    public function index () {
        
        $data = User::all();
    
        return view('Users.admin.pages.dashboard.dashboard', ['student' => $data]);
    }
}
