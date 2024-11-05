<?php
  require_once "validadorDeAcesso.php";
?>
<!DOCTYPE html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HelpDesk</title>

    <link rel="shortcut icon" type="image/ico" href="favicon.ico"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-abrir-chamado {
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

        <div class="card-abrir-chamado">
          <div class="card">
            <div class="card-header">
              Abertura de chamado
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col">
                  
                  <form method="post" action="registrarChamado.php">
                    <div class="form-group">
                      <label>Título</label>
                      <input name ="titulo" type="text" class="form-control" placeholder="Título" required>
                    </div>
                    
                    <div class="form-group">
                      <label>Categoria</label>
                      <select name="categoria" class="form-control">
                        <option>Suporte técnico (Problemas de Hardware e/ou Software)</option>
                        <option>Solicitação de compra (Hardware e/ou Software)</option>
                        <option>Infraestrutura de rede (Cabeada e/ou WIFI)</option>
                        <option>Solicitação de linha e/ou smartphone</option>
                        <option>Suporte técnico Protheus</option>
                        <option>Solicitação de credenciais de acesso (E-mail, Team Viewer, AUVO, Rede, VPN e etc)</option>
                        <option>Outros</option>
                      </select>
                    </div>
                    
                    <div class="form-group">
                      <label>Descrição</label>
                      <textarea name="descricao" class="form-control" rows="3" required></textarea>
                    </div>

                    <div class="row mt-5">
                      <div class="col-6">
                        <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a>
                      </div>

                      <div class="col-6">
                        <button class="btn btn-lg btn-info btn-block" type="submit">Abrir</button>
                      </div>
                    </div>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>