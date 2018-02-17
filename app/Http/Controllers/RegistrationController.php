<?php

namespace Adi\Http\Controllers;

use Illuminate\Http\Request;
use \Adi\Http\Requests\CreateUserAccount;
use \Adi\User;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }

    public function store(CreateUserAccount $request)
    {
        $user = User::create(request(['name', 'email', 'password']));
        auth()->login($user);
        return redirect()->home();
    }
}
