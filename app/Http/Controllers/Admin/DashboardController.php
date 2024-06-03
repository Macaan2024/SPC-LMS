<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Transaction;
use App\Models\Book;
use App\Models\Payment;

class DashboardController extends Controller
{
    public function index() {


        $user = User::all();

        $levels = User::whereNotNull('level')->get()->groupBy('level');

        $faculty = User::where('role_id', 3)->count(); //counting faculty users
        $staff = User::where('role_id', 4)->count(); //counting staff users
        $college = User::where('level', 'College')->count(); //count college
        $seniorhigh = User::where('level', 'Senior Highschool')->count(); //counting seniorhigh
        $juniorhigh = User::where('level', 'Junior Highschool')->count(); //counting junior high
        $elementary = User::where('level', 'Elementary')->count(); // counting elementary
        $userWithFines = User::where('total_fines', '>', 0)->count(); 

        $bookCollege= Book::where('level', 'College')->count(); //count books
        $bookSeniorHigh = Book::where('level', 'Senior Highschool')->count();
        $bookJuniorHigh = Book::where('level', 'Junior HIghschool')->count();
        $bookElementary = Book::where('level', 'Elementary')->count();

        $transactionOngoing = Transaction::where('status', 'ongoing')->count();
        $transactionReturned = Transaction::where('status', 'returned')->count();
        $transactionCancel = Transaction::where('status', 'cancel')->count();
        $transactionApproved = Transaction::where('status', 'approved')->count();
        $transactionPending = Transaction::where('status', 'pending')->count();
        $transactionDeclined = Transaction::where('status', 'declined')->count();
        $transactionWithOverdue = Transaction::where('overdue', '>', 1)->count();


        $payments = Payment::all();

        $totalPayment = 0;

        // Loop through the payments and sum the amounts
        foreach ($payments as $payment) {
            $totalPayment += $payment->amount; // Assuming the payment amount is stored in the 'amount' field
        }
    
        return view('Users.admin.pages.dashboard.dashboard', compact(
            'user',
            'levels',
            'college', 'seniorhigh', 'juniorhigh', 'elementary', 'faculty', 'staff',
            'bookCollege', 'bookSeniorHigh', 'bookJuniorHigh', 'bookElementary',
            'transactionOngoing', 'transactionReturned', 'transactionCancel', 'transactionApproved', 'transactionPending', 'transactionDeclined', 'transactionWithOverdue', 'totalPayment',
            'userWithFines',
        ));
    }

}
