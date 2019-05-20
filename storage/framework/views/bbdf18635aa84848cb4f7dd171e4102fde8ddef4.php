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
  <!-- Customized icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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

  h2{
    padding-top: 100px;
  }

    /* === LAST BACKGROUND === */
  .row{
    padding-top: 100px;
    padding-bottom: 100px;
  }

  #last-bg{
    background-color: #4479d4;
    color: #44484B;
    padding-bottom: 100px;
  }

  #last-bg button {
    background-color: #FFFFFF;
    margin-right: 30px;
    margin-left: 30px;
  }

  .btn-default {
    box-shadow: 1px 2px 5px #000000;
   }

  #last-bg button {
    width: 80px;
    height: 70px;
  }

  #last-bg button:hover {
    background-color: #E0E0E0;
    color: black;
    text-decoration: none;
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

<!--- CONTATO --->
<div class="row col-sm-12">
  <div class="col-sm-6 text-center">
        <form action"<?php echo e(route('contato')); ?>">
          <label for="fname">First Name</label>
          <input type="text" id="fname" name="firstname" placeholder="Your name.."><br><br>
          <label for="lname">Last Name</label>
          <input type="text" id="lname" name="lastname" placeholder="Your last name.."><br><br>
          <label for="country">Country</label>
          <input type="text" id="country" name="country" placeholder="Your country.."><br><br>
          <label for="subject">Subject</label>
          <textarea id="subject" name="subject" placeholder="Write something.." style="width:250px;height:120px"></textarea><br><br>
          <input type="submit" value="Submit">
        </form>
  </div>
  <div class="col-sm-6">
      <div style="text-align:center">
        <h2>Contato</h2>
        <p>Entre em contato com nossa equipe: </p>
      </div>
  </div>
</div>
<!--- fim contato --->

<!--- REDES SOCIAS --->
  <div id="last-bg" class="text-center col-sm-12">
    <h2> Redes Sociais <h2>
      <a href="https://medium.com/" target="_blank">
        <button class=" text-center btn btn-default"><i class="fa fa-medium"></i></button>
      </a>
      <a href="https://twitter.com/" target="_blank">
        <button class=" text-center btn btn-default"><i class="fa fa-twitter"></i></button>
      </a>
      <a href="https://www.instagram.com/" target="_blank">
        <button class=" text-center btn btn-default"><i class="fa fa-instagram"></i></button>
      </a>
      <a href="https://github.com/ArielBandeira/blog_simples" target="_blank">
        <button class=" text-center btn btn-default"><i class="fa fa-github"></i></button>
      </a>
      <a href="https://www.facebook.com/" target="_blank">
        <button class=" text-center btn btn-default"><i class="fa fa-facebook"></i></button>
      </a>
  </div>
<!--- fim redes socias --->


<!--- FOOTER --->

<div class="footer jumbotron text-center" style="margin-bottom:0">
  <p><a href="https://github.com/ArielBandeira/blog_simples">Sistemas de Informação | IFCE - Campus Cedro</a></p>
</div>
<!--- fim do footer --->

</body>
</html>
<?php /**PATH C:\xampp\htdocs\blog_noticias\resources\views/home/contato.blade.php ENDPATH**/ ?>