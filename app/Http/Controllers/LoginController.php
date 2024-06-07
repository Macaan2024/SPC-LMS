<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function login(Request $request) {
        $input = $request->all();
        $this->validate($request, 
            [
                'unique_id' => 'required',
                'password' => 'required'
            ]
            );
    
        if (auth()->attempt(['unique_id'=>$input["unique_id"], 'password'=>$input["password"]])) {
            $user = auth()->user();
            $role_id = $user->role_id; // Ensure this is correctly fetching the role_id
            
            if ($role_id == 2) { // Assuming 1 is the admin role_id
                return redirect()->route('admin.index');
            }else if ($role_id == 1 || $role_id == 4 || $role_id == 3 || $role_id == 2) {
                return redirect()->route('spc-lms.index');
            }
             else {
                return redirect()->route('login');
            }
        } else {
            return back()->withErrors(['message' => 'Invalid Credentials']);
        }
    }
    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}

