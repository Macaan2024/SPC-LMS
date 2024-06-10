<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Qrlogbook;

class LogBookController extends Controller
{
    public function Userslist() {
        
        $user = User::whereNot('role_id', 2)->get();
        $qrcodes = []; // Initialize an empty array to hold QR codes
    
        foreach ($user as $users) {
            $qrcodes[] = Qrlogbook::where('user_id', $users->unique_id)->get(); // Append QR codes for each user
        }

        $totalSignIn = Qrlogbook::all()->count();
        return view('Users.admin.pages.Logbook.logbook', ['user' => $user, 'qrcodes' => $qrcodes, 'totalSignIn' => $totalSignIn]); 
    }
}
