<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index()
    {
        return view('register.index');
    }

    public function store()
    {
        return 'Сохранить нового пользователя';
    }
}
