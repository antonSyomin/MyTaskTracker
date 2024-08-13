<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PostController;

Route::resource('posts', PostController::class)->whereNumber('post');