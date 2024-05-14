<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminIndexController extends Controller
{
    public function index () {
        
        $data = User::all();
    
        return view('Users.admin.pages.dashboard.dashboard', ['student' => $data]);
    }
}