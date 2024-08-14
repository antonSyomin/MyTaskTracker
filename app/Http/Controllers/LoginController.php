<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function store()
    {

    }
}
