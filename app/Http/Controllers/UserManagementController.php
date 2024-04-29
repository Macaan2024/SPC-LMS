<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserManagementController extends Controller
{
    public function fetchUsers(Request $request) {
        $yearLevel = $request->input('level');
    
        // Corrected variable name from $data to $students
        $students = User::with('role')->whereHas('role', function($query) use ($yearLevel) {
            $query->where('role_description', 'Student');
            $query->where('level', $yearLevel); // Corrected to use $query instead of $students
        })->get();
    
        // Return a JSON response with the correct variable name
        return response()->json($students);
    }

    public function destroy($id) {
        $user = User::findOrFail($id);
        $user->delete();

        return response()->json(['success' => 'User deleted successfully.']);
    }
}
