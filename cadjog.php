<?php
/******
 * Upload de imagens
 ******/
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



 $i = 1;
 while ($i <= 2 ) {
    

 $nomejog = $_POST[$i];
 $racajog = $_POST['raca'.$i];
 $habjog = $_POST['habilidade'.$i];
 $condjog = $_POST['cond'.$i];
 
// verifica se foi enviado um arquivo
if ( isset( $_FILES[ 'arquivo'.$i ][ 'name' ] ) && $_FILES[ 'arquivo'.$i ][ 'error' ] == 0 ) {
    
 
    $arquivo_tmp = $_FILES[ 'arquivo'.$i ][ 'tmp_name' ];
    $nome = $_FILES[ 'arquivo'.$i ][ 'name' ];
 
    // Pega a extensão
    $extensao = pathinfo ( $nome, PATHINFO_EXTENSION );
 
    // Converte a extensão para minúsculo
    $extensao = strtolower ( $extensao );
 
    // Somente imagens, .jpg;.jpeg;.gif;.png
    // Aqui eu enfileiro as extensões permitidas e separo por ';'
    // Isso serve apenas para eu poder pesquisar dentro desta String
    if ( strstr ( '.jpg;.jpeg;.gif;.png', $extensao ) ) {
        // Cria um nome único para esta imagem
        // Evita que duplique as imagens no servidor.
        // Evita nomes com acentos, espaços e caracteres não alfanuméricos

        $novoNome = uniqid ( time () ) . '.' . $extensao;
 
        // Concatena a pasta com o nome
        $destino = 'backup/' . $novoNome;

        //envia os dados pro BD

        $conexao = mysqli_connect('127.0.0.1', 'root', '', 'pwebfinal') or trigger_error(mysql_error());

        $sql = "INSERT INTO jogador(idJogador,NomeJogador,FotoJogador,Habilidade,Raca,CapFis,idtime) VALUES(null,'$nomejog','$novoNome','$habjog','$racajog','$condjog','$id')";
        $query = mysqli_query($conexao,$sql);

        


        


 
        // tenta mover o arquivo para o destino
        if ( @move_uploaded_file ( $arquivo_tmp, $destino ) ) {
            echo 'Arquivo salvo com sucesso em : <strong>' . $destino . '</strong><br />';
            echo ' < img src = "' . $destino . '" />';}
        
        else
            echo 'Erro ao salvar o arquivo. Aparentemente você não tem permissão de escrita.<br />';
    }
    else
        echo 'Você poderá enviar apenas arquivos "*.jpg;*.jpeg;*.gif;*.png"<br />';
}
else
    echo 'Você não enviou nenhum arquivo!';
$i++;
 }
 header("location: index4.php");

