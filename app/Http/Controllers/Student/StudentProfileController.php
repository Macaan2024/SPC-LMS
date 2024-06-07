<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Transaction;
use App\Models\User;


class StudentProfileController extends Controller
{
    public function index($id) {
        
        $student = User::findOrFail($id);
        $previousBorrow = Transaction::where('user_id', $id)->with('book', 'user')->first();
        $transaction = Transaction::where('user_id', $id)->get();


        return view('Users.student.pages.profile.profile', compact('student', 'previousBorrow', 'transaction'));
    }

    public function change($id) {
        $user = User::find($id);
        return view('Users.student.pages.profile.changepassword', compact('user'));
    }

    public function proccess(Request $request, $id) {
        $request->validate([
            'oldpassword' => 'required',
            'newpassword' => 'required|min:8|confirmed', // confirmed will check retypepassword
        ]);

        $user = User::find($id);

        if (Hash::check($request->oldpassword, $user->password)) {
            $user->password = Hash::make($request->newpassword);
            $user->save();

            return redirect()->route('spc-lms.changepassword', ['id' => $user->id])->with('success', 'Password changed successfully.');
        } else {
            return redirect()->route('spc-lms.changepassword', ['id' => $user->id])->withErrors(['oldpassword' => 'Old password is incorrect.']);
        }
    }
}
