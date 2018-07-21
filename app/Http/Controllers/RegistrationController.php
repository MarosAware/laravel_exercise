<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Mail\Welcome;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('registration.create');
    }

    public function store()
    {
        //validate form

        $this->validate(request(), [
           'name' => 'required|min:3',
           'email' => 'required|email',
           'password' => 'required|min:3|confirmed'
        ]);

        //create and save the user

        $user = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => Hash::make(request('password'))
        ]);

        //sign them in

        auth()->login($user);

        //Mail

        \Mail::to($user)->send(new Welcome($user));

        //redirect to the home page

        return redirect()->home();
    }
}
