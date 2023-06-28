<?php
ini_set("display_errors", 1);

ini_set("display_startup_errors", 1);

error_reporting(E_ALL);
class Conectar{
     protected $db;

     protected function Conexion(){
        try {
            $conectar = $this->db = new PDO ("mysql:local=localhost;dbname=alquilartemis2","campus","campus2023");
            return $conectar;
        } catch (Exeption $e) {
            return $e->getMessage();
        }
     }

     public function set_name(){
        return $this->db->query("SET NAMES 'utf8'");
     }
}


?>