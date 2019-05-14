<html lang="pt-br">
  <head>
      <meta charset="utf-8">
      <title>Tela de Editar</title>
  </head>
  <body>
     <form action="{{route('autor.update', $autor->id)}}" method="post">
       @csrf
       @method('PUT')
        <fieldset>
          <legend>Editar Autor</legend>
            <p>Nome: </p><input type="text" name="nome" value="{{$autor->nome}}"><br /><br />
            <p>Biografia: </p><textarea type="text" name="bio" value="{{$autor->bio}}" rows = "5" cols = "60"></textarea><br /><br />
            <p>Email: </p><input type="text" name="email" value="{{$autor->email}}"><br /><br />
            <p>Data de Nascimento: </p><input type="text" name="data_nasc" value="{{$autor->data_nasc}}"><br /><br />
            <p>Foto Perfil: </p><input type="text" name="profile_pic" value="{{$autor->profile_pic}}"><br /><br />
            <input class="button" type="submit" name="botaoEnviar" value="Enviar">
        </fieldset>
      </form>
      <form action="{{route('autor.destroy', $autor->id)}}" method="post">
          @csrf
          @method('DELETE')
          <input type="submit" value="Excluir">
      </form>
  </body>
</html>
