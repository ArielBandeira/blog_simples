<html lang="pt-br">
<head>
    <meta charset="utf-8">
</head>
  <body>
    <table border="1px">
      <tr>
        <th>ID</th>
        <th>Título</th>
        <th>ID Autor</th>
        <th>Conteúdo</th>
        <th>Imagem</th>
        <th>Ler Mais</th>
      </tr>
      @foreach($artigos as $artigo)
      <tr>
        <td>{{$artigo -> id}}</td>
        <td>{{$artigo -> titulo}}</td>
        <td>{{$artigo -> autor_id}}</td>
        <td>{{$artigo -> conteudo}}</td>
        <td>{{$artigo -> imagem}}</td>
      </tr>
      @endforeach
    </table>
  </body>
</html>
