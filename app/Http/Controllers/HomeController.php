<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artigo;
use App\Autor;
use App\Comentario;

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
      $comentario = Comentario::all();
      $artigo = Artigo::find($id);
      $autor = Autor::find($artigo->id_autor);

      return view('home.artigo', ['comentario' => $comentario, 'autor' => $autor, 'artigo' => $artigo]);
    }

    //GUARDAR Comentario
    public function store(Request $request)
    {
        $comentario = new Comentario;

        $comentario->id_artigo = $request->input('id_artigo');
        $comentario->comentario = $request->input('comentario');
        $comentario->nome = $request->input('nome');
        $comentario->email = $request->input('email');

        $comentario->save();

        $comentario = Comentario::all();
        $artigo = Artigo::find($request->input('id_artigo'));
        $autor = Autor::find($artigo->id_autor);

        return view('home.artigo', ['comentario' => $comentario, 'autor' => $autor, 'artigo' => $artigo]);
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
