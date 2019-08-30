<?php
session_start();
    if(!isset ($_SESSION ['logado']) ){
        header('Location: index.php?status=NaoLogado');
    }

    require 'php/connection.php';

    $conexao = new Connection();
    $sql ='select * from adm where id=:id;';
    $sth = $conexao->prepare ($sql);
    $id = $_SESSION ['logado'];
    $sth->bindParam(':id',$id);
    $sth->execute();
    $resultado = $sth->fetch(PDO::FETCH_OBJ);
    $nome = $resultado->usuario;
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ADMINISTRAÇÃO</title>
</head>
<body>


	<h1>Cadastrar Imagem</h1>
	<form method="POST" action="php/salvarImg.php" enctype="multipart/form-data">
        <label>Nome:</label>
        <input type="text" name="nome" placeholder="Digitar o nome"><br><br>
         
        <label>Imagem</label>
        <input type="file" name="imagem"><br><br>
            
        <input name="SendCadImg" type="submit" value="Cadastrar">
    </form>
    


</body>
</html>