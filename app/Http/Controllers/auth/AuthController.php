<?php

namespace App\Http\Controllers\auth;

use App\Mail\PasswordResetMail; 
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Course;

class AuthController extends Controller
{  
    public function index()
    {
        return view('auth.register');
    }

    public function register(Request $request)
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
             return redirect()->route('login')->with('success', 'Account created successfully!');
        }
            else{
                return redirect()->route('registeration')->with('error', 'Failed to create account!');
            }
    }
    public function login()
    {
      
        return view('auth.login');
    }
    
    public function dologin(Request $request) // Accepts a Request object
    {
        $credentials = $request->only('email', 'password'); // Get input values

        if (Auth::attempt($credentials)) {
            $user = Auth::user(); // Retrieve authenticated user

            if ($user->role === 'admin') {
                return redirect()->route('dashboard'); // Redirect admins
            } else {
                return redirect()->route('users.listing'); // Redirect normal users
            }
        } else {
            return redirect()->route('login')->with('message', 'Login is Invalid');
        }
    }
    public function forgotPassword(){
        return view('auth.forgot-password');
    }
    public function doForgotPassword(){
        
        $users= User::where('email',request('email'))->first();
        $token = Str::random(120);
        $users->update(['password_reset_token'=>$token]);
        Mail::to(request('email'))->send(new PasswordResetMail($users,$token));
        return $token;

    }

    public function logout(Request $request)
    {
        Auth::logout(); // Logs the user out
        $request->session()->invalidate(); // Invalidates the session
        $request->session()->regenerateToken(); // Regenerates the CSRF token
        $Users = User::orderBy('created_at', 'DESC')->get();
        $courses = Course::latest()->take(3)->get();
        return view('index', compact('courses')); // Redirects to the home page or any other page
    }

}
