<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PostController;

Route::redirect('/', 'posts');
Route::resource('posts', PostController::class)->whereNumber('post');