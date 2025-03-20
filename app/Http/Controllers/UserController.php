<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Inertia\Inertia;

/**
 * Контроллер для управления пользователями
 */
class UserController
{
    public function login()
    {
        return Inertia::render('User/Login');
    }
}