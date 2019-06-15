<?php
/******
 * Upload de imagens
 ******/
session_start();

if (!isset($_SESSION['UsuarioID'])) {
  header("Location: index.php");
}
$uniao = $_SESSION['UsuarioID'];

 $time = $_POST['nometime'];
 

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

        $sql = "INSERT INTO timescad(idtime,nometime,fototime) VALUES(null,'$time','$novoNome')";
        $query = mysqli_query($conexao,$sql);
        $conexao = mysqli_connect('127.0.0.1', 'root', '', 'pwebfinal') or trigger_error(mysql_error());

         $sql1 = "SELECT idtime FROM timescad WHERE nometime = '{$time}'";
        $query1 =  mysqli_query($conexao,$sql1);
        $resultado = mysqli_fetch_array($query1);
        $idtime = $resultado['idtime']; 

        $sql2 = "INSERT INTO clubeusuario(idUniao,loginuser,idtime) VALUES(null,'$uniao','$idtime')";
        $query2 = mysqli_query($conexao,$sql2);
        


 
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

 header("location: cadastro_jogador.php");

