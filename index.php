<?php 

       			 function porDoSol()
       		 {                       
          		  // Latitude e Longitude de São Paulo
           		 $horario = date_sunset(time(), SUNFUNCS_RET_TIMESTAMP, -23.521182, -46.628938, $zenith = ini_get("date.sunset_zenith"), -3);
           		 return date('H:i',$horario);
        }



			// verifica fechamento Sábado
        function fechaLoja()
        {
            		$fechado = false;

            		//$data = date('Y-m-d');
            		$horaAtual = date('H:i');
            		$diaSemana = date('l');
            		$horaFecha = porDoSol();
            		// verifica se é sexta
            		if($diaSemana == 'Friday')
            {
               		 // se a hora atual for maior ou igual a hora do por do sol = Fecha
               		 if($horaFecha <= $horaAtual)
                {
                    $fechado = true;
                }
            }
            // verifica se é sabado
            if($diaSemana == 'Saturday')
            {
                // se a hora do por do sol for maior ou igual a hora atual, mantem fechado
                if($horaFecha >= $horaAtual)
                {
                    $fechado = true;
                }
            }
            return $fechado;
            //return true;
        }



				// retorna o horario do por do sol


			if(fechaLoja())
		{
    		// aqui vai a chamada do que se processa caso seja sábado
			header("Location: http://eventos.unasp-sp.edu.br/sabado.html"); /* Redirect browser */
			//exit();	
			//echo "Loja Fechada";
		}


	fechaLoja();




 ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>EVENTOS - UNASP-SP</title>

	<link rel="icon" href="img/favicon.png" type="image/x-icon"/>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Owl Carousel -->
	<link type="text/css" rel="stylesheet" href="css/owl.carousel.css" />
	<link type="text/css" rel="stylesheet" href="css/owl.theme.default.css" />

	<!-- Magnific Popup -->
	<link type="text/css" rel="stylesheet" href="css/magnific-popup.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />

	
</head>

