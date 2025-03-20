<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Board;

class BoardController extends Controller
{
    /**
     * Вывести список всех досок, доступных пользователю.
     */
    public function index()
    {
        $boards = Board::all();
        return view('user.boards.index', compact('boards'));
    }

    /**
     * Вывод формы для создания новой доски.
     */
    public function create()
    {
        return view('user.boards.create');
    }

    /**
     * Сохранить новую доску.
     */
    public function store(Request $request)
    {
        $validated = validator($request->all(), [
            'title' => ['required'],
            'content' => ['required']
        ])->validate();

        return redirect('user.boards.index');
    }

    /**
     * Вывод доски с определенным id.
     */
    public function show(string $id)
    {
        $board = Board::findOrFail($id);

        return view('user.boards.show', compact('board'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $board = (object) [
            'id' => 12,
            'title' => 'Lorem ipsum dolor sit amet.',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, nostrum.'
        ];
        return view('user.boards.edit', compact('board'));
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
