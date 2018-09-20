<?php
class Database
{
    public static function Conectar()
    {
     	$params = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");  
        $pdo = new PDO('mysql:host=localhost;dbname=blognoticias', 'root', '', $params);
    	 //$pdo = new PDO('mysql:host=localhost;dbname=aseagro_aseagro1', 'aseagro_root_ase', 'asegis123#');
        //Filtrando posibles errores de conexión.
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }
}