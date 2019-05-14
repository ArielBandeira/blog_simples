<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artigo;

class ArtigoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artigos = Artigo::all();
        return view('artigo.listar', ['artigos' => $artigos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('artigo.inserir');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $artigo = new Artigo;

        $artigo->titulo = $request->input('titulo');
        $artigo->id_autor = $request->input('id_autor');
        $artigo->conteudo = $request->input('conteudo');
        $artigo->imagem = $request->input('imagem');

        $artigo->save();

        return redirect('artigo');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $artigo = Artigo::find($id);

        return view('artigo.exibir', ['artigo'=>$artigo]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $artigo = Artigo::find($id);

        return view('artigo.editar', ['artigo'=>$artigo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $artigo = Artigo::find($id);

        $artigo->titulo = $request->input('titulo');
        $artigo->id_autor = $request->input('id_autor');
        $artigo->conteudo = $request->input('conteudo');
        $artigo->imagem = $request->input('imagem');

        $artigo->save();

        return redirect('artigo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $artigo = Artigo::find($id);

        $artigo->delete();

        return redirect('artigo');
    }

    //RELACIONAMENTOS

    public function buscarAutor($artigo_id) {
        $artigo = Artigo::find($artigo_id);

        $autor = $artigo->$autor;

        return view('autor.exibir', ['autor' => $autor]);
    }
}
