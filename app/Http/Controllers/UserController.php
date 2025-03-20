<?php

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Inertia\Inertia;

class UserController
{
    public function login()
    {
        return Inertia::render('User/Login');
    }
}