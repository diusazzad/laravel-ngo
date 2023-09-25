<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function createUser()
    {
        $user = new User(['name' => 'John Doasdfadfe', 'email' => 'johnasdfsadf@example.com']);
        $user->save();
    }
}
