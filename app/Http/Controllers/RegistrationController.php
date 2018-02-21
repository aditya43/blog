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

        return redirect()->home();
    }
}
