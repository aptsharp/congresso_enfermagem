enfermagem<?php 

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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>EVENTOS - UNASP-SP</title>

    <link rel="icon" href="img/favicon.png" type="image/x-icon"/>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

    <link type="text/css" rel="stylesheet" href="css/FimdoPagamento.css" />


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
                        <a href="index.php">
                            <img class="logo" src="img/logo.png" alt="logo">
                        </a>
                    </div>
                    <!-- /Logo -->

                </div>

                <!--  Main navigation  -->
                <ul class="main-nav nav navbar-nav navbar-right">
                    <li><a href="index.php">Início</a></lis>
                    <li><a href="#about">UNASP</a></li>
                    <li class="has-dropdown"><a href="#">Programa</a>
                           <ul class="dropdown">
                            <li><a href="#service1">enfermagem</a></li>
                        </ul>
                    </li>

                    
                    
                    <li class="has-dropdown"><a href="inscricao.php" style="color:#6195ff;" target="new_blank">Inscrição</a>
                       <ul class="dropdown"> 
                         <!-- inserir a pagina html verificar.php para funcionar o verificar inscrição--> 
                         <li><a href="verificar.php" target="new_blank">Verificar Inscrição</a></li>
                         </ul>
                    </li>


                    
                    <li class="has-dropdown"><a href="#blog">Mais</a>
                        <ul class="dropdown">
                            <li><a href="#portfolio">Fotos</a></li>
                            <li><a href="#contact">Contato</a></li>
                        </ul>
                    </li>
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
                    <h2 class="text">Obrigado por se Inscrever</h2>
                    <h2 class="title">Te Aguardamos para o nosso evento</h2>
                    <h4>No prazo de 2 dias úteis Iremos contabilizar o seu pagamento e você poderá verificar se o pagamento foi aprovado. Quando a informação estiver disponível, vá na aba <label class="inscricao-conteudo">inscrição</label>  e clique na opção <label class="inscricao-conteudo">verificar inscrição</label> .</h4>

                </div>
                <!-- /Section-header -->

<?php




        include("conectdb.php");


         //declaração de variaveis  que recebem dados da cielo e mandam pro banco
            $orderNumber = trim(@$_GET['order_number']);
            $amount =  trim(@$_POST['amount']);
            $discountAmount = trim(@$_POST['discount_amount']);
            $checkoutCieloOrderNumber = trim(@$_POST['checkout_cielo_order_number']);
            $createdDate = trim(@$_POST['created_date']);
            $customerName = trim(@$_POST['customer_name']);
            $customerPhone = trim(@$_POST['customer_phone']);
            $customerIdentity = trim(@$_POST['customer_identity']);
            $customerEmail = trim(@$_POST['customer_email']);
            $shippingType = trim(@$_POST['shipping_type']);
            $shippingAddressZipcode = trim(@$_POST['shipping_address_zipcode']);
            $shippingAddressDistrict = trim(@$_POST['shipping_address_district']);
            $shippingAddressCity = trim(@$_POST['shipping_address_city']);
            $shippingAddressState = trim(@$_POST['shipping_address_state']);
            $shippingAddressLine1 = trim(@$_POST['shipping_address_line1']);
            $shippingAddressLine2 = trim(@$_POST['shipping_address_line2']);
            $shippingAddressNumber = trim(@$_POST['shipping_address_number']);
            $paymentMethodType = trim(@$_POST['payment_method_type']);
            $paymentMethodbBrand = trim(@$_POST['payment_method_brand']);
            $paymentMaskedcreditcard = trim(@$_POST['payment_maskedcreditcard']);
            $paymentInstallments = trim(@$_POST['payment_installments']);
            $paymentStatus = trim(@$_POST['payment_status']);
            $tid = trim(@$_POST['tid']);
            $testTransaction = trim(@$_POST['test_transaction']);

            $url  = '';
            $merchantId = '';
            $MerchantOrderNumber = '';
                    

                                        include('conectdb.php');
                        mysqli_query($conexao,"insert into cielo (order_number,amount,discount_amount,checkout_cielo_order_number,checkout_cielo_order_number,
                            created_date,customer_name,,customer_phone,customer_identity,customer_email,shipping_type,
                            shipping_address_zipcode,shipping_address_district,shipping_address_city,shipping_address_state,
                            shipping_address_line1,shipping_address_line2,shipping_address_number,payment_method_type,
                            payment_method_brand,payment_maskedcreditcard,payment_installments,payment_status,tid,test_transaction)  
                           values ('$orderNumber',$amount,$discountAmount,'$checkoutCieloOrderNumber','$createdDate','$customerName',
                           $customerPhone,'$customerIdentity','$customerEmail',$shippingType,$shippingAddressZipcode,'$shippingAddressDistrict','$shippingAddressCity','$shippingAddressState','$shippingAddressLine1',
                           '$shippingAddressLine2',$shippingAddressNumber,$paymentMethodType,$paymentMethodbBrand,
                           '$paymentMaskedcreditcard',$paymentInstallments,$paymentStatus,'$tid','$testTransaction')");







    

     ?>
                

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
                        <p>congressoef2019@gmail.com</p>
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

                    <!-- footer logo -->
                    <div class="footer-logo">
                        <a href="index.php"><img src="img/logo_branco.png" alt="logo"></a>
                    </div>
                    <!-- /footer logo -->

                    <!-- footer follow -->
                    <ul class="footer-follow">
                        <li><a href=""><i class="fa fa-facebook"></i></a></li>
                        <li><a href=""><i class="fa fa-twitter"></i></a></li>
                        <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                        <li><a href=""><i class="fa fa-instagram"></i></a></li>
                        <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                        <li><a href=""><i class="fa fa-youtube"></i></a></li>
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

