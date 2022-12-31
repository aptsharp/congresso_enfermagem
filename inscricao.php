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


	   <!--   Mascara de cpf -->
	<!--
	<script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
	<script src="js/jquery.mask.min.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("cpf").mask("000.000.000/00");
		})
	</script>
-->

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
					<li><a href="index.php">Início</a></lis>

				</ul>
				<!-- /Main navigation -->

			</div>
		</nav>
		<!-- /Nav -->

	</header>
	<!-- /Header -->





	<!-- Contact -->
	<div id="#inscricao" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section-header -->
				<div class="section-header text-center">
					<h2 class="title">Inscrição</h2>
				</div>
				<!-- /Section-header -->
			

				<!-- contact form -->
				<div class="col-md-8 col-md-offset-2">
					<!-- action tem que ser envia coloquei index para ninguem pagar-->
					<form class="contact-form" method="POST" action="envia.php">
						<input type="text" class="input" placeholder="Nome" name="nome" required="">
						<input type="email" class="input" placeholder="E-mail" name="email" required="">
						<input type="text" class="input" placeholder="Telefone" name="telefone" required="">
						<input   type="text" class="input" placeholder="Documento de Identificação (CPF, Passaporte)" name="documento" required="">
						<div>
							<label>País de origem: </label>
						<select name="nacionalidade" id="paises">
								<option value="Brasil" selected="selected">Brasil</option>
								<option value="Afeganistão">Afeganistão</option>
								<option value="África do Sul">África do Sul</option>
								<option value="Albânia">Albânia</option>
								<option value="Alemanha">Alemanha</option>
								<option value="Andorra">Andorra</option>
								<option value="Angola">Angola</option>
								<option value="Anguilla">Anguilla</option>
								<option value="Antilhas Holandesas">Antilhas Holandesas</option>
								<option value="Antárctida">Antárctida</option>
								<option value="Antígua e Barbuda">Antígua e Barbuda</option>
								<option value="Argentina">Argentina</option>
								<option value="Argélia">Argélia</option>
								<option value="Armênia">Armênia</option>
								<option value="Aruba">Aruba</option>
								<option value="Arábia Saudita">Arábia Saudita</option>
								<option value="Austrália">Austrália</option>
								<option value="Áustria">Áustria</option>
								<option value="Azerbaijão">Azerbaijão</option>
								<option value="Bahamas">Bahamas</option>
								<option value="Bahrein">Bahrein</option>
								<option value="Bangladesh">Bangladesh</option>
								<option value="Barbados">Barbados</option>
								<option value="Belize">Belize</option>
								<option value="Benim">Benim</option>
								<option value="Bermudas">Bermudas</option>
								<option value="Bielorrússia">Bielorrússia</option>
								<option value="Bolívia">Bolívia</option>
								<option value="Botswana">Botswana</option>
								<option value="Brunei">Brunei</option>
								<option value="Bulgária">Bulgária</option>
								<option value="Burkina Faso">Burkina Faso</option>
								<option value="Burundi">Burundi</option>
								<option value="Butão">Butão</option>
								<option value="Bélgica">Bélgica</option>
								<option value="Bósnia e Herzegovina">Bósnia e Herzegovina</option>
								<option value="Cabo Verde">Cabo Verde</option>
								<option value="Camarões">Camarões</option>
								<option value="Camboja">Camboja</option>
								<option value="Canadá">Canadá</option>
								<option value="Catar">Catar</option>
								<option value="Cazaquistão">Cazaquistão</option>
								<option value="Chade">Chade</option>
								<option value="Chile">Chile</option>
								<option value="China">China</option>
								<option value="Chipre">Chipre</option>
								<option value="Colômbia">Colômbia</option>
								<option value="Comores">Comores</option>
								<option value="Coreia do Norte">Coreia do Norte</option>
								<option value="Coreia do Sul">Coreia do Sul</option>
								<option value="Costa do Marfim">Costa do Marfim</option>
								<option value="Costa Rica">Costa Rica</option>
								<option value="Croácia">Croácia</option>
								<option value="Cuba">Cuba</option>
								<option value="Dinamarca">Dinamarca</option>
								<option value="Djibouti">Djibouti</option>
								<option value="Dominica">Dominica</option>
								<option value="Egito">Egito</option>
								<option value="El Salvador">El Salvador</option>
								<option value="Emirados Árabes Unidos">Emirados Árabes Unidos</option>
								<option value="Equador">Equador</option>
								<option value="Eritreia">Eritreia</option>
								<option value="Escócia">Escócia</option>
								<option value="Eslováquia">Eslováquia</option>
								<option value="Eslovênia">Eslovênia</option>
								<option value="Espanha">Espanha</option>
								<option value="Estados Federados da Micronésia">Estados Federados da Micronésia</option>
								<option value="Estados Unidos">Estados Unidos</option>
								<option value="Estônia">Estônia</option>
								<option value="Etiópia">Etiópia</option>
								<option value="Fiji">Fiji</option>
								<option value="Filipinas">Filipinas</option>
								<option value="Finlândia">Finlândia</option>
								<option value="França">França</option>
								<option value="Gabão">Gabão</option>
								<option value="Gana">Gana</option>
								<option value="Geórgia">Geórgia</option>
								<option value="Gibraltar">Gibraltar</option>
								<option value="Granada">Granada</option>
								<option value="Gronelândia">Gronelândia</option>
								<option value="Grécia">Grécia</option>
								<option value="Guadalupe">Guadalupe</option>
								<option value="Guam">Guam</option>
								<option value="Guatemala">Guatemala</option>
								<option value="Guernesei">Guernesei</option>
								<option value="Guiana">Guiana</option>
								<option value="Guiana Francesa">Guiana Francesa</option>
								<option value="Guiné">Guiné</option>
								<option value="Guiné Equatorial">Guiné Equatorial</option>
								<option value="Guiné-Bissau">Guiné-Bissau</option>
								<option value="Gâmbia">Gâmbia</option>
								<option value="Haiti">Haiti</option>
								<option value="Honduras">Honduras</option>
								<option value="Hong Kong">Hong Kong</option>
								<option value="Hungria">Hungria</option>
								<option value="Ilha Bouvet">Ilha Bouvet</option>
								<option value="Ilha de Man">Ilha de Man</option>
								<option value="Ilha do Natal">Ilha do Natal</option>
								<option value="Ilha Heard e Ilhas McDonald">Ilha Heard e Ilhas McDonald</option>
								<option value="Ilha Norfolk">Ilha Norfolk</option>
								<option value="Ilhas Cayman">Ilhas Cayman</option>
								<option value="Ilhas Cocos (Keeling)">Ilhas Cocos (Keeling)</option>
								<option value="Ilhas Cook">Ilhas Cook</option>
								<option value="Ilhas Feroé">Ilhas Feroé</option>
								<option value="Ilhas Geórgia do Sul e Sandwich do Sul">Ilhas Geórgia do Sul e Sandwich do Sul</option>
								<option value="Ilhas Malvinas">Ilhas Malvinas</option>
								<option value="Ilhas Marshall">Ilhas Marshall</option>
								<option value="Ilhas Menores Distantes dos Estados Unidos">Ilhas Menores Distantes dos Estados Unidos</option>
								<option value="Ilhas Salomão">Ilhas Salomão</option>
								<option value="Ilhas Virgens Americanas">Ilhas Virgens Americanas</option>
								<option value="Ilhas Virgens Britânicas">Ilhas Virgens Britânicas</option>
								<option value="Ilhas Åland">Ilhas Åland</option>
								<option value="Indonésia">Indonésia</option>
								<option value="Inglaterra">Inglaterra</option>
								<option value="Índia">Índia</option>
								<option value="Iraque">Iraque</option>
								<option value="Irlanda do Norte">Irlanda do Norte</option>
								<option value="Irlanda">Irlanda</option>
								<option value="Irã">Irã</option>
								<option value="Islândia">Islândia</option>
								<option value="Israel">Israel</option>
								<option value="Itália">Itália</option>
								<option value="Iêmen">Iêmen</option>
								<option value="Jamaica">Jamaica</option>
								<option value="Japão">Japão</option>
								<option value="Jersey">Jersey</option>
								<option value="Jordânia">Jordânia</option>
								<option value="Kiribati">Kiribati</option>
								<option value="Kuwait">Kuwait</option>
								<option value="Laos">Laos</option>
								<option value="Lesoto">Lesoto</option>
								<option value="Letônia">Letônia</option>
								<option value="Libéria">Libéria</option>
								<option value="Liechtenstein">Liechtenstein</option>
								<option value="Lituânia">Lituânia</option>
								<option value="Luxemburgo">Luxemburgo</option>
								<option value="Líbano">Líbano</option>
								<option value="Líbia">Líbia</option>
								<option value="Macau">Macau</option>
								<option value="Macedônia">Macedônia</option>
								<option value="Madagáscar">Madagáscar</option>
								<option value="Malawi">Malawi</option>
								<option value="Maldivas">Maldivas</option>
								<option value="Mali">Mali</option>
								<option value="Malta">Malta</option>
								<option value="Malásia">Malásia</option>
								<option value="Marianas Setentrionais">Marianas Setentrionais</option>
								<option value="Marrocos">Marrocos</option>
								<option value="Martinica">Martinica</option>
								<option value="Mauritânia">Mauritânia</option>
								<option value="Maurícia">Maurícia</option>
								<option value="Mayotte">Mayotte</option>
								<option value="Moldávia">Moldávia</option>
								<option value="Mongólia">Mongólia</option>
								<option value="Montenegro">Montenegro</option>
								<option value="Montserrat">Montserrat</option>
								<option value="Moçambique">Moçambique</option>
								<option value="Myanmar">Myanmar</option>
								<option value="México">México</option>
								<option value="Mônaco">Mônaco</option>
								<option value="Namíbia">Namíbia</option>
								<option value="Nauru">Nauru</option>
								<option value="Nepal">Nepal</option>
								<option value="Nicarágua">Nicarágua</option>
								<option value="Nigéria">Nigéria</option>
								<option value="Niue">Niue</option>
								<option value="Noruega">Noruega</option>
								<option value="Nova Caledônia">Nova Caledônia</option>
								<option value="Nova Zelândia">Nova Zelândia</option>
								<option value="Níger">Níger</option>
								<option value="Omã">Omã</option>
								<option value="Palau">Palau</option>
								<option value="Palestina">Palestina</option>
								<option value="Panamá">Panamá</option>
								<option value="Papua-Nova Guiné">Papua-Nova Guiné</option>
								<option value="Paquistão">Paquistão</option>
								<option value="Paraguai">Paraguai</option>
								<option value="País de Gales">País de Gales</option>
								<option value="Países Baixos">Países Baixos</option>
								<option value="Peru">Peru</option>
								<option value="Pitcairn">Pitcairn</option>
								<option value="Polinésia Francesa">Polinésia Francesa</option>
								<option value="Polônia">Polônia</option>
								<option value="Porto Rico">Porto Rico</option>
								<option value="Portugal">Portugal</option>
								<option value="Quirguistão">Quirguistão</option>
								<option value="Quênia">Quênia</option>
								<option value="Reino Unido">Reino Unido</option>
								<option value="República Centro-Africana">República Centro-Africana</option>
								<option value="República Checa">República Checa</option>
								<option value="República Democrática do Congo">República Democrática do Congo</option>
								<option value="República do Congo">República do Congo</option>
								<option value="República Dominicana">República Dominicana</option>
								<option value="Reunião">Reunião</option>
								<option value="Romênia">Romênia</option>
								<option value="Ruanda">Ruanda</option>
								<option value="Rússia">Rússia</option>
								<option value="Saara Ocidental">Saara Ocidental</option>
								<option value="Saint Martin">Saint Martin</option>
								<option value="Saint-Barthélemy">Saint-Barthélemy</option>
								<option value="Saint-Pierre e Miquelon">Saint-Pierre e Miquelon</option>
								<option value="Samoa Americana">Samoa Americana</option>
								<option value="Samoa">Samoa</option>
								<option value="Santa Helena, Ascensão e Tristão da Cunha">Santa Helena, Ascensão e Tristão da Cunha</option>
								<option value="Santa Lúcia">Santa Lúcia</option>
								<option value="Senegal">Senegal</option>
								<option value="Serra Leoa">Serra Leoa</option>
								<option value="Seychelles">Seychelles</option>
								<option value="Singapura">Singapura</option>
								<option value="Somália">Somália</option>
								<option value="Sri Lanka">Sri Lanka</option>
								<option value="Suazilândia">Suazilândia</option>
								<option value="Sudão">Sudão</option>
								<option value="Suriname">Suriname</option>
								<option value="Suécia">Suécia</option>
								<option value="Suíça">Suíça</option>
								<option value="Svalbard e Jan Mayen">Svalbard e Jan Mayen</option>
								<option value="São Cristóvão e Nevis">São Cristóvão e Nevis</option>
								<option value="São Marino">São Marino</option>
								<option value="São Tomé e Príncipe">São Tomé e Príncipe</option>
								<option value="São Vicente e Granadinas">São Vicente e Granadinas</option>
								<option value="Sérvia">Sérvia</option>
								<option value="Síria">Síria</option>
								<option value="Tadjiquistão">Tadjiquistão</option>
								<option value="Tailândia">Tailândia</option>
								<option value="Taiwan">Taiwan</option>
								<option value="Tanzânia">Tanzânia</option>
								<option value="Terras Austrais e Antárticas Francesas">Terras Austrais e Antárticas Francesas</option>
								<option value="Território Britânico do Oceano Índico">Território Britânico do Oceano Índico</option>
								<option value="Timor-Leste">Timor-Leste</option>
								<option value="Togo">Togo</option>
								<option value="Tonga">Tonga</option>
								<option value="Toquelau">Toquelau</option>
								<option value="Trinidad e Tobago">Trinidad e Tobago</option>
								<option value="Tunísia">Tunísia</option>
								<option value="Turcas e Caicos">Turcas e Caicos</option>
								<option value="Turquemenistão">Turquemenistão</option>
								<option value="Turquia">Turquia</option>
								<option value="Tuvalu">Tuvalu</option>
								<option value="Ucrânia">Ucrânia</option>
								<option value="Uganda">Uganda</option>
								<option value="Uruguai">Uruguai</option>
								<option value="Uzbequistão">Uzbequistão</option>
								<option value="Vanuatu">Vanuatu</option>
								<option value="Vaticano">Vaticano</option>
								<option value="Venezuela">Venezuela</option>
								<option value="Vietname">Vietname</option>
								<option value="Wallis e Futuna">Wallis e Futuna</option>
								<option value="Zimbabwe">Zimbabwe</option>
								<option value="Zâmbia">Zâmbia</option>
							</select>
						</div>
						
						<br>
						<div>

							<label>Perfil:  </label>
						<select name="perfil" required="" >
														 
							  <option value="Alunos e Professores da rede Adventista"> Alunos da rede Adventista de São Paulo </option> <!-- 120 reais -->
							  <option value="Profissionais"> Profissionais e Professores </option> <!-- 200 reais -->
							  <option value="Coordenadores AINEC" selected="selected"> Coordenadores AINEC </option> <!-- 500 reais -->
						</select>
					   </div>

					   <br>


					   <!--

								<!--	*** parte da hospedagem -> não tirar, necessario para futuras versões

					   <div class="refeicao-container">
							<label>Você deseja dormir e participar das refeições no local do evento?</label>
							<select name="refeicao" class="refeicao" required="" >
								  <option value="Sim">Sim</option>
								  <option selected value="Nao">Não</option>
							</select>

							*** parte da hospedagem -> não tirar
						

						
						<div class="pernoites-container" hidden>
							<label>	Quantas pernoites você deseja?</label>
							<select name="pernoites" class="pernoites" required="" >
								  <option value="2">2</option>
								  <option value="3">3</option>
							</select>
					    </div>
					    
					    -->

					   <div class="aviso" >
							<label><strong><font color="#FF0000">IMPORTANTE !!!</font></strong></label><br>
							<li><label> As inscrições só serão concluídas após o Pagamento.</label><br></li>
							<li><label> Não esqueça de verificar se o seu perfil está correto.</label></li>


							
					    </div>

					   <br>

						<button class="main-btn">Finalizar Inscrição</button> 



					</form>
				</div>
				<!-- /contact form -->
               </div>
				<br></br><br></br><br></br>



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
						<p>XXXX@gmail.com</p>
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
						<!--<a href="index.php"><img src="img/logo_fundo.jpg" alt="logo"></a><br></br> -->
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
						<p>Copyright © 2019. All Rights Reserved. Designed by <a href="https://www.unasp.br/" target="_blank">UNASP-SP</a>
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
	<script type="text/javascript" src="js/inscricao.js"></script>

</body>

</html>
