<?php

namespace App\Http\Controllers\Logbook;

use App\Http\Controllers\Controller;
use App\Models\Qrlogbook;
use Illuminate\Http\Request;
use App\Models\User;

class Logbook extends Controller
{
    public function index(Request $request)

    {
        $user = User::all();
        $qrcodes = []; // Initialize an empty array to hold QR codes
    
        foreach ($user as $users) {
            $qrcodes[] = Qrlogbook::where('user_id', $users->unique_id)->get(); // Append QR codes for each user
        }
    
        $totalSignIn = Qrlogbook::all()->count();
        return view('logbook.logbook', compact('qrcodes', 'user', 'totalSignIn')); // Pass the array of QR codes to the view
    }

    public function store(Request $request)
    {
        // Check if the student exists
         Qrlogbook::create([
                'user_id' => $request->user_id,
            ]);
                
        return redirect()->back()->with('successSign-in', 'Successfully Sign-in');
    }
}
