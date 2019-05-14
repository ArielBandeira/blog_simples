<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artigo;
use App\Autor;

class HomeController extends Controller
{
    public function index()
    {
      $artigos = Artigo::all();
      return view('home.index', ['artigos' => $artigos]);
    }

    public function artigo($id)
    {
      $artigo = Artigo::find($id);
      $id_autor = $artigo->autor_id;
      $autor = Autor::find($id_autor);
      return view('home.artigo', ['artigo'=>$artigo], ['autor'=>$autor]);
    }

    public function sobreMim()
    {
      return view('home.sobre_mim');
    }

    public function contato()
    {
      return view('home.contato');
    }
}
