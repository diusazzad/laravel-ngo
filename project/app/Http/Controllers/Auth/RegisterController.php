<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        // Validate the user
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|unique:users|max:255',
            'password' => 'required|confirmed|max:255',
        ]);

        // Create and save the user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            // Hash the password
            'password' => Hash::make($request->password),
        ]);

        // Sign the user in
        auth()->login($user);

        // Redirect to the home page
        return redirect()->route('home');
    }
}
