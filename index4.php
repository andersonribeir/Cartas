<?php
session_start();
if (!isset($_SESSION['UsuarioID'])) {
  header("Location: index.php");
}
$uniao = $_SESSION['UsuarioID'];

$conexao = mysqli_connect('127.0.0.1', 'root', '', 'pwebfinal') or trigger_error(mysql_error());


 $sql1 = "SELECT idtime FROM clubeusuario WHERE loginuser = '{$uniao}' ";
 $query3 = mysqli_query($conexao,$sql1);
 $linha2 = mysqli_fetch_array($query3);
 $id = $linha2['idtime'];

 $sql2 = "SELECT hp FROM timescad WHERE idtime = '{$id}'";
 $query4 = mysqli_query($conexao,$sql2);
 $linha3 = mysqli_fetch_array($query4);
 $haironletas = $linha3['hp'];


if(empty($id))
{
  ?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Início</title>
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
          <a class="not-active" href="duelo.php" disabled>Duelar</a>
        </li>
        <li>
          <a class ="not-active" href="aprimoramento.php">Aprimoramento</a>
        </li>
      </ul>

      <form class="navbar-form navbar-right" method="POST" action="logout.php" >
        <button class="btn btn-outline-danger my-2 my-sm-0">Sair</button>
      </form>

    </div>
  </div>

</nav>


<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  
  <div class="carousel-inner">
    <div class="item active">
      <img src="imagens/carousel3.png" alt="Chania">
      <div class="carousel-caption">
       
      </div>
    </div>

    <div class="item">
      <img src="imagens/carousel2.png" alt="Chicago">
      <div class="carousel-caption">
        
      </div>
    </div>

    <div class="item ">
      <img src="imagens/carousel1.png" alt="New York">
      <div class="carousel-caption">
        
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

</body>
</html>

<?php } else {
 ?>

 <!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Início</title>
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
        <li><a href="cadastro_time.php" class = "not-active">Criar clube</a></li>    

        </li>

        <li>
          <a href="duelo.php">Duelar</a>
        </li>
        <li>
          <a href="aprimoramento.php">Aprimoramento</a>
        </li>
      </ul>

      <form class="navbar-form navbar-right" method="POST" action="logout.php" >
        <button class="btn btn-outline-danger my-2 my-sm-0">Sair</button>
      </form>

    </div>
  </div>

</nav>
<div class="bg">
<?php 

$conexao = mysqli_connect('127.0.0.1', 'root', '', 'pwebfinal') or trigger_error(mysql_error());
  $sql = "SELECT nometime,fototime FROM timescad WHERE idtime = '{$id}'";
  $query = mysqli_query($conexao,$sql);
  $dadosrecebidos = mysqli_fetch_array($query);
  $time = $dadosrecebidos['nometime'];
  $foto = $dadosrecebidos['fototime'];
  $c = 1;

  $sql2 = "SELECT * FROM jogador WHERE idtime = '{$id}'";
 $query2 = mysqli_query($conexao,$sql2);



  if(!!$query){
     foreach($query as $item){
      $timee = $item['nometime'];
      $fotoo = $item['fototime'];

}
  

echo "<div class='container-fluid'>";
echo "<div class='container container-fluid col-sm-12 col-lg-12 col-xl-12'>";
echo "<div class='container espaco1'>";
echo "<center><div>";

echo "<h5 class = 'configtitle fontepreto'>BEM VINDO $uniao</div></h5>";
echo "<div class>";
echo "<img class ='configtel' src='backup/$fotoo'></div>";

echo "<div class ='fontepreto index4div1'>
  <h5 class ='fontepreto' >O seu time é: $timee";
echo "<h5 class='fontepreto'>O seu saldo atual de Haironletas é: $haironletas </h5><br>";
echo "<h4 class='fontepreto'>Os seus jogadores atuais são:</h5><br>";
echo "</div>

</div></center>
</div>
</div>

";
foreach($query2 as $item){
      $timee = $item['NomeJogador'];
      $fotoo = $item['FotoJogador'];
      $raca =  $item['Raca'];
      $capfis = $item['CapFis'];
      $hab    = $item['Habilidade'];
      echo "<div class='container col-sm-3 col-lg-3 col-xl-3 '>
      <row><div class='telinha'><img src='backup/$fotoo'>
      <h5 class='telinha1'>$timee<br><br>Raça = $raca<br>Fisico = $capfis<br>Habil = $hab</h5>
      </div></row>";
      echo "</div>";}

}}
 ?>
</div>
</body>
</html>



	