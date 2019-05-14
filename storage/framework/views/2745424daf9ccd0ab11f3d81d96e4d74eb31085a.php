<html lang="pt-br">
  <head>
      <meta charset="utf-8">
      <title>Tela de Editar</title>
  </head>
  <body>
     <form action="<?php echo e(route('artigo.update', $artigo->id)); ?>" method="post">
       <?php echo csrf_field(); ?>
       <?php echo method_field('PUT'); ?>
        <fieldset>
          <legend>Editar Artigo</legend>
            <p>Título: </p><input type="text" name="titulo" value="<?php echo e($artigo->titulo); ?>"><br /><br />
            <p>ID do Autor: </p><input type="text" name="id_autor" value="<?php echo e($artigo->id_autor); ?>"><br /><br />
            <p>Conteúdo: </p><textarea type="text" name="conteudo"  rows = "5" cols = "60" value="<?php echo e($artigo->conteudo); ?>"></textarea><br /><br />
            <p>Imagem: </p><input type="text" name="imagem" value="<?php echo e($artigo->imagem); ?>"><br /><br />
            <input class="button" type="submit" name="botaoEnviar" value="Enviar">
        </fieldset>
      </form>
      <form action="<?php echo e(route('artigo.destroy', $artigo->id)); ?>" method="post">
          <?php echo csrf_field(); ?>
          <?php echo method_field('DELETE'); ?>
          <input type="submit" value="Excluir">
      </form>
  </body>
</html>
<?php /**PATH C:\xampp\htdocs\blog_noticias\resources\views/artigo/editar.blade.php ENDPATH**/ ?>