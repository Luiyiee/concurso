<?php
// ini_set('display_errors', '1');
require_once "../../configuracion/conexion.php";
require_once "clases/c_venta.php";
$venta = new Venta();

$tipo = $_POST['tipo'];
if(is_null($tipo)){
    $tipo = $_POST['tipo'];
}

// var_dump($tipo);
switch($tipo){
    case "C":
        $return = $venta->Crear($_POST); 
        break;

}


header("Content-Type:Application/json");
echo die(json_encode($return))
?>