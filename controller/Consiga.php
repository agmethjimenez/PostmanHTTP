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
  case 'Insert':
    $datos = $consignacion->postconsignacion($body['usuario'], $body['fecha_hora'], $body['consignacion']);
    echo '!Insertado';
    break;
  case 'PUT':
    $datos = $consignacion->putconsignacion($body['usuario'], $body['fecha_hora'], $body['consignacion'], $body['ID_consignacion']);
    echo '!Actualizado';
    break;
  case 'DELETE':
    $datos = $consignacion->deleteconsignacion($body['ID_consignacion']);
    echo "Borrado";
    break;
}

?>
