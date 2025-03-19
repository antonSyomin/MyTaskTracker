<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $fillable = [
        'kw',
        'project_id',
        'pws',
        'errors'
    ];
    protected int $pws;

    use HasFactory;

    public function getPws()
    {

        return $this->pws / 100;
    }

    public function setPws(int $pws)
    {
        $this->pws = $pws * 100;
    }
}
