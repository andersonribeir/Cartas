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
?>
<!DOCTYPE html>
<html>
<head>
  <title>Duelar</title>
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
        <li><a class = "not-active"href="cadastro_time.php">Criar Clube</a></li>    

        </li>

        <li>
          <a href="duelo.php">Aprimorar</a>
        </li>
        <li>
          <a class = "not-active"href="aprimoramento.php">Aprimoramento</a>
        </li>
      </ul>
      <div class="container-fluid ">
      <form class="navbar-form navbar-right" method="POST" action="logout.php" >
        <button class="btn btn-outline-danger my-2 my-sm-0">Sair</button>
      </form>

    </div>
  </div>

</nav>
  <div class="container-fluid col-sm-6 col-lg-6 col-xl-6 espaco1  ">
    <div class='row'>
    <center><h5 class="configcolor">Seus Jogadores</h5></center>
    
  


<?php
 $sql2 = "SELECT * FROM jogador WHERE idtime = '{$id}'";
 $query2 = mysqli_query($conexao,$sql2);
 $linha2 = mysqli_fetch_array($query2);
$nomejogador = $linha2['NomeJogador'];
$fotojogador = $linha2['FotoJogador'];
$raca = $linha2['Raca'];
$capfis = $linha2['CapFis'];
$hab = $linha2['Habilidade'];

