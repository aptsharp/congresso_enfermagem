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
			else
		{
    		// aqui vai o que fica aberto durante a semana
    		header("Location:http://www.eventos.unasp-sp.edu.br"); /* Redirect browser */
			//exit();	
    		//echo "Loja Aberta";
		}


	fechaLoja();




 ?>