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
          <td><?php echo e($artigo->id); ?></td>
          <td><?php echo e($artigo->titulo); ?></td>
          <td><?php echo e($artigo->autor_id); ?></td>
          <td><?php echo e($artigo->conteudo); ?></td>
          <td><?php echo e($artigo->imagem); ?></td>
        </tr>
    </table>
  </body>
</html>
<?php /**PATH C:\xampp\htdocs\blog_noticias\resources\views/artigo/exibir.blade.php ENDPATH**/ ?>