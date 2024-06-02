<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaction;
use Carbon\Carbon;
use App\Models\Book;

class BookRequestController extends Controller
{
    public function index() {

        $pending = Transaction::where('status', 'pending')->count();
        $approved = Transaction::where('status', 'approved')->count();
        $declined = Transaction::where('status', 'declined')->count();

        $pendingRequest = Transaction::where('status', 'pending')->get();


        return view('Users.admin.pages.bookRequest.bookrequest', ['pending' => $pending, 'approved' => $approved, 'declined' => $declined, 'pendingRequest' => $pendingRequest]);
    }

    public function approveRequest (Request $request, $id) {


        $request = Transaction::findOrFail($id);

        $startDate = Carbon::today()->toDateString();

        $startTime24hr = '17:00:00';

        $endDate = Carbon::tomorrow()->toDateString();

        $endTime24hr = '9:00:00';


        $duration = 16;



        $request->update([
            'status' => 'approved',
            'start_date' => $startDate,
            'start_time' => $startTime24hr,
            'end_day' => $endDate,
            'end_time' => $endTime24hr,
            'duration' => $duration,
        ]);
        

        return redirect()->back()->with('approveRequest', 'Approved Sucessfully');

    }

    public function declineRequest (Request $request, $id) {

        $request = Transaction::findOrFail($id);

        $book = Book::where('id', $request->book_id)->first();

        $book->update(['quantity' => $book->quantity + 1 ]);

        $request->update(['status' => 'declined']);

        return redirect()->back()->with('declineRequest', 'Decline Successfully');
    }
}
