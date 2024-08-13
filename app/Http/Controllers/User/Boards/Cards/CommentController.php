<?php

namespace App\Http\Controllers\User\Boards\Cards;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(int $board, int $card)
    {
        return 'Комментарии карточки ' . $card . ' с доски ' . $board;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($card)
    {
        return 'Вывести форму для создания комментария в карточке ' . $card;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return 'Сохранить новый комментарий для карточки ' . $card;
    }

    /**
     * Display the specified resource.
     */
    public function show($card, string $id)
    {
        return 'Показать комментарий ' . $id . ' из карточки ' . $card;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($card, string $id)
    {
        return 'Вывести форму для редактирования комментария ' . $id . ' из карточки ' . $card;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return 'Изменить комментарий ' . $id . ' из карточки ' . $card;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($card, string $id)
    {
        return 'Удалить комментарий ' . $id . ' из карточки ' . $card;
    }
}
