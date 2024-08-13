<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BoardController;
use App\Http\Controllers\User\Boards\CardController;
use App\Http\Controllers\User\Boards\Cards\CommentController;

Route::redirect('/', '/user/posts', 301);

Route::resource('boards', BoardController::class)->whereNumber('board');

Route::resource('boards/{board}/cards', CardController::class)->whereNumber(['board', 'card']);

Route::resource('boards/{board}/cards/{card}/comments', CommentController::class)
->whereNumber(['board', 'card', 'comment']);