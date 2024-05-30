<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Transaction;

class UserFinesController extends Controller
{
    public function index(Request $request)
    {
        $userQuery = User::query(); // Initialize the query builder

        // Apply search filter if a search term is provided
        if ($request->has('search')) {
            $searchTerm = $request->get('search');
            $userQuery->where(function ($query) use ($searchTerm) {
                $query->where('firstname', 'like', "%{$searchTerm}%")
                    ->orWhere('lastname', 'like', "%{$searchTerm}%");
            });
        }

        // Execute the query to get all users
        $user = $userQuery->get(); // Fetch all users without pagination

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
            'LibraryStaff' => $LibraryStaff
        ]);
    }


    public function finesPaid (Request $request, $id) {

        $transactions = Transaction::where('user_id', $id)->get();


        foreach ($transactions as $transaction) {
            // Mark each transaction as 'Paid'
            $transaction->update(['penalty' =>  0]);
        }

        return redirect()->back()->with('paidSuccess', 'Successfully fines paid');

    }
}
