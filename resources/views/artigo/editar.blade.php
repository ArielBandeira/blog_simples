<html lang="pt-br">
  <head>
      <meta charset="utf-8">
      <title>Tela de Editar</title>
  </head>
  <body>
     <form action="{{route('artigo.update', $artigo->id)}}" method="post">
       @csrf
       @method('PUT')
        <fieldset>
          <legend>Editar Artigo</legend>
            <p>Título: </p><input type="text" name="titulo" value="{{$artigo->titulo}}"><br /><br />
            <p>ID do Autor: </p><input type="text" name="autor_id" value="{{$artigo->autor_id}}"><br /><br />
            <p>Conteúdo: </p><textarea type="text" name="conteudo"  rows = "5" cols = "60" value="{{$artigo->conteudo}}"></textarea><br /><br />
            <p>Imagem: </p><input type="text" name="imagem" value="{{$artigo->imagem}}"><br /><br />
            <input class="button" type="submit" name="botaoEnviar" value="Enviar">
        </fieldset>
      </form>
      <form action="{{route('artigo.destroy', $artigo->id)}}" method="post">
          @csrf
          @method('DELETE')
          <input type="submit" value="Excluir">
      </form>
  </body>
</html>
