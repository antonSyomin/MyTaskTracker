<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BoardController;
use App\Http\Controllers\Boards\CardController;
use App\Http\Controllers\Boards\Cards\CommentController;

Route::get('boards/{board}/cards', [CardController::class, 'list'])
->name('cards');

Route::get('boards/{board}/cards/create', [CardController::class, 'create'])
->name('cards.create');

Route::post('boards/{board}cards/store', [CardController::class, 'store'])
->name('cards.store');

Route::get('boards/{board}/cards/{id}', [CardController::class, 'view'])
->name('cards.view');

Route::get('boards/{board}/cards/{id}/edit', [CardController::class, 'edit'])
->name('cards.edit');

Route::patch('boards/{board}/cards/{id}', [CardController::class, 'update'])
->name('cards.update');

Route::delete('boards/{board}/cards/{id}', [CardController::class, 'delete'])
->name('cards.delete');

Route::resource('boards', BoardController::class);
Route::resource('boards/{board}/cards/{card}/comments', CommentController::class);