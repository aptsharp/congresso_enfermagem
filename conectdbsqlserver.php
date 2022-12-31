enfermagem<?php


// conexao com o banco de dados = servidor, usuario, senha e banco
<?php
 
class Conexao
{
    private static $connection;
 
    private function __construct(){}
 
    public static function getConnection() {
 
        $pdoConfig  = DB_DRIVER . ":". "Server=" . DB_HOST . ";";
        $pdoConfig .= "Database=".enfermagem.";";
         
        try { 
            if(!isset($connection)){
                $connection =  new PDO($pdoConfig, DB_USER, DB_PASSWORD);
                $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            return $connection;
        } catch (PDOException $e) {
            $mensagem = "Drivers disponiveis: " . implode(",", PDO::getAvailableDrivers());
            $mensagem .= "\nErro: " . $e->getMessage();
            throw new Exception($mensagem);
           
        }
    }
}


?>
