<?php
ini_set("display_errors", 1);

ini_set("display_startup_errors", 1);

error_reporting(E_ALL);
header('Content-type:application/json');

require_once("conectar.php");
require_once("models.php");

$alquilar = new Alquiler();
$body=json_decode(file_get_contents("php://input"),true);

switch($_GET['op']){

    case "GetAll":
        $datos=$alquilar->get_clientes();
        echo json_encode($datos);
        break;
}







?>