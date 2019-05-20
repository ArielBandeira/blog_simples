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
  <h1>Blog Simples</h1>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit!</p>
</div>
<!--- fim do banner --->

<!--- MENU --->

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
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

  <!--- AUTORES --->
      <div class="col-sm-8">
        @foreach($autores as $autor)
          <a href="#"><h2>{{$autor -> nome}}</h2></a>
          <br>
          <img class="img-fluid" src="http://localhost/blog_noticias/public/images/profiles/{{$autor -> profile_pic}}" alt="autor" class="profile_img" width="200" height="100">
          <br><br>
          <p>{{$autor -> bio}}</p>
          <br><br>
        @endforeach
      </div>
  <!--- fim do autores --->

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
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#">Sobre Mim</a>
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
<!--- fim do footer --->

</body>
</html>
