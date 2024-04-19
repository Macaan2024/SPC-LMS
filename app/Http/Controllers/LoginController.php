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
                $role_id = null;

                if ($user->roles->isNotEmpty()) {
                    $role_id = $user->roles->first()->id;
                }
                if ($role_id == 1) {
                    return redirect()->route('home.student');
                }
                else {
                    return redirect()->route('login');
                }
            }else {
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
