<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class LogBookController extends Controller
{
    public function Userslist() {
        
        $users = User::all();

        return view('Users.admin.pages.Logbook.logbook', ['users' => $users]); 
    }
}
