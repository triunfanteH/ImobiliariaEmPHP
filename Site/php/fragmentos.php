<?php

	function cabeca(){

		echo '<!DOCTYPE HTML>
				<html>
				<head>
				<title>Castello Madeiras</title>
				<meta name="viewport" content="width=device-width, initial-scale=1">
				<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
				<meta name="keywords" content="propellant Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
				Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
				<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
				<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
				<link rel="stylesheet" type="text/css" href="css/styleSwitch.css">
				<!-- Custom Theme files -->
				<link href="css/style.css" rel="stylesheet" type="text/css" />	
				<link rel="stylesheet" href="css/lightbox.css">
				<script src="js/jquery-1.11.1.min.js"> </script>	
				<script type="text/javascript">
					jQuery(document).ready(function($) {
						$(".scroll").click(function(event){		
							event.preventDefault();
							$("html,body").animate({scrollTop:$(this.hash).offset().top},1000);
						});
					});
				</script>
				<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
				   	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" >
		
				</head>
				<body style="font-family:LondiniaMedium;">';

		echo'
		
		<ul class="nav nav-pills navbar-fixed-top" style="background-color:#F5F5F5">
			
  <li role="presentation" class="active" ><a href="index.php">Início</a></li>
  <li role="presentation" class="active"><a href="#gallery">Portfólio</a></li>
  <li role="presentation" class="active"><a href="#contact">Contato</a></li>
  
</ul>


		<div align="center" class="banner" style="background-image: url(primeira1.png); height:  30%; width: 50%; margin-left:  20%;">
            
           
		<!-- container -->
		<div class="container">
                    <div class="logo">
                        <a href="index.html"><br><br><h1 align="center"></h1></a>
			</div>
			
			
		</div>
		<!-- //container -->
	</div>';
	}
				echo		'<br>';
				echo       '<br >';					
        						if (isset($_GET['status']) && $_GET['status'] == 'Foi'){
            					echo '<div class="alert alert-success" style="text-align:center;" role="alert">Pedido Feito com sucesso!</div>';
        						}
       					 
	function bemVindo(){

		echo '<div class="welcome">
		<!-- container -->
		<div class="container">
			<div class="welcome-info">
				<h3 style="color: red;">Castello Madeiras</h3>
                                <a href="#orcamento"><h4 style="color: red;">Solicite um orçamento</h4></a>
				<h5 class="caption">VENHA REALIZAR SEU SONHO DA CASA PRÓPRIA</h5>
				
			</div>
		</div>
		<!-- //container -->
	</div>';
	}

	function quemSomos(){
		echo '<div id="about" class="about">
		<!-- container -->
		<div class="container">
			<div class="about-grids">
				<div class="col-md-4 about-left">
					<img src="images/logocastelo.jpg" alt="" />
				</div>
				<div style="background: white" class="col-md-8 about-right">
                                    <h3 style="color: red;font-family:LondiniaMedium;"><strong>QUEM SOMOS</strong></h3>
                                        <p style="color: black">
                                        <h4 style="font-size: 18 px; color: red;">Somos uma empresa que atua no mercado da construção desde 2010, edificando casas pré-fabricadas em madeira. Possui vários projetos padronizados, com um alto padrão de qualidade. E você também pode personalizar sua casa pré-fabricada em madeira, trazendo até nós o seu projeto.</h4>
                                        </p>
				</div>
				<div class="clearfix"> </div>
			</div>
			
		<!-- //container -->
	</div>';
	}

	function proprietario(){
		echo'

		<div id="services" class="banner-bottom">
		<!-- container -->
		<div class="container">
			
		<!-- //container -->
	</div>


		<div id="testimonials" class="testimonials">
		<!-- container -->
		<div class="container">
			<div class="testimonials-info">
				<h3>Proprietário</h3>
				<h5 class="caption testimonials-caption">Carlos Alberto Rodrigues Junior</h5>
			</div>
			<div class="testimonials-grids">
					<script>
						// You can also use "$(window).load(function() {"
						$(function () {
						  // Slideshow 4
						  $("#slider3").responsiveSlides({
							auto: true,
							pager: true,
							nav: false,
							speed: 500,
							namespace: "callbacks",
							before: function () {
							  $(".events").append("<li>before event fired.</li>");
							},
							after: function () {
							  $(".events").append("<li>after event fired.</li>");
							}
						  });
					
						});
					</script>
					<div  id="top" class="callbacks_container">
						<ul class="rslides" id="slider3">
							<li>
								<div class="testimonials-grid">
								
									<p><span>"Antes de ser um bom profissional, seja uma excelente pessoa!</span>.<span>"</span></p>
								</div>
							</li>
				
						</ul>
					</div>
			</div>
		</div>
		<!-- //container -->
	</div>';
	}

	function galeria(){
		require 'sqlCode.php';
		echo '

		<div class="gallery-info" id="gallery" style="margin-top: 150px;">
				<h3 style="color: red">Portfólio</h3>
				<h5 class="caption" style="margin-bottom:20px;">Edificações Realizadas</h5>
			</div>
		<div class="carousel-inner" style="max-height:100%;max-width:98%;">
          <div class="carousel-item active">
            <img class="d-block w-100" src="images/1.jpg">
          </div>
          ';
                                     pegaImagem();   
					
					echo '<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>';
	}
	function galeriaA(){
		require 'php/sqlCode.php';
		echo '

		<div class="gallery-info" id="gallery" style="margin-top: 150px;">
				<h3 style="color: red">Portfólio</h3>
				<h5 class="caption" style="margin-bottom:20px;">Edificações Realizadas</h5>
			</div>
		<div class="carousel-inner" style="max-height:100%;max-width:98%;">
          <div class="carousel-item active">
            <img class="d-block w-100" src="images/1.jpg">
          </div>
          ';
                                     pegaImagemM();   
					
					echo '<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>';
	}

	function orcamento(){
		echo '<div id="contact" class="contact">
		<!-- container -->
		<div class="container">
			<div class="contact-info">
				<h3 id="orcamento" style="color: red">Solicite seu orçamento</h3>
			</div>
			<div class="contact-grids">
				
				<div class="col-md-4 contact-grid">
					<div class="contact-grid-info">
						<h3 style="color: red">Endereço</h3>
					</div>
					<div class="contact-grid-list">
						
						
						<h4>Fale Conosco</h4>
                                                <p>Imbituba-SC<br>Av. Brasil, 713 Paes Leme<br>Telefone : (48)3355-6727 <br>Celular: (48)99666-1132
                                                    <br>E-mail : <a href="mailto:castellomadeiras.imbituba@gmail.com">castellomadeiras.imbituba@gmail.com</a>
						</p>
                                                <p>Tubarão-SC <br>Av. Patrício Lima, 863 Humaitá<br>
						
                                                    Telefone : (48)3632-8743<br>Celular: (48)99824-4494
                                                    <br>E-mail : <a href="mailto:castellomadeiras.imbituba@gmail.com">castellomadeiras.imbituba@gmail.com</a>
						</p>
					</div>
				</div>
				<div class="col-md-4 contact-grid">
					<div class="contact-grid-info">
					</div>
					<div class="contact-grid-list">
						<form method="POST" action="php/pedido.php">
                                                    <input type="text" placeholder="Nome" required="" name="nome">
                                                    <input type="text" type="tel" placeholder="Telefone" required="" name="telefone">
                                                    <input type="text" placeholder="Email" required="" name="email">
                                                    <textarea placeholder="Mensagem" required="" maxlength="1000" name="mensagem"></textarea>
														<div class="onoffswitch">
														    <input type="checkbox" name="lugar" class="onoffswitch-checkbox" id="myonoffswitch" checked>
														    <label class="onoffswitch-label" for="myonoffswitch">
														        <span class="onoffswitch-inner"></span>
														        <span class="onoffswitch-switch"></span>
														    </label>
														</div>
                                                    <input style="background: red" type="submit" value="Enviar" name="enviar">
						</form>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!-- //container -->
	</div>';
	}

	function rodaPe(){
		echo '<div style="background: red;" class="footer">
		<!-- container -->
		<div class="container" >
                    <p>Copyrights © 2015 Propellant . Design by <a href="">Igor Alves Rodrigues</a> and Developed by <a href="">Hudson Alves Triunfante</a></p>
		</div>
		<!-- //container -->
	</div>
	<!-- //footer -->
	<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: "toTop", // fading element id
											containerHoverID: "toTopHover", // fading element hover id
											scrollSpeed: 1200,
											easingType: "linear" 
								 		};
										*/
										
										$().UItoTop({ easingType: "easeOutQuart" });
										
									});
								</script>
									<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- content-Get-in-touch -->
	<script src="js/responsiveslides.min.js"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>


      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>';
	}




	function cabecaADM(){
		require 'connection.php';
    	$conexao = new Connection();
    	$sql ='select * from adm where id=:id;';
    	$sth = $conexao->prepare ($sql);
    	$id = $_SESSION ['logado'];
   		$sth->bindParam(':id',$id);
   		$sth->execute();
    	$resultado = $sth->fetch(PDO::FETCH_OBJ);
   		$nome = $resultado->usuario;
   		$local = $resultado->local;

		echo '<!DOCTYPE HTML>
				<html>
				<head>
				<title>Castello Madeiras</title>
				<meta name="viewport" content="width=device-width, initial-scale=1">
				<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
				<meta name="keywords" content="propellant Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
				Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
				<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
				<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
				<link rel="stylesheet" type="text/css" href="css/styleSwitch.css">
				<!-- Custom Theme files -->
				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
				<link href="css/style.css" rel="stylesheet" type="text/css" />	
				<link rel="stylesheet" href="css/lightbox.css">
				<script src="js/jquery-1.11.1.min.js"> </script>	
				<script type="text/javascript">
					jQuery(document).ready(function($) {
						$(".scroll").click(function(event){		
							event.preventDefault();
							$("html,body").animate({scrollTop:$(this.hash).offset().top},1000);
						});
					});
				</script>
				<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
				   	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" >
		
				</head>
				<body style="font-family:LondiniaMedium;">';

		echo'
		
		
		<ul class="nav nav-pills navbar-fixed-top" style="background-color:#F5F5F5">
		<li role="presentation" class="active"><a href=""><span class="glyphicon glyphicon-user"></span> Bem Vindo(a) '.$nome.'</a></li>
  <li role="presentation" class="active" ><a href="#visao"><span class="glyphicon glyphicon-eye-open"></span> Visão de cliente
   </a></li>
  <li role="presentation" class="active"><a href="#imagens"><span class="glyphicon glyphicon-file"></span> Editar imagens</a></li>
  <li role="presentation" class="active"><a href="#msg"><span class="glyphicon glyphicon-envelope"></span> Mensagens</a></li>
   
   <li role="presentation" class="active"><a href="php/logout.php"><span class="glyphicon glyphicon-log-out"></span> Sair</a></li>
  	
</ul>
	

		<div align="center" class="banner" style="background-image: url(primeira1.png); height:  30%; width: 50%; margin-left:  20%;">
            
           
		<!-- container -->
		<div class="container">
                    <div class="logo">
                        <a href="index.html"><br><br><h1 align="center"></h1></a>
			</div>
			
			
		</div>
		<!-- //container -->
	</div>';
	}


	function editarImagens(){
	
		echo '<div id="gallery" class="gallery-top">
		<!-- container -->
		<div class="container">
			<div class="gallery-grids-top">
				<div class="gallery-grids">
					<div class="col-md-3 gallery-grid">
                                           
                                        </div>
                                        ';
                                     imagemEditar();  
					
					echo '          
					<div class="clearfix"> </div>
				</div>
				<script src="js/lightbox-plus-jquery.min.js"></script>
			</div>
		</div>
		<!-- //container -->
	</div>';
	echo'<div style="margin-top:150px;"></div>';

            echo'<div id="contact" class="contact">
		<!-- container -->
		<div class="container">
			<div class="contact-grids">
				
				
				<div class="col-md-4 contact-grid">
					<div class="contact-grid-info">
					</div>
					<div class="contact-grid-list">

             <h1>Cadastrar Imagens</h1>
            <form method="POST" action="php/salvarImg.php" enctype="multipart/form-data">
                <input type="text" placeholder="Descrição" required="" name="nome">
                <label>Imagem</label>
                <input type="file" name="imagem">                    
               <input style="background: red" type="submit" value="Cadastrar" name="SendCadImg">
            </form>
            </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!-- //container -->
	</div>';
    

						echo '

		<div class="gallery-info" id="msg" style="margin-top: 150px;margin-bottom:40px;">
				<h3 style="color: red">Mensagens</h3>
			</div>
		
          ';
    
                
                        echo'<div style="overflow-x:auto;">
                        <div class="container" >

                        <div id="no-more-tables">
                        <table class="col-md-12 table-bordered table-striped table-condensed cf" width="40%">
                        <thead class="cf" ><tr>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Telefone</th>
                        <th>Mensagen</th>
                        </tr></thead>
                        <tbody>';
                        $conexao = new Connection();
				    	$sql ='select * from adm where id=:id;';
				    	$sth = $conexao->prepare ($sql);
				    	$id = $_SESSION ['logado'];
				   		$sth->bindParam(':id',$id);
				   		$sth->execute();
				    	$resultado = $sth->fetch(PDO::FETCH_OBJ);
				   		$local = $resultado->local;
                        if($local==3){
                        	$conexao = new Connection();
	                        $select = $conexao->query("SELECT * FROM pedido");
	                        while($resultados = $select->fetch(PDO::FETCH_OBJ)) {
	                            echo '<tr>';
	                            echo '<td>' . $resultados->nome . '</td>';
	                            echo '<td>' . $resultados->email . '</td>';
	                            echo '<td>' . $resultados->telefone . '</td>';
	                            echo '<td>' . $resultados->mensagem . '</td>';
	                            echo '</tr>';
                        	}
                        }elseif($local==1) {
                        	$conexao = new Connection();
	                        $select = $conexao->query("SELECT * FROM pedido where local=1");
	                        while($resultados = $select->fetch(PDO::FETCH_OBJ)) {
	                            echo '<tr>';
	                            echo '<td>' . $resultados->nome . '</td>';
	                            echo '<td>' . $resultados->email . '</td>';
	                            echo '<td>' . $resultados->telefone . '</td>';
	                            echo '<td>' . $resultados->mensagem . '</td>';
	                            echo '</tr>';
	                        }
                        }elseif($local==2) {
                        	$conexao = new Connection();
	                        $select = $conexao->query("SELECT * FROM pedido where local=2");
	                        while($resultados = $select->fetch(PDO::FETCH_OBJ)) {
	                            echo '<tr>';
	                            echo '<td>' . $resultados->nome . '</td>';
	                            echo '<td>' . $resultados->email . '</td>';
	                            echo '<td>' . $resultados->telefone . '</td>';
	                            echo '<td>' . $resultados->mensagem . '</td>';
	                            echo '</tr>';
                        	}
                        }


                        

                        echo '</tbody></table>';

                        echo '</div>
                        </div>
                        </div >';
                        echo'<div style="margin-bottom:70px;"></div>';
                        

                    

	}
?>