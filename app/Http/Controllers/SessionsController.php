<?php

namespace Adi\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function destroy()
    {
        auth()->logout();
        return redirect()->home();
    }
}
