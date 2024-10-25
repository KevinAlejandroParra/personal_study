<?php
header('Content-type: application/json');
require_once("../config/conexion.php");
require_once("../models/categoria.php");

$categoria = new categoria();

$body = json_decode(file_get_contents("php://input"), true);

switch($_GET["op"]){
 

    case "GetAll";
    $datos=$categoria->get_categoria();
    echo json_encode($datos);
    break;

    case "GetId";
    $datos=$categoria->get_categoria_x_id($body["cat_id"]);
    echo json_encode($datos);
    break;

    case "insert";
    $datos=$categoria->insert_categoria($body["cat_nom"], $body ["cat_obs"]);
    echo json_encode("insert correcto");
    break;

    case "Update";
    $datos=$categoria->update_categoria($body["cat_id"], $body ["cat_nom"], $body["cat_obs"]);
    echo json_encode("Update correcto");
    break;

    case "Delete";
    $datos=$categoria->delete_categoria($body["cat_id"]);
    echo json_encode("categoria en estadoinactivo");
    break;

    case "Eliminar";
    $datos=$categoria->eliminar_categoria($body["cat_id"]);
    echo json_encode("Borrada correctamente");
    break;
}
?>  