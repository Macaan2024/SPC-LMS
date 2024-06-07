<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Transaction;

class FinesController extends Controller
{
    public function index() {
        
        $user = Auth::user()->id;

        $transaction = Transaction::where('user_id', $user)->where('overdue', '>', 0)->get();
        return view('Users.student.pages.fines.fines', compact('transaction'));
    }
}
