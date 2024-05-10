<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\User;
use App\Models\Role;



class UserManagementController extends Controller
{
    public function index()
    {
        $data = User::whereHas('role', function($query){
            $query->where('role_description', 'Student');
        })->orderBy('created_at', 'desc')->get();

        return view("Users.admin.pages.usermanagement", ["data" => $data]);
    }

    public function store(Request $request)
    {

            $studentValidated = $request->validate([
                "unique_id" => ["required","regex:/^\d{4}-\d{6}$/"],
                "lastname" => ["required", "regex:/^[A-Za-z\s]+$/"],
                "firstname" => ["required", "regex:/^[A-Za-z\s]+$/"],
                "middlename" => ["required"],
                "level" => ["required"],
                "grade" => ["nullable"],
                "strand" => ["nullable"],
                "status"=> ["nullable"],
                "user_image"=> ["nullable"],
                "section" => ["nullable"],
                "course" => ["nullable"],
                "year" => ["nullable"],
                "department"=> ["nullable"],
                "gender"=> ["required"],
                "cpnumber"=> ["required"],
                "email"=> ["required", "email", Rule::unique("users", "email")],
                "password" => ["nullable"],
            ]);

            // Check if the "Student" role already exists
            $role = \App\Models\Role::where('role_description', 'Student')->first();

            // If the "Student" role doesn't exist, create it
            if (!$role) {
                $role = \App\Models\Role::create(['role_description' => 'Student']);
            }
    
      
                $user = User::create($studentValidated);
                $user->password = bcrypt($request->unique_id); // Corrected line
                $user->role_id = $role->id; // Assign the role_id directly
                $user->save();
    
                return back()->with('message', 'Student registration successful');

            // Return a JSON response with a success flag
        
    }
    public function fetchUsers(Request $request) {
        $yearLevel = $request->input('level');
        $searchQuery = $request->input('query'); // Get the search query from the request

        $query = User::with('role')->whereHas('role', function($query) {
            $query->where('role_description', 'Student');
        });

        // Apply year level filter if year level is not "All"
        if ($yearLevel !== "All") {
            $query->where('level', $yearLevel);
        }

        // Apply search query filter if search query is present
        if (!empty($searchQuery)) {
            $query->where(function ($query) use ($searchQuery) {
                $query->where('unique_id', 'like', '%' . $searchQuery . '%')
                      ->orWhere('firstname', 'like', '%' . $searchQuery . '%')
                      ->orWhere('lastname', 'like', '%' . $searchQuery . '%');
            });
        }

        $students = $query->get();

        // Return a JSON response
        return response()->json($students);
    }

    public function destroy($id) {
        $user = User::findOrFail($id);
        $user->delete();

        return response()->json(['success' => 'User deleted successfully.']);
    }

    // edit function part ----------------
    public function show($id) {
        $student = User::findorFail($id);
        $roles = Role::all();

        return view('Users.admin.pages.usermanagement_edit', compact('student', 'roles'));
    }
    // public function update(Request $request, User $student) {

    // }

    public function update(Request $request, User $student)
    {
        // Validate the request data
        $request->validate([
            "role_id" => ["required", "exists:roles,id"],
            "unique_id" => ["required","regex:/^\d{4}-\d{6}$/"],
            "lastname" => ["required", "regex:/^[A-Za-z\s]+$/"],
            "firstname" => ["required", "regex:/^[A-Za-z\s]+$/"],
            "middlename" => ["required"],
            "level" => ["required"],
            "grade" => ["nullable"],
            "strand" => ["nullable"],
            "status"=> ["nullable"],
            "user_image"=> ["nullable", "image", "max:2048"], // Adjust the validation for user_image
            "section" => ["nullable"],
            "course" => ["nullable"],
            "year" => ["nullable"],
            "department"=> ["nullable"],
            "gender"=> ["required"],
            "cpnumber"=> ["required"],
            "email"=> ["required", "email", Rule::unique("users", "email")],
            "password" => ["nullable"],
        ]);

        // Handle the user_image upload
        if($request->hasFile('user_image')) {
            $image = $request->file('user_image');
            $filename = time(). '.'. $image->getClientOriginalExtension();
            $path = $request->user_image->storeAs('public/userimages', $filename);

            // Update the user model with the new image path
            $student->user_image = $path;
        }

        // Update the student with the validated data
        $student->update($request->all());

        return back()->with('message', 'Successfully Editing User');
    }
    // end of edit -------------------
   
}