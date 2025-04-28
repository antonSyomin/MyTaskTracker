<?php

namespace App\Http\Controllers\User\Boards\Cards;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Keyword;

class KeywordController extends Controller
{
    public function index()
    {
        return response()->json(Keyword::select('*')->get()->toArray());
    }
}