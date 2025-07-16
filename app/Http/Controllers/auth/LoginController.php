<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
      
        return view('auth.login');
    }
    protected function authenticated(Request $request, $user)
    {
        // Redirect based on role
        if ($user->role === 'admin') {
            return redirect()->route('dashboard');
        } elseif ($user->role === 'user') {
            return redirect()->route('users.users_listing');
        }

        // Default redirect
        return redirect('/home');
    }
}
