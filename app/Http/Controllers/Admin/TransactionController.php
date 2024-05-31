<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\Book;
use Carbon\Carbon;

class TransactionController extends Controller
{
    public function index(Request $request)
    {

        $ongoing = Transaction::where('status', 'ongoing')->count();
        $returned = Transaction::where('status', 'returned')->count();
        $overdue = Transaction::whereNotNull('overdue')->count();
        $searchTerm = $request->get('search');

        $approvedTransaction = Transaction::query()
            ->whereIn('status', ['approved', 'ongoing', 'returned'])
            ->when($searchTerm, function ($query, $searchTerm) {
                return $query->where(function ($query) use ($searchTerm) {
                    $query->whereHas('user', function ($query) use ($searchTerm) {
                        $query->where('firstname', 'like', "%{$searchTerm}%")
                              ->orWhere('lastname', 'like', "%{$searchTerm}%")
                              ->orWhere('unique_id', 'like', "%{$searchTerm}%");
                    })
                    ->orWhereHas('book', function ($query) use ($searchTerm) {
                        $query->where('title', 'like', "%{$searchTerm}%")
                              ->orWhere('author', 'like', "%{$searchTerm}%");
                    });
                });
            })
            ->get();

        return view('Users.admin.pages.transaction.transaction', ['approvedTransaction' => $approvedTransaction, 'ongoing' => $ongoing, 'returned' => $returned, 'overdue' => $overdue]);
    }


    public function returnBook(Request $request, $id)
    {
        $returnBook = Transaction::findOrFail($id);
        $currentDateTime = Carbon::now('Asia/Manila'); // Set your specific timezone
    
        // Initialize total overdue hours and penalty
        $totalOverdueHours = 0;
        $penalty = 0;
    
        // Check if end_datetime is not null
        if ($returnBook->end_time) {
            // Parse the end_datetime column as a single Carbon instance
            $endDateTime = Carbon::parse($returnBook->end_time, 'Asia/Manila');
    
            // Calculate the overdue hours if current datetime is past the end datetime
            if ($currentDateTime > $endDateTime) {
                $totalOverdueHours = $currentDateTime->diffInHours($endDateTime);
    
                // Calculate the penalty based on the total overdue hours
                $penalty = $totalOverdueHours * 10; // Assuming penalty is $10 per hour
            }
        }
    
        // Update the transaction record with the calculated overdue time and penalty
        $returnBook->update([
            'status' => 'returned',
            'overdue' => $totalOverdueHours,
            'penalty' => $penalty,
            'updated_at' => $currentDateTime,
        ]);
        $returnBook->decrement('total_borrow');

        $returnBook->save();
    
        // Redirect back with the calculated overdue time and penalty
        return redirect()->back()->with('overdue', 'Successfully Return with a total of overdue Time: ' . $totalOverdueHours . ' hours, and Penalty Total of: ' . $penalty);
    }
    public function start(Request $request, $id) {

        $startbook = Transaction::findOrFail($id);


        $currentTime = now();


        if($currentTime >= '10:00:00') {
            
            $startbook->update([ 'status' => 'ongoing']);
            $startbook->increment('total_borrow');

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

    public function view($id) {

        $transaction = Transaction::find($id);



        return view('Users.admin.pages.transaction.transactionview', ['transaction' => $transaction]);
    }
}
