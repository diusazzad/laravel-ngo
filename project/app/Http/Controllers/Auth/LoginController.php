<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Authenticatable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{


    public function showLoginForm()
    {
        return view('login');
    }
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $remember = $request->has('remember'); // Check if "Remember Me" checkbox is checked

        if (Auth::attempt($credentials, $remember)) {
            $user = Auth::user(); // Get the authenticated user

            // Check the role of the user and redirect accordingly
            if ($user->role == 'superadmin') {
                return redirect()->route('superadmin.dashboard');
            } else if ($user->role == 'user') {
                return redirect()->route('user.dashboard');
            } elseif ($user->role == 'admin') {
                return redirect()->route('admin.dashboard');
            } elseif ($user->role == 'editor') {
                return redirect()->route('editor.dashboard');
            } else {
                // Handle other roles or default redirection here
                return redirect()->intended('/'); // Redirect to the intended page after successful login.
            }
        } else {
            return redirect()->route('login')->withErrors(['email' => 'Invalid email or password.']);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }



}
