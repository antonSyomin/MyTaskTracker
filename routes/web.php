<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CardController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('cards', [CardController::class, 'index'])
->name('cards.index');

Route::get('cards/create', [CardController::class, 'create'])
->name('cards.create');

Route::post('cards/store', [CardController::class, 'store'])
->name('cards.store');

Route::get('cards/{id}', [CardController::class, 'show'])
->name('cards.show');
