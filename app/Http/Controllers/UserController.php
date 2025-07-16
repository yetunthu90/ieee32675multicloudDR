<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Validation\Rule;
use App\Models\Message;
use App\Models\Course;


class UserController extends Controller
{
    public function index()
    {
        $user_auth = auth()->user();
        $loggedInUser = auth()->user();
    //    Fetch all User by desc oder
        $Users = User::orderBy('created_at', 'DESC')->get();

        // Pass data to the index view
        return view('users.index',compact('Users','user_auth'));
        
    }
    public function create()
    {
        return view('users.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
        ]);
          
        $users = new User();
        $users->first_name = $request->first_name;
        $users->last_name  = $request->last_name;
        $users->email      = $request->email;
        $users->password   = Hash::make($request->password);
        if ($users->save()) {
             return redirect()->route('users')->with('success', 'User Added Successfully!');
        }
            else{
                return redirect()->route('users')->with('error', 'Failed to add User!');
            }
    }
    public function edit($id)
    {
        $User = User::findOrFail($id);
        return view('users.edit', compact('User'));
    }
    public function update(Request $request, $id)
    {
        // Retrieve the user by ID
        $user = User::findOrFail($id);

        // Validate the request data
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => [
                'required',
                'email',
                Rule::unique('users')->ignore($user->id), // Ignore the current user's email
            ],
            'password' => 'sometimes|string|min:8',
            'role' => [
                'required', 
                'string', 
                Rule::in(['admin', 'user', 'editor']), // Ensure the role is one of these values
            ],
        ]);

        // Update the user
        $user->update($request->only(['first_name', 'last_name', 'email', 'password','role']));

        return redirect()->route('users')->with('success', 'User updated successfully.');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('users')->with('success', 'User deleted successfully.');
    }
    public function show($id)
    {
        $user = User::findOrFail($id); // Fetch the course data by ID
        return view('users.show', compact('user'));
    }
    public function users_listing()
    {   
         // Fetch the latest courses ordered by created_at
         $courses = Course::all();
         // Pass data to the index view
         return view('users.users_listing',compact('courses'));
             
    }
   
public function emergency()
{
    return view('users.emergency_contact'); // This shows your contact form
}

public function emergency_contact_store(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'subject' => 'required|string|max:255',
        'message' => 'required|string',
    ]);

    // Store the message (assuming you have a Message model)
    Message::create($validated);

    // Redirect back to users listing with success message
    return redirect()->route('users.listing')
                   ->with('success', 'Your message has been sent!');
}
}
