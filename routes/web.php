<?php

use Illuminate\Support\Facades\Route;

Route::get('/', view('welcome'));

Route::redirect('/home', '/');




