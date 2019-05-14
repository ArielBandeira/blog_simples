<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    protected $table = 'autores';

    protected $fillable = [
        'id',
        'nome',
        'bio',
        'email',
        'data_nasc',
        'profile_pic'
    ];

    public function artigos() {
        return $this->hasMany('App\Artigo');
    }
}
