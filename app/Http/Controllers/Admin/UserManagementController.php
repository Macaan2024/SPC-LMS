<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use App\Models\User;
use App\Models\Role;


class UserManagementController extends Controller
{
    //

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
                "unique_id" => ["nullable","regex:/^\d{4}-\d{6}$/"],
                "lastname" => ["nullable", "regex:/^[A-Za-z\s]+$/"],
                "firstname" => ["nullable", "regex:/^[A-Za-z\s]+$/"],
                "middlename" => ["nullable"],
                "level" => ["nullable"],
                "grade" => ["nullable"],
                "strand" => ["nullable"],
                "status"=> ["nullable"],
                "user_image"=> ["nullable"],
                "section" => ["nullable"],
                "course" => ["nullable"],
                "year" => ["nullable"],
                "department"=> ["nullable"],
                "gender"=> ["nullable"],
                "cpnumber"=> ["nullable"],
                "email"=> ["nullable"],
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
        $level = User::query()->orderBy('level')->get();

        return view('Users.admin.pages.usermanagement_edit', compact('student', 'roles', 'level'));
    }
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $role = Role::find($request->role_id);
        // Validate the request data 
        $request->validate([
            "role_id" => ["nullable", "exists:roles,id"],
            "unique_id" => ["nullable", "regex:/^\d{4}-\d{6}$/", Rule::unique('users')->ignore($user->id)],
            "lastname" => ["nullable", "regex:/^[A-Za-z\s]+$/"],
            "firstname" => ["nullable", "regex:/^[A-Za-z\s]+$/"],
            "middlename" => ["nullable"],
            "level" => ["nullable"],
            "grade" => ["nullable"],
            "strand" => ["nullable"],
            "status" => ["nullable"],
            "section" => ["nullable"],
            "course" => ["nullable"],
            "year" => ["nullable"],
            "department" => ["nullable"],
            "gender" => ["nullable"],
            "cpnumber" => ["nullable"],
            "email" => ["nullable", "email", Rule::unique('users')->ignore($user->id)],
            "password" => ["nullable"],
            "user_image" => ["nullable", "image", "max:2048"],
        ]);
    
   


        if (!$role) {
            return back()->with('error', 'Role not found');
        }

        if ($request->hasFile('user_image')) {
            // Generate a unique name for the image file
            $imageName = time(). '_'. $request->user_image->getClientOriginalName();
            // Move the uploaded file to the 'userimages' directory
            $request->user_image->move(public_path('userimages'), $imageName);
        } else {
            // If no new image is uploaded, retain the existing image name
            $imageName = $user->user_image;
        }
        

        $selectLevel = $request->input('level');

        if($selectLevel == 'College') {
            $request->strand = '';
            $request->grade = '';
            $request->section = '';
            $selectLevel = '';
        } 
        if ($selectLevel == 'Senior Highschool') {
            $request->course = '';
            $request->year = '';
            $request->department = '';
            $selectLevel = '';
        } 
        if ($selectLevel== 'Junior Highschool') {
            $request->course = '';
            $request->year = '';
            $request->strand = '';
            $selectLevel = '';
        }
        if ($selectLevel == 'Elementary') { // Adjusted condition
            $request->course = '';
            $request->year = '';
            $request->strand = '';
            $selectLevel = '';
        }

        if ($request->password) {
            $password = Hash::make($request->password);
        }
        else {
            $password = $user->password;
        }

        $user->update([
        
            'role_id' => $request->role_id,
            'unique_id' => $request->unique_id,
            'lastname' => $request->lastname,
            'firstname' => $request->firstname,
            'middlename' => $request->middlename,
            'level' => $request->level,
            'grade' => $request->grade,
            'strand' => $request->strand,
            'section' => $request->section,
            'course' => $request->course,
            'year' => $request->year,
            'department' => $request->department,
            'gender' => $request->gender,
            'cpnumber' => $request->cpnumber,
            'email' => $request->email,
            'password' => $password,
            'user_image' => $imageName,
        ]);

        return back()->with('editSuccessfully', 'Successfully updated user');
    }

    /// End of update Controller 

    public function view ($id) {
        $student = User::findOrFail($id);
        $roles = Role::all();
        return view('Users.admin.pages.usermanagement_view', compact('student', 'roles'));
    }
}
