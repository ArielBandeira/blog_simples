<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artigo extends Model
{
    protected $table = 'artigos';

    protected $fillable = [
      'id',
      'titulo',
      'id_autor',
      'conteudo',
      'imagem'
    ];

    public function autor() {
        return $this->belongsTo('App\Autor');
    }
}
