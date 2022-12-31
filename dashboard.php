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

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->


</head>

<body>
	<!-- Header -->
	<header>
		
		<!-- Nav -->
		<nav id="nav" class="navbar nav">
			<div class="container">

				<div class="navbar-header">
					<!-- Logo -->
					<div class="navbar-brand">
						<a href="../index.php">
							<img class="logo" src="img/logos/unasp-azul.png" alt="logo">
						</a>
					</div>
					<!-- /Logo -->

				</div>

				<!--  Main navigation  -->
                <ul class="main-nav nav navbar-nav navbar-right">
                    <li><a href="index.php">Início</a></li>
                    <li><a href="#about">UNASP</a></li>
                    <li class="has-dropdown"><a href="#">Programa</a>
                           <ul class="dropdown">
                            <li><a href="#service1">enfermagem</a></li>
                        </ul>
                    </li>

					
					<li class="has-dropdown"><a href="inscricao.php" style="color:#fa4c06;" target="new_blank">Inscrição</a>
                       <ul class="dropdown"> 
                         <li><a href="inscricao.php" target="new_blank">Inscrever</a></li>
                         <li><a href="pagar.php" target="new_blank">Pagar</a></li>
                         <li><a href="verificar.php" target="new_blank">Verificar Inscrição</a></li>
                         </ul>
					</li>




					
					<li class="has-dropdown"><a href="#blog">Mais</a>
						<ul class="dropdown">
							<li><a href="../index.php/#portfolio">Fotos</a></li>
							<li><a href="../index.php/#contact">Contato</a></li>
						</ul>
					</li>
				</ul>
				<!-- /Main navigation -->


			</div>
		</nav>
		<!-- /Nav -->

	</header>
	<!-- /Header -->


<?php


            $documento = trim(@$_POST['documento']);
            $documento1 = '';
            require('conectdb.php');
            $verificadoc = mysqli_query($conexao,"SELECT * from cadastro WHERE documento = '$documento'");  
            while ($enfermagem = mysqli_fetch_object($verificadoc)) { 
            $documento1 = $enfermagem->documento;
            $valor = $enfermagem->valor;
            $nome = $enfermagem->nome;
            $perfil = $enfermagem->perfil;
            $pago = $enfermagem->pago;


            }


			 if($documento1 != $documento){
	        	//echo '<br></br><br></br><div class="section-header text-center "style="text-align: center;"><h2 class="title">Este documento (<b>'.$documento.'</b>)
	        //	 não foi encontrado em nossa base de dados. </h2></div><br></br><br></br>	';
	        	 	        	echo '<br></br><br></br><div class="section-header text-center "style="text-align: center;"><h2 class="title">Este documento (<b>'.$documento.'</b>) <br>
	        	 não foi encontrado em nossa base de dados. </h2></div><br></br><br></br>	';
	        //	echo '<br></br>		<div style="text-align: center;">Por favor faça a sua inscricao.</div> <br></br>';
			}else{ 
				echo '
						<div id="inscricao" class="section md-padding">

							<!-- Container -->
							<div class="container">

								<!-- Row -->
								<div class="row">

									<!-- Section-header -->
									<div class="section-header text-center">
										Olá,<h2 class="title">'.$nome.'</h2>
									</div>
									<!-- /Section-header -->

									<div class="section-header text-center">
										<p>Verifique suas informações:</p>
									</div>

									<div class="section-header text-left">
										<p>Documento: <b> '.$documento.'</b></p>

										<p>perfil: <b>'.$perfil.'</b></p>

										

										<p>Valor da Inscrição: <b>'.$valor.'</b></p>';

										// if ($perfil == "Professor UNASP-SP") {
							   //          	$pago = "Sim";
							   //          }


										if ($pago == "Nao") {
											
										            echo "

										            <p style='color:red;'>Pagamento Realizado: <b> $pago</b></p>

													
														<form class='contact-form' method='POST' action='checkout.php'>
															<input type='hidden' name='documento' value='$documento'>
															
															<button class='btn-danger'><i class='fa fa-money'></i> Realizar pagamento</button>
														</form>
												
													";
										}
										else
										{
											 echo " <p>Pagamento Realizado: <b>$pago</b></p>";
										}



								
				echo'
									</div>
								</div>
							</div>
						</div>
				';
			}


            

   //         if($documento  != $eventos->documento){
        //    	echo "Seu documento não foi encontrado em nosso sistema, faça a inscricao";
        //    }
?>







	<!-- Contact -->
	<div id="#inscricao" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">		

				
				<div class="section-header text-left">


				<div class="section-header text-left">
	

					

				</div>

			   </div>

			   <div class="section-header text-left">

				<div class="section-header text-left">
	

					

				</div>

			   </div>



					<!-- contact -->
				<div class="col-sm-4">
					<div class="contact">
						<i class="fa fa-phone"></i>
						<h3>Telefone</h3>
						<p>(11) 2128-6224</p>
					</div>
				</div>
				<!-- /contact -->

				<!-- contact -->
				<div class="col-sm-4">
					<div class="contact">
						<i class="fa fa-envelope"></i>
						<h3>E-mail</h3>
						<p>posgraduacao@unasp.edu.br</p>
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

					

					<!-- footer follow -->
					<div class="footer-logo">
						<a href="index.php"><img src="img/logo_branco.png" alt="logo"></a><br></br>
						<a href="https://www.unasp.br/" target="new_blank"><img src="img/logos/unasp-branco.png" alt="logo"></a>
					</div>

					<!-- footer follow -->
					<ul class="footer-follow">
						<li><a href="https://www.facebook.com/unaspsp/?jazoest=265100121116122112100517057671121161068484768311310911412072888556568145821011207954815775122758286734810611310358651001201191161171096972104988955117501048111811874487675118521047511965111488599114109875274718885499012277119" target="new_blank"><i class="fa fa-facebook"></i></a></li>
						<li><a href="https://twitter.com/unaspht" target="new_blank"><i class="fa fa-twitter"></i></a></li>
						<li><a href="https://www.instagram.com/unaspsp/?hl=pt-br" target="new_blank"><i class="fa fa-instagram"></i></a></li>
					</ul>
					<!-- /footer follow -->

					

					<!-- footer copyright -->
					<div class="footer-copyright">
						<p>Copyright © 2019. All Rights Reserved. Designed by <a target="_blank">UNASP-SP</a>
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
