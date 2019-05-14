<html lang="pt-br">
<head>
    <meta charset="utf-8">
</head>
  <body>
    <table border="1px">
        <tr>
          <th>ID</th>
          <th>Nome</th>
          <th>Biografia</th>
          <th>Email</th>
          <th>Data de Nascimento</th>
          <th>Foto Perfil</th>
        </tr>
        <tr>
          <td>{{$autor->id}}</td>
          <td>{{$autor->nome}}</td>
          <td>{{$autor->bio}}</td>
          <td>{{$autor->email}}</td>
          <td>{{$autor->data_nasc}}</td>
          <td>{{$autor->profile_pic}}</td>
        </tr>
    </table>
  </body>
</html>
