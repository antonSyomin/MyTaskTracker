<?php

namespace App\Http\Controllers\User\Boards;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Card;

class CardController extends Controller
{
    public function index(int $board)
    {
        //$cards = Card::paginate();
        //return view('card.list', compact('cards'));
        return 'Вывести карточки с доски #' . $board;
    }

    public function show(int $board, int $id)
    {
        //$card = Card::findOrFail($id);
        //return view('card.view', compact('card'));
        return 'Вывести карточку с id = '. $id . ' доски с id = ' . $board;
    }

    public function create(int $board)
    {
       //$card = new Card();
        //return view('card.create', compact('card'));
        return 'Создать карточку для доски #' . $board;
    }

    public function store(int $board, Request $request)
    {
        /*$data = $request->validate([
                'title' => 'max:50',
                'content' => 'max:200',
                'owner_id' => 'required',
                'status' => 'required|in:started,approving'
            ]);

        $card = new Card();
        $card->fill($data);
        $card->deadline = $request->input('deadline');
        $card->save();
        return redirect()->route('cards.list');*/
        return 'Сохранить новую карточку для доски #' . $board;
    }

    public function edit(int $board, int $id)
    {
        //$card = Card::findOrFail($id);
        //return view('card.edit', compact('card'));
        return 'Вывести форму для редактирования карточки с id = ' . $id . ' с доски #' . $board;
    }

    public function update(int $board, Request $request, $id)
    {
        /*$card = Card::findOrFail($id);
        $data = $request->validate(
            [
                'title' => 'max:50',
                'content' => 'max:200',
                'owner_id' => 'required',
                'status' => 'required|in:started,approving,' . $card->id
            ]
        );
        $card->fill($data);
        $card->deadline = $request->input('deadline');
        $card->save();
        return redirect()->route('cards.list');*/
        return 'Сохранить изменения для карточки с id = ' . $id . ' с доски #' . $board;
    }

    public function delete(int $board, int $id)
    {
        /*$card = Card::find($id);
        if ($card) {
            $card->delete();
        }
        return redirect()->route('cards.list');*/
        return 'Удалить карточку с id = ' . $id . ' с доски #' . $board;
    }
}
