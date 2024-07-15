<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Card;

class CardController extends Controller
{
    public function index()
    {
        $cards = Card::paginate();
        return view('card.index', compact('cards'));
    }

    public function show(int $id)
    {
        $card = Card::findOrFail($id);
        return view('card.show', compact('card'));
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
                'status' => 'required|in:started,approving'
            ]
        );
        var_dump($data);
        $card = new Card();
        $card->fill($data);
        $card->save();
        return redirect()->route('cards.index');
    }
}
