<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use App\Models\User;
use App\Models\Role;
use App\Models\Transaction;
use App\Models\Book;


class UserManagementController extends Controller
{
    //

    public function index(Request $request)
    {
        $college = User::where('level', 'College')->count();
        $seniorhigh = User::where('level', 'Senior Highschool')->count();
        $juniorhigh = User::where('level', 'Junior Highschool')->count();
        $elementary = User::where('level', 'Elementary')->count();
        $faculty = User::where('role_id', 3)->count();
        $staff = User::where('role_id', 4)->count();

        $userQuery = User::query(); // Initialize the query builder

        // Apply search filter if a search term is provided
        if ($request->has('search')) {
            $searchTerm = $request->get('search');
            $userQuery->where(function ($query) use ($searchTerm) {
                $query->where('firstname', 'like', "%{$searchTerm}%")
                    ->orWhere('lastname', 'like', "%{$searchTerm}%")
                    ->orWhere('unique_id', 'like', "%{$searchTerm}%");
            });
        }


        // Execute the query to get all users
        $user = $userQuery->get(); // Fetch all users without pagination

        return view("Users.admin.pages.usermanagement.usermanagement", ["college" => $college, "seniorhigh" => $seniorhigh, "juniorhigh" => $juniorhigh, "elementary" => $elementary, 'user' => $user, 'faculty' => $faculty, 'staff' => $staff]);
    }

    public function libraryStaff(Request $request) {
        $facultyValidated = $request->validate([
            "unique_id" => ["required", "regex:/^\d{4}-\d{6}$/"],
            "lastname" => ["nullable", "regex:/^[A-Za-z\s]+$/"],
            "firstname" => ["nullable", "regex:/^[A-Za-z\s]+$/"],
            "middlename" => ["nullable"],
            "status" => ["nullable"],
            "user_image" => ["nullable", "image"],
            "gender" => ["nullable"],
            "cpnumber"=> ["nullable"],
            "email" => ["nullable", "email"],
            "password" => ["nullable"],
        ]);
    
        // Ensure role 'Student' exists
        $role = Role::firstOrCreate(['role_description' => 'Library Staff']);
    
        if ($request->hasFile('user_image')) {
            // Capture filename with extension
            $extension = $request->file('user_image')->getClientOriginalExtension();
            // Rename image
            $newFilename = str_replace(' ', '', $facultyValidated['unique_id']) . '.' . $extension;
    
            // Construct the dynamic folder path
            $path = public_path("library staff");
    
            // Create the directories if they do not exist
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }
    
            // Move the uploaded file to the constructed path
            $request->file('user_image')->move($path, $newFilename);
    
            // Save the image path in the validated array
            $facultyValidated['user_image'] = $newFilename;
        } else {
            // Set default image if no image is uploaded
            $facultyValidated['user_image'] = 'default_image.jpg';
        }
    
        // Hash the password
        $facultyValidated['password'] = bcrypt($request->unique_id);
    
        // Create the user and assign the role
        $user = User::create($facultyValidated);
        $user->role_id = $role->id; // Assign the role_id directly
        $user->save();
    
