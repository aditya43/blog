<?php

namespace Adi\Http\Controllers;

use Adi\Http\Repositories\Demo;
use Illuminate\Http\Request;

class RepositoryDemoController extends Controller
{
    public function index(Demo $repository)
    {
        return $repository->all();
    }
}
