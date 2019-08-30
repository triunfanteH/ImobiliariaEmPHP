<?php
    $nome = filter_input(INPUT_POST,"nome");
    $email =filter_input(INPUT_POST,"email");
    $telefone=filter_input(INPUT_POST,"telefone");
    $lugar=filter_input(INPUT_POST,"lugar");
    $mensagem=filter_input(INPUT_POST,"mensagem");
    if($lugar=="on"){
        //1 é imbituba
        $lugarN=1;
    }else{
        //2 tubarão
        $lugarN=2;
    }
    include 'sqlCode.php';
    fazerPedido($nome,$email,$telefone,$lugarN,$mensagem);

?>