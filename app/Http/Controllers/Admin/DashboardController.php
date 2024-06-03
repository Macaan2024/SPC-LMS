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

        $bookCollege= Book::where('level', 'College')->whereNot('status', 'removed')->count(); //count books
        $bookSeniorHigh = Book::where('level', 'Senior Highschool')->whereNot('status', 'removed')->count();
        $bookJuniorHigh = Book::where('level', 'Junior HIghschool')->whereNot('status', 'removed')->count();
        $bookElementary = Book::where('level', 'Elementary')->whereNot('status', 'removed')->count();
        $bookAvailable = Book::where('status', 'Available')->count();
        $bookUnavailable = Book::where('status', 'Unavailable')->count();

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
            'bookCollege', 'bookSeniorHigh', 'bookJuniorHigh', 'bookElementary', 'bookAvailable', 'bookUnavailable',
            'transactionOngoing', 'transactionReturned', 'transactionCancel', 'transactionApproved', 'transactionPending', 'transactionDeclined', 'transactionWithOverdue', 'totalPayment',
            'userWithFines',
        ));
    }

    public function bookAvailable() {


        $bookAvailable = Book::where('status', 'Available')->get();
        $college = Book::where('level', 'College')->where('status', 'Available')->count();
        $seniorhigh = Book::where('level', 'Senior Highschool')->where('status', 'Available')->count();
        $juniorhigh = Book::where('level', 'Junior Highschool')->where('status', 'Available')->count();
        $elementary = Book::where('level', 'Elementary')->where('status', 'Available')->count();
        $bookAvailableCount = Book::where('status', 'Available')->where('status', 'Available')->count();

        return view('Users.admin.pages.dashboard.bookavailable_list', compact('bookAvailable', 'college', 'seniorhigh', 'juniorhigh', 'elementary', 'bookAvailableCount'));
    }
    public function bookUnavailable() {


        $bookAvailable = Book::where('status', 'Unavailable')->get();
        $college = Book::where('level', 'College')->where('status', 'Unavailable')->count();
        $seniorhigh = Book::where('level', 'Senior Highschool')->where('status', 'Unavailable')->count();
        $juniorhigh = Book::where('level', 'Junior Highschool')->where('status', 'Unavailable')->count();
        $elementary = Book::where('level', 'Elementary')->where('status', 'Unavailable')->count();
        $bookUnavailableCount = Book::where('status', 'Unavailable')->count();

        return view('Users.admin.pages.dashboard.bookunavailable_list', compact('bookAvailable', 'college', 'seniorhigh', 'juniorhigh', 'elementary', 'bookUnavailableCount'));
    }

    public function bookElementary() {

        $bookAvailable = Book::where('level', 'Elementary')->whereNot('status', 'removed')->get();
        $college = Book::where('level', 'College')->whereNot('status', 'removed')->count();
        $seniorhigh = Book::where('level', 'Senior Highschool')->whereNot('status', 'removed')->count();
        $juniorhigh = Book::where('level', 'Junior Highschool')->whereNot('status', 'removed')->count();
        $elementary = Book::where('level', 'Elementary')->whereNot('status', 'removed')->count();
        $bookUnavailableCount = Book::where('level', 'Elementary')->where('status', 'Unavailable')->count();
        $bookAvailableCount = Book::where('level', 'Elementary')->where('status', 'Available')->count();


        return view('Users.admin.pages.dashboard.bookelementary_list', compact('bookAvailable', 'college', 'seniorhigh', 'juniorhigh', 'elementary', 'bookUnavailableCount', 'bookAvailableCount'));
    }
    public function bookJuniorHigh() {

        $bookAvailable = Book::where('level', 'Junior Highschool')->whereNot('status', 'removed')->get();
        $college = Book::where('level', 'College')->whereNot('status', 'removed')->count();
        $seniorhigh = Book::where('level', 'Senior Highschool')->whereNot('status', 'removed')->count();
        $juniorhigh = Book::where('level', 'Junior Highschool')->whereNot('status', 'removed')->count();
        $elementary = Book::where('level', 'Elementary')->whereNot('status', 'removed')->count();
        $bookUnavailableCount = Book::where('level', 'Junior Highschool')->where('status', 'Unavailable')->count();
        $bookAvailableCount = Book::where('level', 'Junior Highschool')->where('status', 'Available')->count();


        return view('Users.admin.pages.dashboard.bookjuniorhigh_list', compact('bookAvailable', 'college', 'seniorhigh', 'juniorhigh', 'elementary', 'bookUnavailableCount', 'bookAvailableCount'));
    }
    public function bookSeniorHigh() {

        $bookAvailable = Book::where('level', 'Senior Highschool')->whereNot('status', 'removed')->get();
        $college = Book::where('level', 'College')->whereNot('status', 'removed')->count();
        $seniorhigh = Book::where('level', 'Senior Highschool')->whereNot('status', 'removed')->count();
        $juniorhigh = Book::where('level', 'Junior Highschool')->whereNot('status', 'removed')->count();
        $elementary = Book::where('level', 'Elementary')->whereNot('status', 'removed')->count();
        $bookUnavailableCount = Book::where('level', 'Senior Highschool')->where('status', 'Unavailable')->count();
        $bookAvailableCount = Book::where('level', 'Senior Highschool')->where('status', 'Available')->count();


        return view('Users.admin.pages.dashboard.bookseniorhigh_list', compact('bookAvailable', 'college', 'seniorhigh', 'juniorhigh', 'elementary', 'bookUnavailableCount', 'bookAvailableCount'));
    }
    public function bookCollege() {

        $bookAvailable = Book::where('level', 'College')->whereNot('status', 'removed')->get();
        $college = Book::where('level', 'College')->whereNot('status', 'removed')->count();
        $seniorhigh = Book::where('level', 'Senior Highschool')->whereNot('status', 'removed')->count();
        $juniorhigh = Book::where('level', 'Junior Highschool')->whereNot('status', 'removed')->count();
        $elementary = Book::where('level', 'Elementary')->whereNot('status', 'removed')->count();
        $bookUnavailableCount = Book::where('level', 'College')->where('status', 'Unavailable')->count();
        $bookAvailableCount = Book::where('level', 'College')->where('status', 'Available')->count();


        return view('Users.admin.pages.dashboard.bookcollege_list', compact('bookAvailable', 'college', 'seniorhigh', 'juniorhigh', 'elementary', 'bookUnavailableCount', 'bookAvailableCount'));
    }
    
    public function userCollege(Request $request) {
        $search = $request->input('search');
        
        // Base query for college students who are activated and don't have a specific role
        $userQuery = User::where('level', 'College')
                         ->where('status', 'Activate');
        
        // Apply search filter if search input is provided
        if ($search) {
            $userQuery->where(function($query) use ($search) {
                $query->where('unique_id', 'LIKE', "%{$search}%")
                      ->orWhere('firstname', 'LIKE', "%{$search}%")
                      ->orWhere('lastname', 'LIKE', "%{$search}%");
            });
        }
        
        // Retrieve filtered users
        $user = $userQuery->get();
        
        // Count college students
        $college = User::where('level', 'College')->count();
    
        return view('Users.admin.pages.dashboard.usercollege_list', compact('user', 'college'));
    }
    

    public function userSeniorHigh(Request $request) {
        $search = $request->input('search');
        
        // Base query for college students who are activated and don't have a specific role
        $userQuery = User::where('level', 'Senior Highschool')
                         ->where('status', 'Activate');
        
        // Apply search filter if search input is provided
        if ($search) {
            $userQuery->where(function($query) use ($search) {
                $query->where('unique_id', 'LIKE', "%{$search}%")
                      ->orWhere('firstname', 'LIKE', "%{$search}%")
                      ->orWhere('lastname', 'LIKE', "%{$search}%");
            });
        }
        
        // Retrieve filtered users
        $user = $userQuery->get();
        
        // Count college students
        $seniorhigh = User::where('level', 'Senior Highschool')->count();
    
        return view('Users.admin.pages.dashboard.userseniorhigh_list', compact('user', 'seniorhigh'));
    }
    public function userJuniorHigh(Request $request) {
        $search = $request->input('search');
        
        // Base query for college students who are activated and don't have a specific role
        $userQuery = User::where('level', 'Junior Highschool')
                         ->where('status', 'Activate');
        
        // Apply search filter if search input is provided
        if ($search) {
            $userQuery->where(function($query) use ($search) {
                $query->where('unique_id', 'LIKE', "%{$search}%")
                      ->orWhere('firstname', 'LIKE', "%{$search}%")
                      ->orWhere('lastname', 'LIKE', "%{$search}%");
            });
        }
        
        // Retrieve filtered users
        $user = $userQuery->get();
        
        // Count college students
        $juniorhigh = User::where('level', 'Junior Highschool')->count();
    
        return view('Users.admin.pages.dashboard.userjuniorhigh_list', compact('user', 'juniorhigh'));
    }

    
    public function userElementary(Request $request) {
        $search = $request->input('search');
        
        // Base query for college students who are activated and don't have a specific role
        $userQuery = User::where('level', 'Elementary')
                         ->where('status', 'Activate');
        
        // Apply search filter if search input is provided
        if ($search) {
            $userQuery->where(function($query) use ($search) {
                $query->where('unique_id', 'LIKE', "%{$search}%")
                      ->orWhere('firstname', 'LIKE', "%{$search}%")
                      ->orWhere('lastname', 'LIKE', "%{$search}%");
            });
        }
        
        // Retrieve filtered users
        $user = $userQuery->get();
        
        // Count college students
        $elementary = User::where('level', 'Elementary')->count();
    
        return view('Users.admin.pages.dashboard.userelementary_list', compact('user', 'elementary'));
    }

    public function userFaculty(Request $request) {
        $search = $request->input('search');
        
        // Base query for college students who are activated and don't have a specific role
        $userQuery = User::where('role_id', '3')
                         ->where('status', 'Activate');
        
        // Apply search filter if search input is provided
        if ($search) {
            $userQuery->where(function($query) use ($search) {
                $query->where('unique_id', 'LIKE', "%{$search}%")
                      ->orWhere('firstname', 'LIKE', "%{$search}%")
                      ->orWhere('lastname', 'LIKE', "%{$search}%");
            });
        }
        
        // Retrieve filtered users
        $user = $userQuery->get();
        
        // Count college students
        $faculty = User::where('role_id', '3')->count();
    
        return view('Users.admin.pages.dashboard.userfaculty_list', compact('user', 'faculty'));
    }

    public function userStaff(Request $request) {
        $search = $request->input('search');
        
        // Base query for college students who are activated and don't have a specific role
        $userQuery = User::where('role_id', '4')
                         ->where('status', 'Activate');
        
        // Apply search filter if search input is provided
        if ($search) {
            $userQuery->where(function($query) use ($search) {
                $query->where('unique_id', 'LIKE', "%{$search}%")
                      ->orWhere('firstname', 'LIKE', "%{$search}%")
                      ->orWhere('lastname', 'LIKE', "%{$search}%");
            });
        }
        
        // Retrieve filtered users
        $user = $userQuery->get();
        
        // Count college students
        $staff = User::where('role_id', '4')->count();
    
        return view('Users.admin.pages.dashboard.userstaff_list', compact('user', 'staff'));
    }

    public function transactionOngoing(Request $request) {


        $search = $request->input('search');
    
        $userQuery = Transaction::where('status', 'Ongoing');
    
        if ($search) {
            $userQuery->where(function($query) use ($search) {
                $query->whereHas('user', function($query) use ($search){ // Corrected typo here
                    $query->where("firstname", "like", "%{$search}%")
                        ->orWhere("lastname", "like", "%{$search}%")
                        ->orWhere("unique_id", "like", "%{$search}%");
                })
    
                ->orWhereHas('book', function($query) use ($search){
                    $query->where("isbn", "like", "%{$search}%")
                        ->orWhere("accesion_number", "like", "%{$search}%") // Typo in word "accession"
                        ->orWhere("title", "like", "%{$search}%")
                        ->orWhere("author", "like", "%{$search}%");
                });
            });
        }
    
        $ongoing = Transaction::where('status', 'ongoing')->count();
        $transactions = $userQuery->get(); // Renamed variable for clarity
    
        return view('Users.admin.pages.dashboard.transactionongoing_list', ['transactions' => $transactions, 'ongoing' => $ongoing]); // Pass transactions to the view
    }

    public function transactionReturned(Request $request) {


        $search = $request->input('search');
    
        $userQuery = Transaction::where('status', 'returned');
    
        if ($search) {
            $userQuery->where(function($query) use ($search) {
                $query->whereHas('user', function($query) use ($search){ // Corrected typo here
                    $query->where("firstname", "like", "%{$search}%")
                        ->orWhere("lastname", "like", "%{$search}%")
                        ->orWhere("unique_id", "like", "%{$search}%");
                })
    
                ->orWhereHas('book', function($query) use ($search){
                    $query->where("isbn", "like", "%{$search}%")
                        ->orWhere("accesion_number", "like", "%{$search}%") // Typo in word "accession"
                        ->orWhere("title", "like", "%{$search}%")
                        ->orWhere("author", "like", "%{$search}%");
                });
            });
        }
    
        $returned = Transaction::where('status', 'returned')->count();
        $transactions = $userQuery->get(); // Renamed variable for clarity
    
        return view('Users.admin.pages.dashboard.transactionreturned_list', ['transactions' => $transactions, 'returned' => $returned]); // Pass transactions to the view
    }

}
