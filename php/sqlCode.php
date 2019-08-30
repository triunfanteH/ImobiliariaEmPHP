<?php

    $msg="";

 

    function logarADM($login,$senha){
        try {
            require 'connection.php';
            $dbh = new Connection();
            $sql ='select * from adm where senha=:senha and usuario=:login';
            $sth=$dbh->prepare($sql);
            $sth ->bindParam(':senha',$senha);
            $sth->bindParam(':login',$login);
            $sth->execute();
            $resultado = $sth->fetch(PDO::FETCH_OBJ);
            if($resultado){
                session_start();
                //sessao recebe o valor do id do adm, com esse id posso fazer consultas posteriormente usando a sessao
                $_SESSION['logado'] =$resultado->id;
                header('Location:../adm.php');
            }else{
                header('Location:../acesso.php?erro=1');
            }
        }catch (PDOException $e){
            echo $e->getMessage();

        }

}

    function fazerPedido($nome,$email,$telefone,$lugarN,$mensagem){
        try {
            require 'connection.php';
            $dbh = new Connection();
            $sql ='insert into pedido (nome,email,telefone,mensagem,local) value (:nome,:email,:telefone,:mensagem,:local)';
            $sth=$dbh->prepare($sql);
            $sth->bindParam(':nome',$nome);
            $sth->bindParam(':local',$lugarN);
            $sth->bindParam(':email',$email);
            $sth->bindParam(':telefone',$telefone);
            $sth->bindParam(':mensagem',$mensagem);
            
            
            //redireciona dependendo do resultado
            if($sth->execute()){
                header ('Location:../index.php?status=Foi');
                
            }else{

                header ('Location:../index.php?status=NaoFoi');
            }
        }catch (PDOException $e){
            echo $e->getMessage();
        }
    }


   

    function pegaImagem(){
        try{
        
            require 'php/connection.php';
            $dbh = new Connection();
            $sth = $dbh->prepare("SELECT * from imagens");
            $sth->execute();
            $resultado = $sth->fetchAll();
            
            foreach ($resultado as $row) {
              
                $nome=htmlentities($row['1']);
                $caminho=htmlentities($row['2']);
                
                echo '
                <div class="carousel-item ">
            <img class="d-block w-100" src="salvos/'.$caminho.'" alt="'.$nome.'">
          </div>
                ';

            }

         



        }catch(PDOException $e){
            echo $e->getMessage();
        }

    }

    function pegaImagemM(){
        try{
        
            
            $dbh = new Connection();
            $sth = $dbh->prepare("SELECT * from imagens");
            $sth->execute();
            $resultado = $sth->fetchAll();
            
            foreach ($resultado as $row) {
              
                $nome=htmlentities($row['1']);
                $caminho=htmlentities($row['2']);
                
                echo '
                <div class="carousel-item ">
            <img class="d-block w-100" src="salvos/'.$caminho.'" alt="'.$nome.'">
          </div>
                ';

            }

         



        }catch(PDOException $e){
            echo $e->getMessage();
        }

    }

    function imagemEditar(){
        try{
        
            
            $dbh = new Connection();
            $sth = $dbh->prepare("SELECT * from imagens");
            $sth->execute();
            $resultado = $sth->fetchAll();
            
            foreach ($resultado as $row) {
              
                $nome=htmlentities($row['1']);
                $caminho=htmlentities($row['2']);
                
                echo '<div class="col-md-3 gallery-grid">
                        <br><a class="example-image-link" href="salvos/'.$caminho.'" data-lightbox="example-set" data-title=""><img class="example-image" src="salvos/'.$caminho.'" alt="'.$nome.'"/></a>
                    </div>';

            }



        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }













?>