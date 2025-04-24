<?php

namespace App\Http\Controllers;

/**
 * Контроллер для работы с ключевыми словами
 * Предоставляет методы для получения и управления ключевыми словами
 */
class KeywordController extends Controller
{
    /**
     * Отображает список доступных ключевых слов
     *
     * @return string
     */
    public function index()
    {
        return 'Список ключевиков';
    }
}
