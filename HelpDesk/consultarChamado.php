<?php

  require_once "validadorDeAcesso.php";
  
  $chamados = array();  

  $arquivo = fopen('arquivo.txt', 'r');

  while(!feof($arquivo)) {
    $registro = fgets($arquivo);
    $chamados[] = $registro;
  }

  fclose($arquivo);

?>
<!DOCTYPE html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HelpDesk</title>

    <link rel="shortcut icon" type="image/ico" href="favicon.ico"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-consultar-chamado {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="home.php">
        <img src="Alcon.png" width="30" height="30" class="d-inline-block align-top" alt="">
        HelpDesk
      </a>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="logoff.php">Sair</a>
        </li>
      </ul>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-consultar-chamado">
          <div class="card">
            <div class="card-header">
              Consulta de chamado
            </div>
            
            <div class="card-body">

              <?php foreach($chamados as $chamado) { ?>


              <?php 
                $chamadoDados = explode('#', $chamado); 
                
              //
              if($_SESSION['perfilId'] == 2) {
                if($_SESSION['ID'] != $chamadoDados['0']) {
                  continue;
                }
              }

                if(count($chamadoDados) < 3) {
                  continue;
                }

                
              ?>

              <div class="card mb-3 bg-light">
                <div class="card-body">
                  <h5 class="card-title"><?=$chamadoDados[1]?></h5>
                  <h6 class="card-subtitle mb-2 text-muted"><?=$chamadoDados[2]?></h6>
                  <p class="card-text"><?=$chamadoDados[3]?></p>
                  </div>
              </div>

              <?php } ?>    

                
              <div class="row mt-5">
                <div class="col-6">
                  <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>