<?php

session_start();
if (!isset($_SESSION['UsuarioID'])) {
  header("Location: index.php");
}
$uniao = $_SESSION['UsuarioID'];

$raca1 = $_POST['raca1'];
$raca2 = $_POST['raca2'];
$raca3 = $_POST['raca3'];
$raca4 = $_POST['raca4'];

$fis1 = $_POST['fis1'];
$fis2 = $_POST['fis2'];
$fis3 = $_POST['fis3'];
$fis4 = $_POST['fis4'];


$hab1 = $_POST['hab1'];
$hab2 = $_POST['hab2'];
$hab3 = $_POST['hab3'];
$hab4 = $_POST['hab4'];


$racai = array();
array_push($racai,intval($raca1));
array_push($racai,intval($raca2));
array_push($racai,intval($raca3));
array_push($racai,intval($raca4));

$fisic = array();
array_push($fisic,intval($fis1));
array_push($fisic,intval($fis2));
array_push($fisic,intval($fis3));
array_push($fisic,intval($fis4));

$habi = array();
array_push($habi,intval($hab1));
array_push($habi, intval($hab2));
array_push($habi, intval($hab3));
array_push($habi, intval($hab4));

$conexao = mysqli_connect('127.0.0.1', 'root', '', 'pwebfinal') or trigger_error(mysql_error());
$sql = "SELECT idtime FROM clubeusuario WHERE loginuser = '{$uniao}' ";
 $query = mysqli_query($conexao,$sql);
 $linha = mysqli_fetch_array($query);
 $id = $linha['idtime'];

 $sql2 = "SELECT * FROM jogador WHERE idtime = '{$id}' ";
 $query2 = mysqli_query($conexao,$sql2);
 $linha2 = mysqli_fetch_array($query2);

 $sql4 = "SELECT hp FROM timescad WHERE idtime = '{$id}'";
  $query4 = mysqli_query($conexao,$sql4);
 $linha3 = mysqli_fetch_array($query4);
 $hp = $linha3['hp'];



 if(!!$query2){
 	$nomes = array();
 	
 	 foreach($query2 as $item){
 	 $nome = $item['NomeJogador'];
 	 
 	 array_push($nomes, $nome);
 	 



 	 }}
 	 $a = array_sum($racai) + array_sum($fisic) + array_sum($habi);

if ($a > $hp) {
	echo "<script>alert('Haironletas insuficientes');</script>";
	echo "<script> window.location='aprimoramento.php';</script>";
}
else{for ($i=0; $i <=3; $i++) {
 	 	$nomejog = $nomes[$i];
 	 	$valraca = $racai[$i];
 	 	$valfis = $fisic[$i];
 	 	$habil = $habi[$i];

 	 	
 	 	$sql3 = "UPDATE jogador SET Habilidade = Habilidade + '$habil',Raca = Raca + '$valraca', CapFis = CapFis + '$valfis' WHERE NomeJogador = '{$nomejog}'";
 	 	 $query3 = mysqli_query($conexao,$sql3);
 	 	 
 	 }
 	 $sql5 = "UPDATE timescad SET hp = hp - '$a' WHERE idtime = '{$id}'";
 	 	 $query5 = mysqli_query($conexao,$sql5);
	echo "<script>alert('Aprimoramento feito com Sucesso');</script>";
	echo "<script> window.location='aprimoramento.php';</script>";


 	
}
 	 
 	 

?>