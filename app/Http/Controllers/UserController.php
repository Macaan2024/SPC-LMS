<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function loginProccess(Request $request) {
        $validated = $request->validate(
            [
                "unique_id"=> "required",
                "password"=> "required"
            ]
        );
        if (auth()->attempt($request->only('unique_id', 'password'))) {
            $user = auth()->user();
            if ($user->hasRole('Student')) {
                return redirect()->route('student.index'); // Assuming you have a route named 'student.index'
            } elseif ($user->hasRole('Admin')) {
                return redirect()->route('admin.index'); // Assuming you have a route named 'admin.index'
            } else {
                return 'User role not recognized';
            }
        } else {
            return 'Invalid credentials';
        }
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
                "role_description"=> ["required"],
                "email"=> ["required", "email", Rule::unique("users", "email")],
            ]);

            // Remove the role_description from the validated data
            $roleDescription = $validated['role_description'];
            unset($validated['role_description']);

            $request->merge(['password' => bcrypt($request->unique_id)]);
            $user = User::create($validated);

            // Check if the role already exists
            $role = \App\Models\Role::where('role_description', $roleDescription)->first();

            // If the role doesn't exist, create it
            if (!$role) {
                $role = \App\Models\Role::create(['role_description' => $roleDescription]);
            }

            // Attach the role to the user
            $user->roles()->attach($role->id);
            
            return response()->json(['message' => 'User created successfully', 'user' => $user], 201);
        } catch (\Exception $e) {
            // Log the error message for debugging purposes
            \Log::error('Error creating user: ' . $e->getMessage());

            // Return a response with the error message
            return response()->json(['error' => 'Error creating user: ' . $e->getMessage()], 500);
        }
    }

    /**
     * Display the specified resource.
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
