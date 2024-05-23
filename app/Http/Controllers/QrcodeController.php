<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class QrcodeController extends Controller
{
    public function Userslist() {
        
        $users = User::all();

        return view('Users.admin.pages.Logbook.logbook', ['users' => $users]); 
    }
}
