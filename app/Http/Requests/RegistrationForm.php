<?php

namespace Adi\Http\Requests;

use Adi\Mail\Welcome;
use Adi\User;
use Illuminate\Foundation\Http\FormRequest;

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
            'name'     => 'required',
            'email'    => 'required|email|unique:users',
            'password' => 'required|min:3|confirmed'
        ];
    }

    public function save()
    {
        $user = User::create($this->only(['name', 'email', 'password']));

        auth()->login($user);

        Mail::to($user)->send(new Welcome($user));
    }
}
