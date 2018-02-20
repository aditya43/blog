<?php

namespace Adi\Http\Controllers;

use Adi\Mail\Welcome;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use \Adi\Http\Requests\CreateUserAccount;
use \Adi\User;

class RegistrationController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function create()
    {
        return view('registration.create');
    }

    public function store(CreateUserAccount $request)
    {
        $user = User::create(request(['name', 'email', 'password']));

        auth()->login($user);

        Mail::to($user)->send(new Welcome($user));

        return redirect()->home();
    }
}
