<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

/**
 * Контроллер для управления пользователями
 */
class UserController
{
    /**
     * Отображает страницу входа в систему
     *
     * @return \Inertia\Response
     */
    public function login()
    {
        return Inertia::render('User/Login');
    }

    public function register(int $userId)
    {

        return Inertia::render('User/Register');
    }


}