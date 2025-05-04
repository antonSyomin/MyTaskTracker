<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        dd('s');
        return view('register.index');
    }

    public function store()
    {
        return 'Сохранить нового пользователя';
    }
}
