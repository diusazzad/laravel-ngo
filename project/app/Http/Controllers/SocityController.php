<?php

namespace App\Http\Controllers;

use App\Models\Socity;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SocityController extends Controller
{
    public function socity()
    {
        // Get the authenticated user
        $user = Auth::user();

        // Fetch data for SocietyID and Username
        $societies = Socity::all(); // Fetch all societies

        $societyOptions = Socity::pluck('SocietyName', 'SocietyID');
        $userOptions = User::pluck('name', 'id');

        // Pass the data to the view
        $data = [
            'user' => $user,
            'societies' => $societies,
            // Pass the societies data
            'societyOptions' => $societyOptions,
            'userOptions' => $userOptions,
        ];

        // Assuming you have an 'admin.socity.dashboard' view for the admin dashboard
        return view('admin.socity.dashboard', $data);
    }


}