        return back()->with('message', 'Faculty registration successful');
    }

    public function faculty(Request $request) {
        $facultyValidated = $request->validate([
            "unique_id" => ["required", "regex:/^\d{4}-\d{6}$/"],
            "lastname" => ["nullable", "regex:/^[A-Za-z\s]+$/"],
            "firstname" => ["nullable", "regex:/^[A-Za-z\s]+$/"],
            "middlename" => ["nullable"],
            "status" => ["nullable"],
            "user_image" => ["nullable", "image"],
            "gender" => ["nullable"],
            "cpnumber"=> ["nullable"],
            "email" => ["nullable", "email"],
            "password" => ["nullable"],
        ]);
    
        // Ensure role 'Student' exists
        $role = Role::firstOrCreate(['role_description' => 'Faculty']);
    
        if ($request->hasFile('user_image')) {
            // Capture filename with extension
            $extension = $request->file('user_image')->getClientOriginalExtension();
            // Rename image
            $newFilename = str_replace(' ', '', $facultyValidated['unique_id']) . '.' . $extension;
    
            // Construct the dynamic folder path
            $path = public_path("faculty");
    
            // Create the directories if they do not exist
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }
    
            // Move the uploaded file to the constructed path
            $request->file('user_image')->move($path, $newFilename);
    
            // Save the image path in the validated array
            $facultyValidated['user_image'] = $newFilename;
        } else {
            // Set default image if no image is uploaded
            $facultyValidated['user_image'] = 'default_image.jpg';
        }
    
        // Hash the password
        $facultyValidated['password'] = bcrypt($request->unique_id);
    
        // Create the user and assign the role
        $user = User::create($facultyValidated);
        $user->role_id = $role->id; // Assign the role_id directly
        $user->save();
    
        return back()->with('message', 'Faculty registration successful');
    }

    public function student(Request $request)
    {

            $studentValidated = $request->validate([
                "unique_id" => ["required","regex:/^\d{4}-\d{6}$/"],
                "lastname" => ["nullable", "regex:/^[A-Za-z\s]+$/"],
                "firstname" => ["nullable", "regex:/^[A-Za-z\s]+$/"],
                "middlename" => ["nullable"],
                "level" => ["nullable"],
                "grade" => ["nullable"],
                "strand" => ["nullable"],
                "status"=> ["nullable"],
                "user_image"=> ["nullable", "image"],
                "section" => ["nullable"],
                "course" => ["nullable"],
                "year" => ["nullable"],
                "department"=> ["nullable"],
                "gender"=> ["nullable"],
                "cpnumber"=> ["nullable"],
                "email"=> ["nullable"],
                "password" => ["nullable",],
            ]);

            // Check if the "Student" role already exists
            $role = Role::where('role_description', 'Student')->first();

            // If the "Student" role doesn't exist, create it
            if (!$role) {
                $role = Role::create(['role_description' => 'Student']);
            }


            if ($request->hasFile('user_image')) {
                // Capturing filename with extension
                $extension = $request->file('user_image')->getClientOriginalExtension();
                // Renaming image
                $newFilename = str_replace(' ', ' ', $studentValidated['unique_id']) . '.' . $extension;
        
                // Constructing the dynamic folder path
                $levelFolder = str_replace(' ', ' ', $studentValidated['level']);
    
                    $path = public_path("student/{$levelFolder}");

        
                // Create the directories if they do not exist
                if (!file_exists($path)) {
                    mkdir($path, 0777, true);
                }
        
                // Move the uploaded file to the constructed path
                $request->file('user_image')->move($path, $newFilename);
        
                // Save the image path in the buser_imageook validation array
                $studentValidated['user_image'] = $newFilename;
            } else {
                // Set default image if no image is uploaded
                $studentValidated['user_image'] = 'default_image.jpg';
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


    // edit function part ----------------
    public function show($id) {
        $student = User::findorFail($id);
        $roles = Role::all();
        $level = User::query()->orderBy('level')->get();

        return view('Users.admin.pages.usermanagement.usermanagement_edit', compact('student', 'roles', 'level'));
    }
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $role = Role::find($request->role_id);
    
        // Validate the request data 
        $studentValidated = $request->validate([
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
            // Capturing filename with extension
            $extension = $request->file('user_image')->getClientOriginalExtension();
            // Renaming image
            $newFilename = str_replace(' ', '_', $studentValidated['unique_id']) . '.' . $extension;
    
            // Constructing the dynamic folder path
            $levelFolder = str_replace(' ', '_', $studentValidated['level']);
            $path = public_path("student/{$levelFolder}");
    
            // Create the directories if they do not exist
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }
    
            // Move the uploaded file to the constructed path
            $request->file('user_image')->move($path, $newFilename);
    
            // Save the image path in the validation array
            $studentValidated['user_image'] = $newFilename;
        } else {
            // Set default image if no image is uploaded
            $studentValidated['user_image'] = $user->user_image; // keep existing image if no new one is uploaded
        }
    
        // Conditional level logic
        if ($studentValidated['level'] == 'College') {
            $studentValidated['strand'] = null;
            $studentValidated['grade'] = null;
            $studentValidated['section'] = null;
        } elseif ($studentValidated['level'] == 'Senior Highschool') {
            $studentValidated['course'] = null;
            $studentValidated['year'] = null;
            $studentValidated['department'] = null;
        } elseif ($studentValidated['level'] == 'Junior Highschool') {
            $studentValidated['course'] = null;
            $studentValidated['year'] = null;
            $studentValidated['strand'] = null;
        } elseif ($studentValidated['level'] == 'Elementary') {
            $studentValidated['course'] = null;
            $studentValidated['year'] = null;
            $studentValidated['strand'] = null;
        }
    
        // Handle password hashing
        if ($request->filled('password')) {
            $studentValidated['password'] = Hash::make($request->password);
        } else {
            $studentValidated['password'] = $user->password;
        }
    
        // Update user
        $user->update($studentValidated);
    
        return back()->with('editSuccessfully', 'Successfully updated user');
    }
    /// End of update Controller 

    public function view($id) {
        $student = User::findOrFail($id);
        $previousBorrow = Transaction::where('user_id', $id)->with('book', 'user')->first();
        $transaction = Transaction::where('user_id', $id)->get();
    
        return view('Users.admin.pages.usermanagement.usermanagement_view', compact('student', 'previousBorrow', 'transaction'));
    }

    public function archieve($id) {
        $user = User::findOrFail($id);
        

        $user->update([
            'status' => 'Removed',
        ]);

        $user->save();

        return redirect()->back()->with('removeUser','Sucessfully Remove user');
        
    }
}
