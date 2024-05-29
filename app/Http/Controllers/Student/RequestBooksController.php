<?php

namespace App\Http\Controllers\student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\Book;
use Illuminate\Support\Facades\Auth;

class RequestBooksController extends Controller
{
    public function index() {
        
        $transaction = Transaction::where('user_id', Auth::user()->id)->get();

        return view('Users.student.pages.requestbooks.requestbooks', ['transaction' => $transaction]);
    }

    public function cancel(Request $request, $id) {

        $transaction = Transaction::find($id);

        if (!$transaction) {
            return redirect()->back()->with('errorCancel', 'Fail cancellation process');
        }else {

            $transaction->update([
                'status' => 'cancel',
            ]);

            $book = Book::find($transaction->book_id);

            $book->increment('quantity');


            $transaction->save();
            return redirect()->back()->with('sucessCancel', 'Success Cancellation');

        }

    }
    public function viewRequestBook ($id) {

        $transaction = Transaction::find($id);



        return view('Users.student.pages.requestbooks.viewrequestbook', ['transaction' => $transaction]);

    }
 }
