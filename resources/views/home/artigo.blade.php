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
  <a class="navbar-brand" href="{{route('home')}}">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Artigos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('sobreMim')}}">Sobre Mim</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('contato')}}">Contato</a>
      </li>
    </ul>
  </div>
</nav><!--- fim do menu --->

<div class="container" style="margin-top:30px">

  <div class="row">

  <!--- ARTIGOS --->
      <div class="col-sm-8">
          <h2>Título do Artigo: {{$artigo -> titulo}}</h2>
          <h5>ID do autor: {{$artigo -> id_autor}}</h5>
          <img class="img-fluid" src="http://localhost/blog_noticias/public/images/{{$artigo -> imagem}}" alt="coffe">
          <br /><br />
          <p>Conteúdo: {{$artigo -> conteudo}}</p>
          <br>
      </div>

  <!--- PARTE SOBRE MIM --->

    <div class="col-sm-4">
      <h2>Autor: {{$autor -> nome}}</h2>
      <h5>Photo of me: {{$autor -> profile_pic}}</h5>
      <img class="fakeimg img-fluid" src="http://localhost/blog_noticias/public/images/{{$autor -> profile_pic}}" alt="douglas">
      <p>BIO: {{$autor -> bio}}</p>
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
