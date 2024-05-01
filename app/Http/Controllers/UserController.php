<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\User;
use App\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = User::whereHas('role', function($query){
            $query->where('role_description', 'Student');
        })->get();

        return view("Users.admin.pages.usermanagement", ["data" => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    // use for registeration
    protected $table = 'user';
    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                "unique_id" => ["required","regex:/^\d{4}-\d{6}$/"],
                "lastname" => ["required", "regex:/^[A-Za-z\s]+$/"],
                "firstname" => ["required", "regex:/^[A-Za-z\s]+$/"],
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
                "gender"=> ["required"],
                "cpnumber"=> ["required"],
                "email"=> ["required", "email", Rule::unique("users", "email")],
                "password" => ["nullable"],
                "status" => ["nullable"],
            ]);

            // Check if the "Student" role already exists
            $role = \App\Models\Role::where('role_description', 'Student')->first();

            // If the "Student" role doesn't exist, create it
            if (!$role) {
                $role = \App\Models\Role::create(['role_description' => 'Student']);
            }

            $user = User::create($validated);
            $user->password = bcrypt($request->unique_id); // Corrected line
            $user->role_id = $role->id; // Assign the role_id directly
            $user->save();
            
            // Return a JSON response with a success flag
            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            // Log the error message for debugging purposes
            \Log::error('Error creating user: ' . $e->getMessage());

            // Return a response with the error message and a success flag set to false
            return response()->json(['success' => false, 'error' => 'Error creating user: ' . $e->getMessage()], 500);
        }
    }


    /**
     * Display the specified resource.J
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
