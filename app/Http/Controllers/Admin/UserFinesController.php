<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Transaction;
use App\Models\Payment;
use Carbon\Carbon;

class UserFinesController extends Controller
{
    public function index(Request $request)
    {
        $userQuery = User::query(); // Initialize the query builder
        

        $userPayment = Payment::all();

        // Apply search filter if a search term is provided
        if ($request->has('search')) {
            $searchTerm = $request->get('search');
            $userQuery->where(function ($query) use ($searchTerm) {
                $query->where('firstname', 'like', "%{$searchTerm}%")
                    ->orWhere('lastname', 'like', "%{$searchTerm}%");
            });
        }

        // Execute the query to get all users
        $user = $userQuery->orderBy('level')->get(); // Fetch all users without pagination

        // Counting users by level and role remains unchanged
        $College = User::where('level', 'College')->whereHas('transactions', function($query){
            $query->whereNotNull('penalty');  
        })->count();

        $SeniorHighschool = User::where('level', 'Senior Highschool')->whereHas('transactions', function($query){
            $query->whereNotNull('penalty');
        })->count();

        $JuniorHighschool = User::where('level', 'Junior Highschool')->whereHas('transactions', function($query){
            $query->whereNotNull('penalty');
        })->count();

        $Elementary = User::where('level', 'Elementary')->whereHas('transactions', function($query){
            $query->whereNotNull('penalty');
        })->count();

        $Faculty = User::where('role_id', '3')->whereHas('transactions', function($query){
            $query->whereNotNull('penalty');
        })->count();

        $LibraryStaff = User::where('role_id', '4')->whereHas('transactions', function($query){
            $query->whereNotNull('penalty');
        })->count();

        return view('Users.admin.pages.userfines.userfines', [
            'user' => $user, // Pass all users to the view
            'transaction' => Transaction::all(),
            'College' => $College,
            'SeniorHighschool' => $SeniorHighschool,
            'JuniorHighschool'=> $JuniorHighschool,
            'Elementary' => $Elementary,
            'Faculty' => $Faculty,
            'LibraryStaff' => $LibraryStaff,
            'userPayment' => $userPayment,
        ]);
    }
    public function history(Request $request) {
        $searchTerm = $request->get('search');
        $selectedDate = $request->get('date');
    
        $query = Payment::query();

    
        if (!empty($searchTerm)) {
            $query->whereHas('user', function ($query) use ($searchTerm) {
                $query->where('lastname', 'like', "%{$searchTerm}%")
                      ->orWhere('firstname', 'like', "%{$searchTerm}%");
            })
            ->orWhere('amount', 'like', "%{$searchTerm}%");
        }
    
        if (!empty($selectedDate)) {
            $startDate = Carbon::parse($selectedDate)->startOfDay();
            $endDate = Carbon::parse($selectedDate)->endOfDay();
            $query->whereBetween('created_at', [$startDate, $endDate]);
        }
    
        $paymentList = $query->orderBy('created_at', 'asc')->get();
    
        return view('Users.admin.pages.userfines.fineshistory', compact('paymentList'));
    }

    public function view($id) {

        $userPayment = Payment::where('user_id', $id)->get();


        return view('Users.admin.pages.userfines.viewfines', compact('userPayment'));
    }
}
