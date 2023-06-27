<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro de Usuário</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" >
  </head>
  <body>

    <script src="js/bootstrap.bundle.min.js"></script>

   
   <header>
   <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Cadastro</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="?page=home">Home</a>
        <a class="nav-link" href="?page=novo">Novo Cadastro</a>
        <a class="nav-link" href="?page=listar">Listar Usuário</a>
      </div>
    </div>
  </div>
</nav>

   </header>
<div class="container">
   <div class="row">
        <div class="col mt-5">
            <?php
                include("config.php");
                switch(@$_REQUEST['page']){
                    case 'novo':
                        include('novo-usuario.php');
                    break;

                    case 'listar':
                        include('listar-usuario.php');
                    break;

                    case 'salvar':
                        include('salvar-usuario.php');
                    break;
                
                    default:
                        print("<h1>Bem vindo!</h1>");
                }
            ?>
        </div>
   </div>
    </div>


  </body>
</html>