<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artigo extends Model
{
    protected $table = 'artigos';

    protected $fillable = [
      'id',
      'titulo',
      'autor_id',
      'conteudo',
      'imagem'
    ];

    public function autor() {
        return $this->belongsTo('App\Autor');
    }
}
