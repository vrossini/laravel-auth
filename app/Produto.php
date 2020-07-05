<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = ['categoria','nome','descricao','valor','foto'];

    public function getImageAttribute()
    {
        return $this->foto;
    }
}