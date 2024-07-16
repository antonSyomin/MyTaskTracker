<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $fillable = ['title', 'content', 'owner_id', 'status', 'deadline'];
    use HasFactory;
}
