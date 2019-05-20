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
      $autores = Autor::all();
      return view('home.index', ['artigos' => $artigos, 'autores' => $autores]);
    }

    public function artigo($id)
    {
      $artigo = Artigo::find($id);
      $autor = Autor::find($artigo->id_autor);

      return view('home.artigo', ['autor' => $autor, 'artigo' => $artigo]);
    }

    public function sobreMim()
    {
      $autores = Autor::all();
      return view('home.sobre_mim', ['autores' => $autores]);
    }

    public function contato()
    {
      return view('home.contato');
    }
}
