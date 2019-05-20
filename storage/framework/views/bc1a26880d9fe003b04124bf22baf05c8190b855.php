<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title>Meu blog simples</title>

  <!--- BOOTSTRAP E JS --->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <!--- CSS --->
  <style>
  body{
    background-color: #E5EDFB;
  }
  .banner{
    background-color: #6A92D4;
    color: #FFFFFF;
  }
  .navbar{
    background-color: #A9C1EA;
  }
  a{
    color: #44484B;
  }
  a:hover{
    text-decoration: none;
    color: #77796F;
  }
  .quote{
    margin-top: -100px;
    font-size: 15px;
    color: #EEEEEE;
    text-shadow:-2px -1px 2px #000000;
  }
  .some_links{
    margin-top: 100px;
  }
  .footer{
    background-color: #84A5DE;
  }
  </style>

</head>

<body>

<!--- BANNER NO TOPO DA PÁGINA --->
  <div class="banner jumbotron text-center" style="margin-bottom:0">
    <h1>Blog Simples</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit!</p>
  </div>
<!--- fim do banner --->

<!--- MENU --->

<nav class="navbar navbar-expand-sm">
  <a class="navbar-brand" href="<?php echo e(route('home')); ?>">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo e(route('artigo', 1)); ?>">Artigos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo e(route('sobreMim')); ?>">Sobre Mim</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo e(route('contato')); ?>">Contato</a>
      </li>
    </ul>
  </div>
</nav>
<!--- fim do menu --->

<div class="container" style="margin-top:30px">
  <div class="row">

  <!--- ARTIGO --->
      <div class="col-sm-8">
          <h2><?php echo e($artigo -> titulo); ?></h2>
          <img class="img-fluid" src="http://localhost/blog_noticias/public/images/artigo/<?php echo e($artigo -> imagem); ?>" alt="artigo"  width="700" height="400">
          <br /><br />
          <p><?php echo e($artigo -> conteudo); ?></p>
          <p>Publicado em: <?php echo e($artigo -> created_at); ?></p>
          <br>
      </div>
  <!--- fim de artigo --->

    <!--- PARTE SOBRE MIM --->

      <div class="col-sm-4">
        <h2><?php echo e($autor -> nome); ?></h2>
        <img class="img-fluid" src="http://localhost/blog_noticias/public/images/profiles/<?php echo e($autor -> profile_pic); ?>" alt="autor" width="350" height="100">
        <p><?php echo e($autor -> bio); ?></p>
      </div>
    <!--- FIM DO SOBRE MIM --->

  <!--- ARTIGOS --->
      <div class="col-sm-2">
        <h3>Comentários<h3>
          <?php $__currentLoopData = $comentario; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comentarios): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php if($comentarios->id_artigo == $artigo->id){?>
            <h4><?php echo e($comentarios -> nome); ?></h4>
            <p><?php echo e($comentarios -> comentario); ?></p>
            <p><?php echo e($comentarios -> email); ?></p>
            <p>Publicado em: <?php echo e($artigo -> created_at); ?></p>
           <?php }?>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
  <!--- fim artigos --->

  </div>
</div>

<!--- COMENTÁRIOS --->
<br><br>
<div class="container contact-single">
  <h3>Deixe um comentário</h3>
  <form action="<?php echo e(route('home.store')); ?>" method="post" class="mt-4">
    <?php echo csrf_field(); ?>
      <input type="hidden" name="id_artigo" value="<?php echo e($artigo -> id); ?>">
      <input type="hidden" name="<?php echo e($autor -> id); ?>" value="id_autor">
      <div class="form-group">
          <label for="contactcomment">Seu Comentário *</label>
          <input class="form-control border" rows="5" id="contactcomment" name="comentario"></input>
      </div>
      <div class="d-sm-flex">
          <div class="col-sm-6 form-group p-0">
              <label for="contactusername">Nome *</label>
              <input type="text" class="form-control border" id="contactusername" name="nome">
          </div>
          <div class="col-sm-6 form-group ml-sm-3">
              <label for="contactemail">Email *</label>
              <input type="email" class="form-control border" id="contactemail" name="email">
          </div>
      </div>
      <button type="submit" class="mt-3 btn btn-success btn-block py-3">Postar comentário</button>
  </form>
</div><br><br><br><br>
<!--- fim comentáios --->

<!--- FOOTER --->

<div class="footer jumbotron text-center" style="margin-bottom:0">
  <p><a href="https://github.com/ArielBandeira/blog_simples">Sistemas de Informação | IFCE - Campus Cedro</a></p>
</div>
<!--- fim do footer --->

</body>
</html>
<?php /**PATH C:\xampp\htdocs\blog_noticias\resources\views/home/artigo.blade.php ENDPATH**/ ?>