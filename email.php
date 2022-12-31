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
<html>
<head>
	<title></title>
</head>
<body>

<?php 
 //1 – Definimos Para quem vai ser enviado o email
  $para = "marcos.franca@unasp.edu.br";
  //2 - resgatar o nome digitado no formulário e  grava na variavel $nome
  $nome = $_POST['nome'];
  // 3 - resgatar o assunto digitado no formulário e  grava na variavel //$assunto
  $assunto = $_POST['assunto'];
   //4 – Agora definimos a  mensagem que vai ser enviado no e-mail
  $mensagem = "<strong>Nome:  </strong>".$nome;
  $mensagem .= "<br>  <strong>Mensagem: </strong>".$_POST['mensagem'];

//5 – agora inserimos as codificações corretas e  tudo mais.
  $headers =  "Content-Type:text/html; charset=UTF-8\n";
  $headers .= "From:  dominio.com.br<sistema@dominio.com.br>\n"; //Vai ser //mostrado que  o email partiu deste email e seguido do nome
  $headers .= "X-Sender:  <sistema@dominio.com.br>\n"; //email do servidor //que enviou
  $headers .= "X-Mailer: PHP  v".phpversion()."\n";
  $headers .= "X-IP:  ".$_SERVER['REMOTE_ADDR']."\n";
  $headers .= "Return-Path:  <sistema@dominio.com.br>\n"; //caso a msg //seja respondida vai para  este email.
  $headers .= "MIME-Version: 1.0\n";
	mail($para, $assunto, $mensagem, $headers);  //função que faz o envio do email.
	//isset checa se o botão enviar foi clicado e só vai disparar o email se for verdadeiro
	//if(is_null(@$_POST['enviar'])){
		//$assunto = "Teste";

     	// pegando os dados do form...
    	//$msg = "Nome: " . $_POST["nome"] . "<br>";
    	//$msg .= "Email: " . $_POST["email"] . "<br>";
    	//$msg .= "Mensagem:<br>" . $_POST["mensagem"];

     	// email onde tu vai receber a mensagem
    	//$destinatario = "marcos.franca@unasp.edu.br";

        // headers que prepara a mensagem
    	//$headers = "MIME-Version: 1.0\r\n";
   		//$headers .= "Content-type: text/html; charset=utf-8\r\n";
    	//$headers .= "From: " . $_POST["nome"] . "<" . $_POST["email"] . ">\r\n";
    	//$headers .= "Reply-To: " . $_POST["email"] . "\r\n";


    	// envia o email...
   		//mail($destinatario,$assunto,$msg,$headers);

    	// volta para contato.php
    	//header("Location: index.php");
	//}
    



 ?>


</body>
</html>