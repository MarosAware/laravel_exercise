<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\User;
use App\Mail\Welcome;
use Illuminate\Support\Facades\Mail;

class RegistrationForm extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:3',
            'email' => 'required|email',
            'password' => 'required|min:3|confirmed'
        ];
    }

    public function persist()
    {
        // request(['a', 'b', 'c']) the same as request->only(['a', 'b', 'c'])
        //create and save the user

        $user = User::create(
            $this->only(['name', 'email', 'password'])
        );

        //sign them in

        auth()->login($user);

        //Mail

        //Mail::to($user)->send(new Welcome($user));
    }
}
