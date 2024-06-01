<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    public function index() {


        $user = User::all();

        $levels = User::whereNotNull('level')->get()->groupBy('level');

        $faculty = User::where('role_id', 3)->count();
        $staff = User::where('role_id', 4)->count();
        $college = User::where('level', 'College')->count();
        $seniorhigh = User::where('level', 'Senior Highschool')->count();
        $juniorhigh = User::where('level', 'Junior Highschool')->count();
        $elementary = User::where('level', 'Elementary')->count();

        $book = Book::where('level', 'College')->count();
    
        return view('Users.admin.pages.dashboard.dashboard', compact('user', 'levels', 'college', 'seniorhigh', 'juniorhigh', 'elementary', 'faculty', 'staff'));
    }

}
