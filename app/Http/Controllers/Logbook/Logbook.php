<?php

namespace App\Http\Controllers\Logbook;

use App\Http\Controllers\Controller;
use App\Models\Qrlogbook;
use Illuminate\Http\Request;
use App\Models\User;

class Logbook extends Controller
{
    public function store(Request $request)
    {
        // Check if the student exists
        // $studentExists = User::where('id', $request->id_student)->exists();

        // if (!$studentExists) {
        //     return redirect()->route()->with('error', 'Student is not recognized');
        // }

        // // Check if the student has already logged in today
        // $log = Qrlogbook::where([
        //     'id_student' => $request->id_student,
        //     'date' => date('Y-m-d'),
        // ])->first();

        // if ($log) {
        //     // Student has already logged in today, update logout time
        //     $log->update([
        //         'logout_time' => now(),
        //     ]);
        //     $this->sendSms('Your student has logged out');
        //     return redirect('/scan')->with('success', 'Student has logged out successfully');
        // } else {
        //     // Student has not logged in today, create a new log entry with login time
        //     Logs::create([
        //         'id_student' => $request->id_student,
        //         'date' => date('Y-m-d'),
        //         'login_time' => now(),
        //     ]);

        //     $this->sendSms('Your student has logged in');
        //     return redirect('/scan')->with('success', 'Student has logged in successfully');
        // }

        return view('logbook.logbook');
    }
}
