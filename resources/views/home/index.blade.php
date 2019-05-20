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
    color: #E2E2E2;
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

<!--- MENU --->

<nav class="navbar navbar-expand-sm">
  <a class="navbar-brand" href="{{route('home')}}">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="{{route('artigo', 1)}}">Artigos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('sobreMim')}}">Sobre Mim</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('contato')}}">Contato</a>
      </li>
    </ul>
  </div>
</nav>
<!--- fim do menu --->

<div class="container" style="margin-top:30px">
  <div class="row">

  <!--- ARTIGOS --->
      <div class="col-sm-8">
        @foreach($artigos as $artigo)
          <a href="{{route('artigo', $artigo -> id)}}"><h2>{{$artigo -> titulo}}</h2></a><br>
          <img class="img-fluid" src="http://localhost/blog_noticias/public/images/artigo/{{$artigo -> imagem}}" alt="artigo">
          <br><br>
          <p>{{$artigo -> conteudo}}</p>
          <p>Publicado em: {{$artigo -> created_at}}</p>
          <br><br>
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
      <!--- SOME LINKS --->
      <div class="some_links">
        <h3>Some Links</h3>
        <p>Lorem ipsum dolor sit ame.</p>
        <ul class="nav nav-pills flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="{{route('home')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('sobreMim')}}">Sobre Mim</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('contato')}}">Contato</a>
          </li>
        </ul>
        <hr class="d-sm-none">
      </div>
    </div>
  <!--- FIM DO SOBRE MIM --->

  </div>
</div>

<!--- FOOTER --->

<div class="footer jumbotron text-center" style="margin-bottom:0">
  <p><a href="https://github.com/ArielBandeira/blog_simples">Sistemas de Informação | IFCE - Campus Cedro</a></p>
</div>
<!--- fim do footer --->

</body>
</html>
