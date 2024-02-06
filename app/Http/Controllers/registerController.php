<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;



class registerController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function event(Request $request)
    {

        $validate = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        return to_route('login');
    }
}
