<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationForm;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('registration.create');
    }

    public function store(RegistrationForm $form)
    {
        //validate form is in the request registrationRequest class

        $form->persist();


        //redirect to the home page

        return redirect()->home();
    }
}
