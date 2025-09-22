<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'regno' => 'required|unique:users,regno',
            'phone' => 'required|unique:users,phone',
            'password' => 'required|string|confirmed|min:6',
        ]);


        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'regno' => $request->regno,
            'phone' => $request->phone,
            'password' => bcrypt($request->password),
        ]);

        // Redirect to login after registration
        return redirect()->route('login')->with('success', 'Registration successful! Please login.');
    }
}
