<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Transaction;

class StudentTransactionController extends Controller
{
    public function index() {

        $user = Auth::user()->id;

        $transaction = Transaction::where('user_id', $user)->whereIn('status', ['ongoing', 'returned'])->get();


        return view('Users.student.pages.transaction.transaction', compact('transaction'));
    }

    public function view($id) {

        $transaction = Transaction::find($id);

        return view('Users.student.pages.transaction.transactionview', compact('transaction'));
    }
}
