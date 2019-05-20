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
        <th>Artigos</th>
      </tr>
      <?php $__currentLoopData = $autores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $autor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <td><?php echo e($autor -> id); ?></td>
        <td><?php echo e($autor -> nome); ?></td>
        <td><?php echo e($autor -> bio); ?></td>
        <td><?php echo e($autor -> email); ?></td>
        <td><?php echo e($autor -> data_nasc); ?></td>
        <td><?php echo e($autor -> profile_pic); ?></td>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
  </body>
</html>
<?php /**PATH C:\xampp\htdocs\blog_noticias\resources\views/autor/listar.blade.php ENDPATH**/ ?>