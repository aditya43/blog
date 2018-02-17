<?php

namespace Adi\Http\Controllers;

use Illuminate\Http\Request;
use \Adi\Http\Requests\LoginRequest;

class SessionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->only(['create', 'store']);
    }

    public function create()
    {
        return view('sessions.create');
    }

    public function store(LoginRequest $request)
    {
        if (!auth()->attempt($request->only(['email', 'password'])))
        {
            redirect()->back();
        }
        return redirect()->home();
    }

    public function destroy()
    {
        auth()->logout();
        return redirect()->home();
    }
}
