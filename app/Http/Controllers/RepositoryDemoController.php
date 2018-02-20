<?php

namespace Adi\Http\Controllers;

use Illuminate\Http\Request;

class RepositoryDemoController extends Controller
{
    public function index(\Adi\Http\Repositories\Demo $repository)
    {
        return $repository->all();
    }
}
