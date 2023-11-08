<?php
header('Content-Type: application/json');
  require_once("../config/conexion.php");
  require_once("../models/consignacion.php");
  $consignacion = new Consignacion();
  $body = json_decode(file_get_contents("php://input"), true);
  switch ($_GET["op"]) {
    case 'GetAll':
        $datos = $consignacion->getconsignacion();
        echo json_encode($datos);
        break;
    case 'GetID':
        $datos = $consignacion->getconsignacion_x_id($body['ID_consignacion']);
        echo json_encode($datos);
        break;
    
  }
?>