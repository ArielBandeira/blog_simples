<html lang="pt-br">
  <head>
      <meta charset="utf-8">
      <title>Tela de Editar</title>
  </head>
  <body>
     <form action="<?php echo e(route('autor.update', $autor->id)); ?>" method="post">
       <?php echo csrf_field(); ?>
       <?php echo method_field('PUT'); ?>
        <fieldset>
          <legend>Editar Autor</legend>
            <p>Nome: </p><input type="text" name="nome" value="<?php echo e($autor->nome); ?>"><br /><br />
            <p>Biografia: </p><textarea type="text" name="bio" value="<?php echo e($autor->bio); ?>" rows = "5" cols = "60"></textarea><br /><br />
            <p>Email: </p><input type="text" name="email" value="<?php echo e($autor->email); ?>"><br /><br />
            <p>Data de Nascimento: </p><input type="text" name="data_nasc" value="<?php echo e($autor->data_nasc); ?>"><br /><br />
            <input class="button" type="submit" name="botaoEnviar" value="Enviar">
        </fieldset>
      </form>
      <form action="<?php echo e(route('autor.destroy', $autor->id)); ?>" method="post">
          <?php echo csrf_field(); ?>
          <?php echo method_field('DELETE'); ?>
          <input type="submit" value="Excluir">
      </form>
  </body>
</html>
<?php /**PATH C:\xampp\htdocs\blog_noticias\resources\views/autor/editar.blade.php ENDPATH**/ ?>