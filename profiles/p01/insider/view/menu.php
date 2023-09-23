<?php
require_once 'dependencias.php';

?>

<!DOCTYPE html>
<html>
    <head>
      <title></title>
      <link href="https://fonts.googleapis.com/css?family=Capriola" rel="stylesheet" />
    </head>
    <body>
        <div id='nav'>
            <div class='navbar navbar-fixed-top' data-spy='affix' data-offset-top='100'>
              <div class='container'>
                <div class='navbar-header'>
                  <button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#navbar' aria-expanded='false' aria-controls='navbar'>
                    <span class='sr-only'>Toggle navigation</span>
                    <span class='icon-bar'></span>
                    <span class='icon-bar'></span>
                    <span class='icon-bar'></span>
                  </button>
                  <a class='navbar-brand' href='inicio.php'><img class='img-responsive logo img-thumbnail' src='../../assets/images/LOGO.png' alt='' /></a>
                </div>
                <div id='navbar' class='collapse navbar-collapse'>
                  <ul class='nav navbar-nav navbar-right'>
                    <li class='active'>
                        <a href='inicio.php'><span><i class="fas fa-home"></i></span> Inicio</a>
                    </li>
                    <li class='dropdown'>
                        <a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'><span><i class="fas fa-jedi"></i></span> Gestão Serviços <span><i class="fas fa-sort-down"></i></span></a>
                        <ul class='dropdown-menu'>
                          <li><a href='categorias.php'>Categorias</a></li>
                          <li><a href='#.php'>Produtos</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href='clientes.php'><span><i class="far fa-address-card"></i></span> Clientes</a>
                    </li>
                    <li>
                        <a href='clientes.php'><span></span> Clientes</a>
                    </li>
                    <li class='dropdown' >
                        <a href='#' style='color: red'  class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'><span><i class="fas fa-user-tie"></i></span> Usuario:   <span><i class="fas fa-sort-down"></i></span></a>
                        <ul class='dropdown-menu'>
                          <li>
                              <a style='color: red' href='../procedimentos/sair.php'><span><i class="fas fa-sign-out-alt"></i></span> Sair</a>
                          </li>
                        </ul>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
        </div>
        <script src="https://kit.fontawesome.com/65a57aea3b.js" crossorigin="anonymous"></script>
    </body>
</html>

<script type='text/javascript'>
  $(window).scroll(function()
      {
        if ($(document).scrollTop() > 150)
        {
            $('.logo').width(100);
            $('.logo').height(60);
        }
        else
        {
            $('.logo').height(100);
            $('.logo').width(150);
        }
      }
  );
</script>

