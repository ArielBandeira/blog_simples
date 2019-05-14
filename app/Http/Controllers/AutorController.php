<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Autor;

class AutorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $autores = Autor::all();
        return view('autor.listar', ['autores' => $autores]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('autor.inserir');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $autor = new Autor;

        $autor->nome = $request->input('nome');
        $autor->bio = $request->input('bio');
        $autor->email = $request->input('email');
        $autor->data_nasc = $request->input('data_nasc');
        $autor->profile_pic = $request->input('profile_pic');

        $autor->save();

        return redirect('autor');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $autor = Autor::find($id);
        return view('autor.exibir', ['autor'=>$autor]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $autor = Autor::find($id);
        return view('autor.editar', ['autor'=>$autor]);
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
        $autor = Autor::find($id);

        $autor->nome = $request->input('nome');
        $autor->bio = $request->input('bio');
        $autor->email = $request->input('email');
        $autor->data_nasc = $request->input('data_nasc');
        $autor->profile_pic = $request->input('profile_pic');

        $autor->save();

        return redirect('autor');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $autor = Autor::find($id);

        $autor->delete();

        return redirect('autor');
    }

    public function buscarArtigos($id_autor) {
        $autor = Autor::find($id_autor);

        $artigos = $autor->artigos;

        return view('artigo.listar', ['artigos' => $artigos]);
    }
}
