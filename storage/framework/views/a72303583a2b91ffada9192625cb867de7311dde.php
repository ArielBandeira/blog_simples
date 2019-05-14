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
          <td><?php echo e($autor->id); ?></td>
          <td><?php echo e($autor->nome); ?></td>
          <td><?php echo e($autor->bio); ?></td>
          <td><?php echo e($autor->email); ?></td>
          <td><?php echo e($autor->data_nasc); ?></td>
          <td><?php echo e($autor->profile_pic); ?></td>
        </tr>
    </table>
  </body>
</html>
<?php /**PATH C:\xampp\htdocs\blog_noticias\resources\views/autor/exibir.blade.php ENDPATH**/ ?>