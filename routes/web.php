<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CardController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('cards', [CardController::class, 'list'])
->name('cards.list');

Route::get('cards/create', [CardController::class, 'create'])
->name('cards.create');

Route::post('cards/store', [CardController::class, 'store'])
->name('cards.store');

Route::get('cards/{id}', [CardController::class, 'view'])
->name('cards.view');

Route::get('cards/{id}/edit', [CardController::class, 'edit'])
->name('cards.edit');

Route::patch('cards/{id}', [CardController::class, 'update'])
->name('cards.update');

Route::delete('cards/{id}', [CardController::class, 'delete'])
->name('cards.delete');
