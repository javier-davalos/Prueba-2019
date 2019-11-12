<?php
    #conexion a base de datos
     $user = 'root';
    $password = '';
    $host = 'localhost';
    $dbname = 'cursodwp';
    $parametros = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'");
   
    try
    {
        $connection = new PDO("mysql:host=$host;dbname=$dbname;", $user, $password, $parametros);
        //echo 'Conectado a '.$connection->getAttribute(PDO::ATTR_CONNECTION_STATUS);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }


?>

