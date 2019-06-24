<?php
session_start();
if (!isset($_SESSION['UsuarioID'])) {
  header("Location: index.php");
}

$id = $_SESSION['UsuarioID'];
$idinimigo = $_SESSION['inimigo'];

$opcao = $_POST['opcao'];

$conexao = mysqli_connect('127.0.0.1', 'root', '', 'pwebfinal') or trigger_error(mysql_error());
$sql = "SELECT * FROM jogador WHERE idtime = '{$idinimigo}'";
$query = mysqli_query($conexao,$sql);
$linha = mysqli_fetch_array($query);
$racaini = $linha['Raca'];
$capfisini = $linha['CapFis'];
$habini = $linha['Habilidade'];

 $sql1 = "SELECT idtime FROM clubeusuario WHERE loginuser = '{$id}' ";
 $query1 = mysqli_query($conexao,$sql1);
 $linha1 = mysqli_fetch_array($query1);
 $idtimee = $linha1['idtime'];

$sql2 = "SELECT * FROM jogador WHERE idtime = '{$idtimee}'";
$query2 = mysqli_query($conexao,$sql2);
$linha2 = mysqli_fetch_array($query2);
$raca = $linha2['Raca'];
$capfis = $linha2['CapFis'];
$hab = $linha2['Habilidade'];

 if(!!$query and !!$query1){
$arrayracai = array();
$arrayfisi = array();
$arrayhabi = array();

foreach($query as $item){
	$racaini = $item['Raca'];
	$fisini = $item['CapFis'];
	$habini = $item['Habilidade'];
	array_push($arrayracai, $racaini);
	array_push($arrayfisi, $fisini);
	array_push($arrayhabi, $habini);
}

$arrayraca = array();
$arrayfis = array();
$arrayhab = array();

foreach($query2 as $item1){
	$raca = $item1['Raca'];
	$fis = $item1['CapFis'];
	$hab = $item1['Habilidade'];
	array_push($arrayraca, $raca);
	array_push($arrayfis, $fis);
	array_push($arrayhab, $hab);
}


}

$pontos = 0;
$pontosini = 0;

if ($opcao == 'Raca') {

	if ($arrayraca[0] > $arrayracai[0]) {
		$pontos++;

	}
	elseif($arrayraca[0] == $arrayracai[0]){
		$pontos++;
		$pontosini++;
	}
	else {
		$pontosini++;
	}


}


elseif ($opcao == "Fisico") {
	if ($arrayfis[0] > $arrayfisi[0]) {
		$pontos++;

	}
	elseif($arrayfis[0] == $arrayfisi[0]){
		$pontos++;
		$pontosini++;
	}
	else {
		$pontosini++;
	}
}


elseif($opcao == "Habil"){
	if ($arrayhab[0] > $arrayhabi[0]) {
		$pontos++;

	}

	elseif ($arrayhab[0] == $arrayhabi[0]) {
		$pontos++;
		$pontosini++;
	}
	else {
		$pontosini++;
	}

}


for ($j=1; $j <=3 ; $j++) {

	$opcaorand = mt_rand(0,2);
	
	
	
	if ($opcaorand == 0) {
		if ($arrayraca[$j] > $arrayracai[$j]) {
		$pontos++;

	}
	elseif($arrayraca[$j] == $arrayracai[$j]){
		$pontosini++;
		$pontos++;

	}
	else {
		$pontosini++;
	}}


	 elseif ($opcaorand == 1) {
	 	if ($arrayfis[$j] > $arrayfisi[$j]) {
		$pontos++;

	}
	elseif ($arrayfis[$j] == $arrayfisi[$j]) {
		$pontos++;
		$pontosini++;
	}
	else {
		$pontosini++;
	} } 


	elseif ($opcaorand == 2) {
		if ($arrayhab[$j] > $arrayhabi[$j]) {
		$pontos++;

	}
	elseif($arrayhab[$j] == $arrayhabi[$j]){
		$pontos++;
		$pontosini++;
	}
	else {
		$pontosini++;
	}
	}
		

}


if ($pontos>$pontosini) {
	$sql3 = "UPDATE timescad SET hp = hp +50 WHERE idtime = '{$idtimee}' ";
	$sql31 = "UPDATE timescad SET hp = hp - 50 WHERE idtime = '{$idinimigo}' ";
	$query3 = mysqli_query($conexao,$sql3);
	$query31 = mysqli_query($conexao,$sql31);
	echo "<script>alert('Você ganhou por $pontos x $pontosini');</script>";
	echo "<script> window.location='index4.php';</script>";
	
}

elseif ($pontos == $pontosini) {
$sql4 = "UPDATE timescad SET hp = hp + 50 WHERE idtime = '{$idtimee}' ";
$query4 = mysqli_query($conexao,$sql4);
$sql5 = "UPDATE timescad SET hp = hp + 50 WHERE idtime = '{$idinimigo}' ";
$query5 = mysqli_query($conexao,$sql5);
echo "<script>alert('Houve um empate em $pontos x $pontosini');</script>";
echo "<script> window.location='index4.php';</script>";

}
else{
$sql61 = "UPDATE timescad SET hp = hp - 50 WHERE idtime = '{$idtimee}' ";
$sql6 = "UPDATE timescad SET hp = hp +50 WHERE idtime = '{$idinimigo}' ";
$query6 = mysqli_query($conexao,$sql6);
$query61 = mysqli_query($conexao,$sql61);
echo "<script>alert('Você perdeu por $pontos x $pontosini');</script>";
echo "<script> window.location='index4.php';</script>";

}



?>
