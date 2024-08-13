<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BoardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return 'Вывести список досок пользователя';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return 'Вывести форму для создания доски';
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return 'Сохранить новую доску';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return 'Вывести на экран доску с id = ' . $id;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return 'Вывести форму для редактирования доски с id = ' . $id;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return 'Сохранить изменения в доске ' . $id;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return 'Удалить доску с id = ' . $id;
    }
}
