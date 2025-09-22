<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class ProfileController extends Controller
{
    public function show()
    {
        return view('profile', ['user' => auth()->user()]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'regno' => 'nullable|string|max:50',
            'phone' => 'nullable|string|max:15',
            'address' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:100',
            'pincode' => 'nullable|string|max:20',
            'bloodgroup' => 'nullable|string|max:10',
        ]);

        $user = auth()->user();
        $user->update($request->only([
            'name',
            'email',
            'regno',
            'phone',
            'address',
            'city',
            'pincode',
            'bloodgroup'
        ]));

        return back()->with('success', 'Profile updated successfully!');
    }
}
