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
      <?php $__currentLoopData = $artigos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $artigo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <td><?php echo e($artigo -> id); ?></td>
        <td><?php echo e($artigo -> titulo); ?></td>
        <td><?php echo e($artigo -> id_autor); ?></td>
        <td><?php echo e($artigo -> conteudo); ?></td>
        <td><?php echo e($artigo -> imagem); ?></td>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
  </body>
</html>
<?php /**PATH C:\xampp\htdocs\blog_noticias\resources\views/artigo/listar.blade.php ENDPATH**/ ?>