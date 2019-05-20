<html lang="pt-br">
  <head>
      <meta charset="utf-8">
      <title>Adicionar Artigo</title>
  </head>
  <body>
      <form action="<?php echo e(route('artigo.store')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <fieldset>
          <legend>Adicionar Artigo</legend>
            <input type="hidden" name="id" value="id">
            <p>Título: </p><input type="text" name="titulo">
            <p>ID do Autor: </p><input type="text" name="autor_id">
            <p>Conteúdo: </p><textarea type="text" name="conteudo" rows = "5" cols = "60"></textarea>
            <p>Imagem: </p><input type="text" name="imagem"><br /><br />
            <input class="button" type="submit" name="botaoEnviar" value="Enviar">
        </fieldset>
      </form>
  </body>
</html>
<?php /**PATH C:\xampp\htdocs\blog_noticias\resources\views/artigo/inserir.blade.php ENDPATH**/ ?>