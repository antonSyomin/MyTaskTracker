<?php

namespace App\Http\Controllers\User\Boards\Cards;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    protected array $attachments;

    public function index(int $board, int $card)
    {
        $customers = Customer::with(['orders' => function ($q) {
            $q->where('created_at', '>', now()->subWeek());
        }])->get();

        // Новый комментарий на русском языке
        return response()->json($this->attachments);
    }

    public function create($card)
    {
        // Новый комментарий
        return 'Вывести форму для создания комментария в карточке ' . $card;
    }

    /**
     * Сохраняет новый комментарий
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:posts|max:255',
            'body' => 'required',
            'publish_at' => 'nullable|date',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Card $card)
    {
        return Inertia::render('Comment/Show', [
            'card' => $card,
        ]);
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
