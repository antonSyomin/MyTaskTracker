<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Card;

class CardController extends Controller
{
    public function list()
    {
        $cards = Card::paginate();
        return view('card.list', compact('cards'));
    }

    public function view(int $id)
    {
        $card = Card::findOrFail($id);
        return view('card.view', compact('card'));
    }

    public function create()
    {
        $card = new Card();
        return view('card.create', compact('card'));
    }

    public function store(Request $request)
    {
        $data = $request->validate(
            [
                'title' => 'max:50',
                'content' => 'max:200',
                'owner_id' => 'required',
                'status' => 'required|in:started,approving',
                'deadline' => 'date'
            ]
        );

        var_dump($data);
        $card = new Card();
        $card->fill($data);
        $card->save();
        //return redirect()->route('cards.list');
    }

    public function edit(int $id)
    {
        $card = Card::findOrFail($id);
        return view('card.edit', compact('card'));
    }

    public function update(Request $request, $id)
    {
        $card = Card::findOrFail($id);
        $data = $request->validate(
            [
                'title' => 'max:50',
                'content' => 'max:200',
                'owner_id' => 'required',
                'status' => 'required|in:started,approving,' . $card->id
            ]
        );
        $card->fill($data);
        $card->save();
        return redirect()->route('cards.list');
    }

    public function delete(int $id)
    {
        $card = Card::find($id);
        if ($card) {
            $card->delete();
        }
        return redirect()->route('cards.list');
    }
}
