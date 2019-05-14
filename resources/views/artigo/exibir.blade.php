<html lang="pt-br">
<head>
    <meta charset="utf-8">
</head>
  <body>
    <table border="1px">
        <tr>
          <th>ID</th>
          <th>Título</th>
          <th>ID do Autor</th>
          <th>Conteúdo</th>
          <th>Imagem</th>
        </tr>
        <tr>
          <td>{{$artigo->id}}</td>
          <td>{{$artigo->titulo}}</td>
          <td>{{$artigo->autor_id}}</td>
          <td>{{$artigo->conteudo}}</td>
          <td>{{$artigo->imagem}}</td>
        </tr>
    </table>
  </body>
</html>
