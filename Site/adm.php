<?php
session_start();
    if(!isset ($_SESSION ['logado']) ){
        header('Location: index.php?status=NaoLogado');
    }

  

    require 'php/fragmentos.php';
    cabecaADM();
    echo'
            <div >
                <div class="gallery-info" id="visao" style="margin-top:150px;margin-bottom:20px;">
                <h3 style="color: red">Visão Do Cliente</h3>
               
            </div>
            <div style="border-width:3px;border-style:ridge;border-color:black;border-radius: 10px 20px;">
                ';
    
    galeriaA();
    
    echo'
          </div>
        ';
        echo'
            <div >
                <div class="gallery-info" id="imagens" style="margin-top:150px;margin-bottom:20px;">
                <h3 style="color: red">Imagens</h3>
               
            </div>
            
                ';

    editarImagens();
 

    rodaPe();







?>
