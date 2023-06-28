<?php
ini_set("display_errors", 1);

ini_set("display_startup_errors", 1);

error_reporting(E_ALL);
class Alquiler extends Conectar{

    public function get_clientes(){
         try {
            $conectar=parent::Conexion();
            parent::set_name();
            $stm=$conectar->prepare("SELECT * FROM constructoras");
            $stm->execute();     
            return $stm->fetchAll(PDO::FETCH_ASSOC);
         } catch ( Exeption $e) {
            return $e->getMessage();
         }
    }
}



?>