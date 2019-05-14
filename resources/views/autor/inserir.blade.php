<html lang="pt-br">
  <head>
      <meta charset="utf-8">
      <title>Adicionar Autor</title>
  </head>
  <body>
      <form action="{{route('autor.store')}}" method="post">
        @csrf
        <fieldset>
          <legend>Adicionar Autor</legend>
            <input type="hidden" name="id" value="id">
            <p>Nome: </p><input type="text" name="nome">
            <p>Biografia: </p><textarea type="text" name="bio" rows = "5" cols = "60"></textarea>
            <p>Email: </p><input type="text" name="email"><br /><br />
            <p>Data de Nascimento: </p><input type="text" name="data_nasc"><br /><br />
            <p>Foto Perfil: </p><input type="text" name="profile_pic"><br /><br />
            <input class="button" type="submit" name="botaoEnviar" value="Enviar">
        </fieldset>
      </form>
  </body>
</html>