$sql3 = "SELECT hp FROM timescad WHERE idtime = '{$id}'";
$query4 = mysqli_query($conexao,$sql3);
$linha3 = mysqli_fetch_array($query4);
$hp = $linha3['hp'];
 if ($hp > 0) {
     if(!!$query2){
    $nomes = array();
    echo "<div class='container centraliza'>
    <div class='container-fixed col-sm-6 col-lg-6 col-xl-6'> ";
    foreach($query2 as $item){
      $timee = $item['NomeJogador'];
      $fotoo = $item['FotoJogador'];
      array_push($nomes, $timee);
      $raca =  $item['Raca'];
      $capfis = $item['CapFis'];
      $hab    = $item['Habilidade'];
      echo "<div class='container col-sm-3 col-lg-3 col-xl-3 '>
      <row><div class='telinha '><img src='backup/$fotoo'>
      <h5 class='configcolor'>$timee<br><br>Raça = $raca<br>Fisico = $capfis<br>Habil = $hab</h5>
      </div></row>";
      echo "</div>";
     
} 

echo "</div></div>";
}
 

?>



</div>
</div>
<form method="POST" action="aprimorar.php" class="bg">
<div class="container-fluid col-sm-6 col-lg-6 col-xl-6 espaco1">
<div class='row'>
    <?php echo"<center><h5 class='configcolor pontos'>Distribuir pontos: $hp Hairoletas</h5></center>"?>
    

      <div class='container col-sm-3 col-lg-3 col-xl-3 '>
        <row>
           <div class='container col-sm-6 col-lg-6 col-xl-6'>
      <row>
      
      <?php echo "<center><h5 class='nomesapr'>$nomes[0]</h5><center>"; ?>
      <input type='text' name='raca1' value="RAÇA" class="transparencia form-control"  onfocus="this.value='';">
     <input type='text' name='fis1' value="FISICO" class="transparencia form-control"  onfocus="this.value='';">
     <input type='text' name='hab1' value="HABILIDADE" class="transparencia form-control"  onfocus="this.value='';">
     </row></div>
        </row>
      </div>
      <div class='container col-sm-3 col-lg-3 col-xl-3 '>
        <row>
           <div class='container col-sm-6 col-lg-6 col-xl-6'>
      <row>
      
      <?php echo "<center><h5 class='nomesapr'>$nomes[1]</h5><center>"; ?>
      <input type='text' name='raca2' value="RAÇA" class="transparencia form-control" onfocus="this.value='';" >
     <input type='text' name='fis2' value="FISICO" class="transparencia form-control" onfocus="this.value='';" >
     <input type='text' name='hab2' value="HABILIDADE" class="transparencia form-control" onfocus="this.value='';" >
     </row></div>
        </row>
      </div>
      <div class='container col-sm-3 col-lg-3 col-xl-3 '>
        <row>
           <div class='container col-sm-6 col-lg-6 col-xl-6'>
      <row>
      
      <?php echo "<center><h5 class=' nomesapr'>$nomes[2]</h5><center>"; ?>
      <input type='text' name='raca3' value="RAÇA" class="transparencia form-control" onfocus="this.value='';">
     <input type='text' name='fis3' value="FISICO" class="transparencia form-control" onfocus="this.value='';" >
     <input type='text' name='hab3' value="HABILIDADE" class="transparencia form-control"onfocus="this.value='';" >
     </row></div>
        </row>
      </div>
      <div class='container col-sm-3 col-lg-3 col-xl-3 '>
        <row>
           <div class='container col-sm-6 col-lg-6 col-xl-6'>
      <row>
      
      <?php echo "<center><h5 class='nomesapr'>$nomes[3]</h5></center>"; ?>
      <input type='text' name='raca4' value="RAÇA" class="transparencia form-control" onfocus="this.value='';" >
     <input type='text' name='fis4' value="FISICO" class="transparencia form-control" onfocus="this.value='';">
     <input type='text' name='hab4' value="HABILIDADE" class="transparencia form-control" onfocus="this.value='';">
     </row></div>
        </row>
      </div>

  
     <center> <input type="submit" value="Aprimorar" class="btn btn-success my-2 my-sm-0 tambtn espaco2"></center>

 
</form>



</div>

</div>




</div></div>

  </div>
</div>

</div>
</center></div></div>
</div>


</body>
</html>
<?php } else{
  if(!!$query2){
    $nomes = array();
    echo "<div class='container centraliza'>
    <div class='container-fixed col-sm-6 col-lg-6 col-xl-6'> ";
    foreach($query2 as $item){
      $timee = $item['NomeJogador'];
      $fotoo = $item['FotoJogador'];
      array_push($nomes, $timee);
      $raca =  $item['Raca'];
      $capfis = $item['CapFis'];
      $hab    = $item['Habilidade'];
      echo "<div class='container col-sm-3 col-lg-3 col-xl-3 '>
      <row><div class='telinha '><img src='backup/$fotoo'>
      <h5 class='configcolor'>$timee<br><br>Raça = $raca<br>Fisico = $capfis<br>Habil = $hab</h5>
      </div></row>";
      echo "</div>";
     
} 

echo "</div></div>";
}?>

</div>
</div>
<form method="POST" action="aprimorar.php">
<div class="container-fluid col-sm-6 col-lg-6 col-xl-6 espaco1">
<div class='row'>
    <?php echo"<center><h5 class='configcolor pontos'>Distribuir pontos: $hp Hairoletas</h5></center>"?>
    

      <div class='container col-sm-3 col-lg-3 col-xl-3 '>
        <row>
           <div class='container col-sm-6 col-lg-6 col-xl-6'>
      <row>
      
      <?php echo "<center><h5 class='nomesapr'>$nomes[0]</h5><center>"; ?>
      <input type='text' name='raca1' value="RAÇA" class="transparencia form-control"  onfocus="this.value='';">
     <input type='text' name='fis1' value="FISICO" class="transparencia form-control"  onfocus="this.value='';">
     <input type='text' name='hab1' value="HABILIDADE" class="transparencia form-control"  onfocus="this.value='';">
     </row></div>
        </row>
      </div>
      <div class='container col-sm-3 col-lg-3 col-xl-3 '>
        <row>
           <div class='container col-sm-6 col-lg-6 col-xl-6'>
      <row>
      
      <?php echo "<center><h5 class='nomesapr'>$nomes[1]</h5><center>"; ?>
      <input type='text' name='raca2' value="RAÇA" class="transparencia form-control" onfocus="this.value='';" >
     <input type='text' name='fis2' value="FISICO" class="transparencia form-control" onfocus="this.value='';" >
     <input type='text' name='hab2' value="HABILIDADE" class="transparencia form-control" onfocus="this.value='';" >
     </row></div>
        </row>
      </div>
      <div class='container col-sm-3 col-lg-3 col-xl-3 '>
        <row>
           <div class='container col-sm-6 col-lg-6 col-xl-6'>
      <row>
      
      <?php echo "<center><h5 class=' nomesapr'>$nomes[2]</h5><center>"; ?>
      <input type='text' name='raca3' value="RAÇA" class="transparencia form-control" onfocus="this.value='';">
     <input type='text' name='fis3' value="FISICO" class="transparencia form-control" onfocus="this.value='';" >
     <input type='text' name='hab3' value="HABILIDADE" class="transparencia form-control"onfocus="this.value='';" >
     </row></div>
        </row>
      </div>
      <div class='container col-sm-3 col-lg-3 col-xl-3 '>
        <row>
           <div class='container col-sm-6 col-lg-6 col-xl-6'>
      <row>
      
      <?php echo "<center><h5 class='nomesapr'>$nomes[3]</h5></center>"; ?>
      <input type='text' name='raca4' value="RAÇA" class="transparencia form-control" onfocus="this.value='';" >
     <input type='text' name='fis4' value="FISICO" class="transparencia form-control" onfocus="this.value='';">
     <input type='text' name='hab4' value="HABILIDADE" class="transparencia form-control" onfocus="this.value='';">
     </row></div>
        </row>
      </div>

  
     <center> <input type="submit" value="Aprimorar" class="btn btn-outline-success my-2 my-sm-0 tambtn espaco2 not-active"></center>

 
</form>



</div>

</div>




</div></div>

  </div>
</div>

</div>
</center></div></div>
</div>


</body>
</html>
<?php }?>