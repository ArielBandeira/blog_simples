<html lang="pt-br">
  <head>
      <meta charset="utf-8">
      <title>Adicionar Artigo</title>
  </head>
  <body>
      <form action="{{route('artigo.store')}}" method="post">
        @csrf
        <fieldset>
          <legend>Adicionar Artigo</legend>
            <input type="hidden" name="id" value="id">
            <p>Título: </p><input type="text" name="titulo">
            <p>ID do Autor: </p><input type="text" name="id_autor">
            <p>Conteúdo: </p><textarea type="text" name="conteudo" rows = "5" cols = "60"></textarea>
            <p>Imagem: </p><input type="text" name="imagem"><br /><br />
            <input class="button" type="submit" name="botaoEnviar" value="Enviar">
        </fieldset>
      </form>
  </body>
</html>
