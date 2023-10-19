<?php 
class Conexion{
    static public function conectar(){
        $link = new PDO("mysql:host=localhost;port=3308;dbname=web-4a", "sotero-4a", "sotero29ag");
        
        $link->exec("SET NAMES utf8");
        return $link;
    }
}
?>