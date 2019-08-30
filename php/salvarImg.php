<?php


$SendCadImg = filter_input(INPUT_POST, 'SendCadImg', FILTER_SANITIZE_STRING);
require 'connection.php';
if ($SendCadImg) {
    //Receber os dados do formulário
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $nome_imagem = $_FILES['imagem']['name'];
    //var_dump($_FILES['imagem']);
    //Inserir no BD
    $dbh = new Connection();
    $sql = "INSERT INTO imagens (nome, imagem) VALUES (:nome, :imagem)";
    $sth=$dbh->prepare($sql);
    
    $sth->bindParam(':nome', $nome);
    $sth->bindParam(':imagem', $nome_imagem);

    //Verificar se os dados foram inseridos com sucesso
    if ($sth->execute()) {
        //Recuperar último ID inserido no banco de dados
        $ultimo_id = $dbh->lastInsertId();

        //Diretório onde o arquivo vai ser salvo
        $diretorio = '../salvos/';

        //Criar a pasta de foto 
        mkdir($diretorio, 0755);
        
        if(move_uploaded_file($_FILES['imagem']['tmp_name'], $diretorio.$nome_imagem)){
            $_SESSION['msg'] = "<p style='color:green;'>Dados salvo com sucesso e upload da imagem realizado com sucesso</p>";
            header("Location: ../adm.php");
        }else{
            $_SESSION['msg'] = "<p><span style='color:green;'>Dados salvo com sucesso. </span><span style='color:red;'>Erro ao realizar o upload da imagem</span></p>";
            header("Location: ../adm.php");
        }        
    } else {
        $_SESSION['msg'] = "<p style='color:red;'>Erro ao salvar os dados</p>";
        header("Location: ../adm.php");
    }
} else {
    $_SESSION['msg'] = "<p style='color:red;'>Erro ao salvar os dados</p>";
    header("Location: ../adm.php?status=erro");
}


?>