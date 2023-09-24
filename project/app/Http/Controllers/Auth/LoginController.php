<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Authenticatable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{


    public function showLoginForm()
    {
        return view('login');
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('web')->attempt($credentials)) {
            // The user has logged in successfully.
            if (Auth::user()->role === 'user') {
                return redirect()->route('user.dashboard');
            } elseif (Auth::user()->role === 'admin') {
                return redirect()->route('admin.dashboard');
            }
        }

        // The user could not be logged in.
        return back()->withErrors([
            'email' => 'The email address or password is incorrect.',
        ]);
    }


}
