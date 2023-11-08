<?php
header('Content-Type: application/json');
  require_once("../config/conexion.php");
  require_once("../models/consignacion.php");
  $consignacion = new Usuarios();
  
$body = json_decode(file_get_contents("php://input"), true);

  switch ($_GET["op"]) {
    case 'GetAll':
        $datos = $consignacion->getconsignacion();
        echo json_encode($datos);
        break;
    
    case 'GetID':
        $datos = $consignacion->getconsignacion_x_id($body['ID']);
        echo json_encode($datos);
        break;
    case 'Insert':
        $datos = $consignacion->postusuarios($body['ID'],$body['nombre'],$body['apellido'],$body['numero'],$body['direccion']);
        echo '!Insertado';
  }
?>