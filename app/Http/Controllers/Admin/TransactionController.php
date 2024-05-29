<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\Book;

class TransactionController extends Controller
{
    public function index() {

        $approvedTransaction = Transaction::whereIn('status', ['approved', 'ongoing'])->get();

        return view('Users.admin.pages.transaction.transaction', ['approvedTransaction' => $approvedTransaction]);
    }

    public function returnBook(Request $request, $id) {
        $returnBook = Transaction::findOrFail($id);
        $currentDate = now();
    
        // Calculate the total overdue time in hours
        $totalOverdueHours = 0;
        // Directly compare the current date/time with the book's end date/time
        if ($currentDate > $returnBook->end_date) {
            // Calculate the difference in days and convert to hours
            $daysOverdue = $currentDate->diffInDays($returnBook->end_date);
            $totalOverdueHours += $daysOverdue * 24; // Convert days to hours
    
            // If the current time is past the end time, add the additional hours
            if ($currentDate > $returnBook->end_time) {
                // Calculate the difference in minutes and then convert to hours
                $minutesOverdue = $currentDate->diffInMinutes($returnBook->end_time);
                $additionalHours = $minutesOverdue / 60; // Exact calculation without rounding
                $totalOverdueHours += $additionalHours;
            }
        } elseif ($currentDate->format('Y-m-d') == $returnBook->end_date && $currentDate > $returnBook->end_time) {
            // Corrected condition to check if the book is overdue based on the end time but not the end date
            // Calculate the difference in minutes and then convert to hours
            $minutesOverdue = $currentDate->diffInMinutes($returnBook->end_time);
            $totalOverdueHours = $minutesOverdue / 60; // Exact calculation without rounding
        }
    
        // Calculate the penalty based on the total overdue hours
        $penalty = $totalOverdueHours * 10; // Assuming penalty is $10 per hour
    
        // Update the transaction record with the calculated overdue time and penalty
        $returnBook->update([
            'status' => 'Return Successfully',
            'overdue' => $totalOverdueHours, // Update the combined overdue time
            'penalty' => $penalty,
            'updated_at' => now(),
        ]);
    
        $returnBook->save();
    
        // Redirect back with the calculated overdue time and penalty
        return redirect()->back()->with('overdue', 'Successfully Return with a total of overdue Time: '. $totalOverdueHours. ' hours, and Penalty Total of: '. $penalty);

        //1problem if the minutes is 130 minutes then the return is 1.1
    }
    
    public function start(Request $request, $id) {

        $startbook = Transaction::findOrFail($id);


        $currentTime = now();


        if($currentTime >= '10:00:00') {
            
            $startbook->update([ 'status' => 'ongoing']);

            $startbook->save();

            return redirect()->back()->with('successStart', 'Successfully Start Book Borrow');
        }else {

            return redirect()->back()->with('errorStart', 'The current date is not yet 5:PM');
        }
    }

    public function cancel(Request $request, $id) {

        $cancelbook = Transaction::findOrFail($id);

        $cancelbook->book->increment('quantity');

        $cancelbook->update([ 'status' => 'cancel' ]);


        return redirect()->back()->with('successCancel', 'Sucessfully Cancellation');


    }
}
