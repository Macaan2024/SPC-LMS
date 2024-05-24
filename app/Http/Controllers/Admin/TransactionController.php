<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaction;

class TransactionController extends Controller
{
    public function index() {

        $approvedTransaction = Transaction::where('status', 'approved')->get();

        return view('Users.admin.pages.transaction.transaction', ['approvedTransaction' => $approvedTransaction]);
    }

    public function returnBook(Request $request, $id) {

        $returnBook = Transaction::findOrFail($id);
    
        if ($request->overdue >= 1) {
            $returnBook->update([
                'overdue' => $request->overdue,
                'penalty' => $request->penalty,
                'status' => 'Overdue',
            ]);
    
            return redirect()->back()->with('returnSuccessfully', 'Return Successfully');
        } else {
            $request->overdue = 0;
            $request->penalty = 0;
    
            $returnBook->update([
                'status' => 'Return Successfully',
                'overdue' => $request->overdue,
                'penalty' => $request->penalty,
            ]);
    
            return redirect()->back()->with('returnSuccessfully', 'Return Successfully');
        }
    }
}