<body>
	<!-- Header -->
	<header id="home">
		<!-- Background Image -->
		<div class="bg-img" style="background-image: url('./img/background1.jpg');">
			<div class="overlay"></div>
		</div>
		<!-- /Background Image -->

		<!-- Nav -->
		<nav id="nav" class="navbar nav-transparent">
			<div class="container">

				<div class="navbar-header">
					<!-- Logo -->
					<div class="navbar-brand">
						<a href="index.php">
							<img class="logo" src="img/logos/unasp-azul.png" alt="logo">

							
						</a>
					</div>
					<!-- /Logo -->

					<!-- Collapse nav button -->
					<div class="nav-collapse">
						<span></span>
					</div>
					<!-- /Collapse nav button -->
				</div>

				<!--  Main navigation  -->
				<ul class="main-nav nav navbar-nav navbar-right">
					<li><a href="index.php">Início</a></lis>
					<li><a href="#about">UNASP</a></li>
					<li class="has-dropdown"><a href="#">Programa</a>
                           <ul class="dropdown">
							<li><a href="#service1">V Congresso Adventista de Educação Física</a></li>
							<li><a href="#service2">Normas</a></li>
							<li><a href="#hospedagem">Hospedagem</a></li>
							<li><a href="#template">Template Resumo Simples</a></li>
							<li><a href="#programa-dowload"> Download Programação Completa</a></li>


						</ul>
					</li>

					
					
					<li class="has-dropdown"><a href="inscricao.php" style="color:#fa4c06;" target="new_blank">Inscrição</a>
                       <ul class="dropdown"> 
                         <li><a href="inscricao.php" target="new_blank">Inscrever</a></li>
                         <li><a href="pagar.php" target="new_blank">Pagar</a></li>
                         <li><a href="verificar.php" target="new_blank">Verificar Inscrição</a></li>
                         </ul>

					
					<li class="has-dropdown"><a href="#blog">Mais</a>
						<ul class="dropdown">
							<li><a href="#portfolio">Fotos</a></li>
							<li><a href="#contact">Contato</a></li>
						</ul>
					</li>
		</nav>

				</ul>
				<!-- /Main navigation -->

			</div>
		</nav>
		<!-- /Nav -->

		<!-- home wrapper -->
		<div class="home-wrapper">
			<div class="container">
				<div class="row">

					<!-- home content -->
					<div class="col-md-10 col-md-offset-1">
						<div class="home-content">
							<h1 class="white-text">
								<a href="index.php">
							         <img class="logo" width="70%" src="img/logo_branco.png" alt="logo">
						        </a>
						        </h1>
						        
							<p class="white-text">
							</p>
							<a href="inscricao.php"><button class="white-btn">Inscrição</button></a>
							<a href="#about"><button class="main-btn">Sobre o UNASP</button></a>
							
							
						        <br></br>

							<p>Realização:</p>
						        <a href="https://www.unasp.br/" target="new_blank">
							         <img class="logo" width="20%" src="img/logos/unasp-branco.png" alt="logo">
						        </a>

						        <br></br><br><br>

							
						   
						</div>
					</div>
					<!-- /home content -->

				</div>
			</div>
		</div>
		<!-- /home wrapper -->

	</header>
	<!-- /Header -->

	<!-- About -->
	<div id="about" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title">UNASP</h2>
				</div>
				<!-- /Section header -->

				<div class="col-md-12">
					<p>
					O UNASP Campus São Paulo realiza diversos Eventos para os professores, alunos e convidados das Instituições de Ensino Superior.
					</p>
				</div>

				<!-- about -->
				<div class="col-md-4">
					<div class="about">
						<i class="fa fa-calendar-check-o"></i>
						<h3>UNASP</h3>
						<p>CENTRO UNIVERSITÁRIO ADVENTISTA DE SÃO PAULO</p>
						<a href=https://www.unasp.br/sp/" target="new_blank">Saber Mais</a>
					</div>
				</div>
				<!-- /about -->


				

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /About -->



   <!-- Numbers -->
	<div id="numbers" class="section sm-padding">

		<!-- Background Image -->
		<div class="bg-img" style="background-image: url('./img/background1.jpg');">
			<div class="overlay"></div>
		</div>
		<!-- /Background Image -->

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- number -->
				<div class="col-sm-3 col-xs-6">
					<div class="number">
						<h3 class="white-text"><span class="counter"></span></h3>
						<span class="white-text"></span>
					</div>
				</div>
				<!-- /number -->

				
			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Numbers -->






	<!-- Service -->

	<div id="service1" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title">Programa</h2>
					<h3 class="text">Sujeito a Alteração</h3>
				</div>
				<!-- /Section header -->



				<!-- service -->
				<div class="col-md-12 col-sm-12">
					<div class="service">
						<i class="fa fa-wifi"></i>
						<h3>Data: 09/05/2019 - Quinta</h3>
								
							
							<h3>IV Congresso Internacional de Enfermagem AINEC - LA</h3>
							<li>20:00 - Concerto de Abertura</li>
							<li>20:30 - Conferência de Abertura</li>
							
							
					 </div>
				</div>
				<!-- /service -->

			    <!-- Section header -->


				<!-- /Section header -->
				<!-- service -->
				<div class="col-md-12 col-sm-12">
					<div class="service">
						<i class="fa fa-exclamation-triangle"></i>
						<h3>Data: 10/05/2019 - Sexta</h3>
						<p>				
							<h3>IV Congresso Internacional de Enfermagem AINEC - LA</h3>	
								<li>08:00 - Distribuição de Materiais</li>
								<li>08:30 - Solenidade de Abertura</li>
								<li>09:00 - 1ª Conferencia</li>	
								<li>10:30 - Intervalo</li>	
								<li>11:00 - 2ª Conferencia</li>
								<li>12:30 - Almoço</li>
								<li>13:30 - 3ª Conferencia</li>
								<li>15:00 - 4ª Conferencia</li>
								
						</p>
					 </div>
				</div>


				<div class="col-md-12 col-sm-12">
					<div class="service">
						<i class="fa fa-exclamation-triangle"></i>
						<h3>Data: 11/05/2019 - Sábado</h3>
						<p>				
							<h3>IV Congresso Internacional de Enfermagem AINEC - LA</h3>	
								<li>09:00 - Escola Sabatina no Salão Nobre</li>
								<li>10:30 - Culto no Templo UNASP-SP</li>
								<li>11:30 - Foto Oficial em frente o Salão Nobre</li>
								<li>14:00 - 5ª Conferencia</li>
								<li>15:30 - 6ª Conferencia</li>
								<li>20:00 - Coquetel de ex alunos e congressistas, em celebração aos 50 anos do curso de Enfermagem - Restaurante</li>
								
								
						</p>
					 </div>
				</div>
				<!-- /service -->
								<!-- service -->
				<div class="col-md-12 col-sm-12">
					<div class="service">
						<i class="fa fa-book"></i>
						<h3>Runiões AINEC - LA</h3>
						<p>										
							<h3>IV Congresso Internacional de Enfermagem AINEC - LA</h3>
							<li>12/05/2019 - 13:00 ás 18:00 Tour em São Paulo</li>
							<li>13/05/2019 - Reunião no UNASP-SP, das 09:00 as 17:00 - Prédio Administrativo, Sala de Vídeoconferência</li>
							<li>14/05/2019 - Reunião no UNASPS-SP, das 09:00 as 17:00 - Prédio Administrativo, Sala de Vídeoconferência </li><br>

					 </div>
				</div>
				<!-- /service -->

								<!-- Section header -->	
				<div id="programa-dowload" class="section md-padding">
				<div class="text-center">
					<i class="fa fa-download"></i> <h3><a href="docs/ProgramaVCongressoAdventistadeEducaçãoFísica.pdf"
					 target="new_blank" >Download Programação Completa</a></h3>
				</div>

				<!-- /Section header -->
			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Service -->

	<div id="service2" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title">Normas</h2>
					<h3 class="text">NORMAS PARA ENVIO DE TRABALHOS</h3>
				</div>
				<!-- /Section header -->



				<!-- service -->
				<div class="col-md-12 col-sm-12">
					<div class="service">
						<i class="fa fa-exclamation-triangle"></i>
						<h3>Formas de Apresentação dos Trabalhos</h3>
								
							
							<li>Os trabalhos poderão ser apresentados nas categorias ORAL ou PÔSTER. A inscrição de pelo menos um dos autores deverá ser efetuada OBRIGATORIAMENTE antes da submissão dos trabalhos. A taxa de inscrição não será devolvida caso o trabalho não seja aprovado ou apresentado.</li>
							<li>Os resumos devem ser enviados até o dia(<b>22/05/2019</b>) para o email: (<b>XXXXX@gmail.com</b>)</li>							
												
					 </div>
				</div>

				

				<!-- /service -->
				<div class="col-md-12 col-sm-12">
					<div class="service">
						<i class="fa fa-exclamation-triangle"></i>
						<h3>Formas de Apresentação dos Trabalhos</h3>
								
							
							<h3>Categorias ORAL e PÔSTER</h3>
							<li>Devem ser enviados em Português, Espanhol ou Inglês seguindo as regras do modelo (Resumo).</li>							
					 </div>
				</div>

			

			</div>
			

		</div>
		

	</div>



   <!-- Numbers -->
	<div id="numbers" class="section sm-padding">

		<!-- Background Image -->
		<div class="bg-img" style="background-image: url('./img/background1.jpg');">
			<div class="overlay"></div>
		</div>
		<!-- /Background Image -->

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- number -->
				<div class="col-sm-3 col-xs-6">
					<div class="number">
						<h3 class="white-text"><span class="counter"></span></h3>
						<span class="white-text"></span>
					</div>
				</div>
				<!-- /number -->

				
			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Numbers -->



  <!-- Numbers -->
	<div id="numbers" class="section sm-padding">

		<!-- Background Image -->
		<div class="bg-img" style="background-image: url('./img/background21.jpg');">
			<div class="overlay"></div>
		</div>
		<!-- /Background Image -->

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- number -->
				<div class="col-sm-3 col-xs-6">
					<div class="number">
						<h3 class="white-text"><span class="counter"></span></h3>
						<span class="white-text"></span>
					</div>
				</div>
				<!-- /number -->

				
			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Numbers -->





      <!-- Numbers -->
	<div id="numbers" class="section sm-padding">

		<!-- Background Image -->
		<div class="bg-img" style="background-image: url('./img/background1.jpg');">
			<div class="overlay"></div>
		</div>
		<!-- /Background Image -->

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- number -->
				<div class="col-sm-3 col-xs-6">
					<div class="number">
						<h3 class="white-text"><span class="counter"></span></h3>
						<span class="white-text"></span>
					</div>
				</div>
				<!-- /number -->

				
			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Numbers -->




      <!-- Numbers -->
	<div id="numbers" class="section sm-padding">

		<!-- Background Image -->
		<div class="bg-img" style="background-image: url('./img/background1.jpg');">
			<div class="overlay"></div>
		</div>
		<!-- /Background Image -->

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- number -->
				<div class="col-sm-3 col-xs-6">
					<div class="number">
						<h3 class="white-text"><span class="counter"></span></h3>
						<span class="white-text"></span>
					</div>
				</div>
				<!-- /number -->

				
			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Numbers -->





	<!-- Service -->

	<div id="hospedagem" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title">Hospedagem</h2>
				</div>
				<!-- /Section header -->

										
				<div class="col-md-6 col-sm-6">
					<div class="service">
						<h3>Apartamento UNASP</h3>
						  <p>Para este congresso não ofereceremos hospedagem!</p>
						  <p>Nossas sugestões de hospedagem são:<br></p>
						  <br>
						  <li><a href="http://www.thehill.com.br/" > The Hill</a></li>
						  <li><a href="https://www.accorhotels.com/pt-br/hotel-5526-ibis-budget-sao-paulo-morumbi/index.shtml#origin=ibis" > Ibis Budget Morumbi</a></li>
						  <li><a href="https://www.accorhotels.com/pt-br/hotel-5532-ibis-sao-paulo-morumbi/index.shtml#origin=ibis" > Ibis Morumbi</a></li>
						  
						  <br>
						  <p><b>Contato: </b></p>
                          <p>E-mail: <a target="new_blank">XXXXX@gmail.com</a></p>
						  <p>Site:<a href="https://www.unasp.br/sp/" target="new_blank"> https://www.unasp.br/sp/</a></p>
					 </div>
				</div>

				<div class="col-md-6 col-sm-6">
					<div class="service">
						<h3>Refeições</h3>
						 <li>Você pode adquirir sua refeição no UNASP diretamente no setor de finaças no valor de R$20,00 reais ou estar fazendo uso de algumas opções mais proximas</li><br>

						 <p>Nossas sugestões de refeição: </p>
						 <p></p>

						 <li><a href="https://www.google.com.br/maps/dir/UNASP+-+Centro+Universit%C3%A1rio+Adventista+de+S%C3%A3o+Paulo+-+Estr.+de+Itapecerica+-+Jardim+Iae,+S%C3%A3o+Paulo+-+SP/Sabor+Caseiro+-+Avenida+Ellis+Maas+-+Cap%C3%A3o+Redondo,+S%C3%A3o+Paulo+-+SP/@-23.6648788,-46.7813097,16z/data=!3m1!4b1!4m13!4m12!1m5!1m1!1s0x94ce53af4ca1af35:0x6377668bc5bf790d!2m2!1d-46.7795582!2d-23.6667378!1m5!1m1!1s0x94ce53b7a247767b:0x952bdbbdfc1ba01!2m2!1d-46.7690882!2d-23.6628394">Sabor Caseiro</li>

						 <li><a href="https://pt.foursquare.com/v/centro-de-viv%C3%AAncia-prof-oly-pinto--unaspsp/4e4c2956b61c258863217660">Centro de Vivencia(fica dentro do UNASP-SP)</li>

						 <li><a href="https://www.google.com/maps/dir/UNASP+-+Centro+Universit%C3%A1rio+Adventista+de+S%C3%A3o+Paulo+-+Estr.+de+Itapecerica+-+Jardim+Iae,+S%C3%A3o+Paulo+-+SP/Subway+-+Estr.+de+Itapecerica,+6010B+-+Jardim+Amalia,+S%C3%A3o+Paulo+-+SP,+05858-001/@-23.666385,-46.7826201,18z/data=!3m1!4b1!4m13!4m12!1m5!1m1!1s0x94ce53af4ca1af35:0x6377668bc5bf790d!2m2!1d-46.7795582!2d-23.6667378!1m5!1m1!1s0x94ce53a624b662d3:0xc28c88f35d6a44b8!2m2!1d-46.783339!2d-23.6658445">Subway (em frente o UNASP)</li>

						 <li><a href="https://www.google.com.br/maps/dir/UNASP+-+Centro+Universit%C3%A1rio+Adventista+de+S%C3%A3o+Paulo+-+Estr.+de+Itapecerica+-+Jardim+Iae,+S%C3%A3o+Paulo+-+SP/Padaria+Nova+Fantastica+-+Avenida+Dom+Rodrigo+Sanches+-+Jardim+Amalia,+S%C3%A3o+Paulo+-+SP/@-23.6623229,-46.7801661,18.75z/data=!4m13!4m12!1m5!1m1!1s0x94ce53af4ca1af35:0x6377668bc5bf790d!2m2!1d-46.7795582!2d-23.6667378!1m5!1m1!1s0x94ce53a45d6b9d5b:0x3df6e0bc47e36694!2m2!1d-46.7797413!2d-23.6616293">Padaria e Restaurante Nova Fantastica</li>



					 </div>
				</div>

			

			



			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Service -->






   <!-- Numbers -->
	<div id="numbers" class="section sm-padding">

		<!-- Background Image -->
		<div class="bg-img" style="background-image: url('./img/background1.jpg');">
			<div class="overlay"></div>
		</div>
		<!-- /Background Image -->

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- number -->
				<div class="col-sm-3 col-xs-6">
					<div class="number">
						<h3 class="white-text"><span class="counter"></span></h3>
						<span class="white-text"></span>
					</div>
				</div>
				<!-- /number -->

				
			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Numbers -->




   <!-- Numbers -->
	<div id="numbers" class="section sm-padding">

		<!-- Background Image -->
		<div class="bg-img" style="background-image: url('./img/background1.jpg');">
			<div class="overlay"></div>
		</div>
		<!-- /Background Image -->

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- number -->
				<div class="col-sm-3 col-xs-6">
					<div class="number">
						<h3 class="white-text"><span class="counter"></span></h3>
						<span class="white-text"></span>
					</div>
				</div>
				<!-- /number -->

				
			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Numbers -->







	<!-- Contact -->
	<div id="contact" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section-header -->
				<div class="section-header text-center">
					<h2 class="title">Dúvidas entre em contato</h2>
				</div>
				<!-- /Section-header -->

					<!-- contact -->
				<div class="col-sm-4">
					<div class="contact">
						<i class="fa fa-phone"></i>
						<h3>Telefone</h3>
						<p>(11) 2128-6000</p>
					</div>
				</div>
				<!-- /contact -->

				<!-- contact -->
				<div class="col-sm-4">
					<div class="contact">
						<i class="fa fa-envelope"></i>
						<h3>E-mail</h3>
						<p>XXXXX@gmail.com</p>
					</div>
				</div>
				<!-- /contact -->

				<!-- contact -->
				<div class="col-sm-4">
					<div class="contact">
						<i class="fa fa-map-marker"></i>
						<h3>Endereço</h3>
						<p>Estrada de Itapecerica, 5859 Jd.Iae Cep 05858-001 / São Paulo - SP</p>
					</div>
				</div>
				<!-- /contact -->

				<!-- contact form 
				<div class="col-md-8 col-md-offset-2">
					<form class="contact-form">
						<input type="text" class="input" placeholder="Nome">
						<input type="email" class="input" placeholder="E-mail">
						<input type="text" class="input" placeholder="Assunto">
						<textarea class="input" placeholder="Mensagem"></textarea>
						<button class="main-btn">Enviar</button>
					</form>
				</div>
				<!-- /contact form -->

				<br></br><br></br><br></br><br></br>


 

			

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Contact -->


	<!-- Footer -->
	<footer id="footer" class="sm-padding bg-dark">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<div class="col-md-12">

					<!-- footer logo -->
					<div class="footer-logo">
						<a href="index.php"><img src="img/logo_fundo.jpg" alt="logo"></a><br></br>
						<a href="https://www.unasp.br/" target="new_blank"><img src="img/logos/unasp-branco.png" alt="logo"></a>
					</div>
					<!-- /footer logo -->

					<!-- footer follow -->
					<ul class="footer-follow">
						<li><a href="https://www.facebook.com/unaspsp/?jazoest=265100121116122112100517057671121161068484768311310911412072888556568145821011207954815775122758286734810611310358651001201191161171096972104988955117501048111811874487675118521047511965111488599114109875274718885499012277119" target="new_blank"><i class="fa fa-facebook"></i></a></li>
						<li><a href="https://twitter.com/unaspht" target="new_blank"><i class="fa fa-twitter"></i></a></li>
						<li><a href="https://www.instagram.com/unaspsp/?hl=pt-br" target="new_blank"><i class="fa fa-instagram"></i></a></li>
					</ul>
					<!-- /footer follow -->

					<!-- footer copyright -->
					<div class="footer-copyright">
						<p>Copyright © 2019. All Rights Reserved. Designed by <a href="https://www.unasp.br/" target="_blank">UNASP-SP</a>
                       </p>
					</div>
					<!-- /footer copyright -->

				</div>

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</footer>
	<!-- /Footer -->

	<!-- Back to top -->
	<div id="back-to-top"></div>
	<!-- /Back to top -->

	<!-- Preloader -->
	<div id="preloader">
		<div class="preloader">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
	<!-- /Preloader -->

	<!-- jQuery Plugins -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="js/jquery.magnific-popup.js"></script>
	<script type="text/javascript" src="js/main.js"></script>

</body>

</html>