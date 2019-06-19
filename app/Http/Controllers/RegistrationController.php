<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegistrationController extends Controller
{
    public function create(){

        $user = \DB::table('users');

        if (!$user->count()) {
            return view('register.create');
        }

        return redirect('/login');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'     => 'required|max:50',
            'email'    => 'required|unique:users|email',
            'password' => 'required|confirmed'
        ]);

        $user = User::create([
            'name'     => request('name'),
            'email'    => request('email'),
            'password' => bcrypt(request('password')),
        ]);

        return redirect('/');
    }
}
