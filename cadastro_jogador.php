  <!DOCTYPE html>
<html>
<head>
  <title>Cadastrar Jogadores</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="css/global.css" type="text/css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-header">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index4.php">Início</a>

    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="cadastro_time.php">Criar Clube</a></li>    

        </li>

        <li>
          <a class="not-active" href="#" disabled>Duelar</a>
        </li>
        <li>
          <a href="#">Ranking</a>
        </li>
      </ul>

      <form class="navbar-form navbar-right" method="POST" action="logout.php" >
        <button class="btn btn-outline-danger my-2 my-sm-0">Sair</button>
      </form>

    </div>
  </div>

</nav>
  <div class="container-fluid espaco4">
  <div class="espaco1">

<form method="POST" action="cadjog.php" enctype="multipart/form-data">
<center><h4 class="cadastrotime">Insira aqui o nome e a foto dos seus jogadores</h4></center><br>

<?php
session_start();
$i = 1;



while ( $i<= 4) { 
  echo "<div class='container-fluid col-sm-6 col-lg-6 col-xl-6'>


  <div class='container'>";  
  echo "<h5 class='cadastrotime'>Nome do jogador: </h5> <input class='form-control espaco3' type='text' name = '$i' >"; 
  echo "<h5 class='cadastrotime'>Foto do jogador: </h5> <input class='cadastrotime' type='file' name='arquivo$i'>
  <br><br>¨<br>

  </div></div>";
  
$i++;
}
?>
  <center><button type="submit" class="btn btn-success">Cadastrar</button></center><br>
</div>

</form>
</div>

</body>
</html>
