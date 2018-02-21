<?php

namespace Adi\Http\Controllers;

use Adi\Http\Requests\RegistrationForm;
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

    public function store(RegistrationForm $form)
    {
        $form->save();

        session()->flash('message', 'Your account has been created!');

        return redirect()->home();
    }
}
