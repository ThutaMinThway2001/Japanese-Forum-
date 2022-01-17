<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.Create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => 'required|max:255|min:3',
            'profile' => 'required|mimes:jpg,png,jpeg|image',
            'username' => 'required|max:255|min:3|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:7|max:255'
        ]);
        $attributes['profile'] = request()->file('profile')->store('profiles');
        $user = User::create($attributes);

        auth()->login($user);

        return redirect('/')->with('success', 'user created successfully');
    }
}
