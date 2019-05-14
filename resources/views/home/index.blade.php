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
  .fakeimg {
    height: 200px;
    background: #aaa;
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
  </style>

</head>

<body>

  <!--- BANNER NO TOPO DA PÁGINA --->
<div class="jumbotron text-center" style="margin-bottom:0">
  <h1>My First Bootstrap 4 Page</h1>
  <p>Resize this responsive page to see the effect!</p>
</div>

<!--- MENU --->

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="#">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Artigos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Sobre Mim</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contato</a>
      </li>
    </ul>
  </div>
</nav><!--- fim do menu --->

<div class="container" style="margin-top:30px">
  <div class="row">

  <!--- ARTIGOS --->
      <div class="col-sm-8">
        @foreach($artigos as $artigo)
          <a href="#"><h2>Título do Artigo: {{$artigo -> titulo}}</h2></a>
          <h5>ID do autor: {{$artigo -> id_autor}}</h5>
          <img class="img-fluid" src="http://localhost/blog_noticias/public/images/{{$artigo -> imagem}}" alt="coffe" class="fakeimg">
          <br>
          <p>Conteúdo: {{$artigo -> conteudo}}</p>
          <br>
        @endforeach
      </div>

<!--- PARTE SOBRE MIM --->
    <div class="col-sm-4">
      <h2>About Me</h2>
      <h5>Random photo:</h5>
      <div class="random_img">
        <img class="img-fluid" src="<?php
          $imagesDir = 'images/';
          $images = glob($imagesDir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);
          $randomImage = $images[array_rand($images)];
          echo $randomImage;
        ?>" alt="images">
        <p class="quote text-center"><?php
          $file= "quotes.txt";
          $quotes = file($file);
          srand((double)microtime()*1000000);
          $randomquote = rand(0, count($quotes)-1);
          echo $quotes[$randomquote];
        ?></p>
      </div>
      <div class="some_links">
        <h3>Some Links</h3>
        <p>Lorem ipsum dolor sit ame.</p>
        <ul class="nav nav-pills flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Sobre Mim</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contato</a>
          </li>
        </ul>
        <hr class="d-sm-none">
      </div>
    </div>
  <!--- FIM DO SOBRE MIM --->

  </div>
</div>

<!--- FOOTER --->

<div class="jumbotron text-center" style="margin-bottom:0">
  <p>Footer</p>
</div>

</body>
</html>
