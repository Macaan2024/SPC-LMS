<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Transaction;

use APp\Models\User;

class ProfileController extends Controller
{
    public function show($id) {

        $user = User::find($id);

        $transaction = Transaction::where('user_id', $user)->get();

        return view('Users.admin.pages.profile.profile', compact('user', 'transaction'));
    }

    public function changePassword($id) {

        $user = User::find($id);
    }
}
