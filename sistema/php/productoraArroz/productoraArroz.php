<?php
// ini_set('display_errors', '1');
require_once "../../configuracion/conexion.php";
require_once "clases/c_productoraArroz.php";
$productoraArroz = new ProductoraArroz();

$tipo = $_POST['tipo'];
if(is_null($tipo)){
    $tipo = $_POST['tipo'];
}

// var_dump($tipo);
switch($tipo){
    case "C":
        $return = $productoraArroz->Crear($_POST); 
        break;
    
    case "UC":
        $return = $productoraArroz->ActualizarCuenta($_POST); 
        break;

    case "UIP":    
        $return = $productoraArroz->ActualizarInfoPersonal($_POST); 
        break;
        
    case "UP":    
        $return = $productoraArroz->ActualizarPassword($_POST); 
        break;
    
    case "CE":    
        $return = $productoraArroz->ActualizarEstado($_POST); 
        break;

     case "D":
        $return = $productoraArroz->EliminarCuenta($_POST);   
        break;


}


header("Content-Type:Application/json");
echo die(json_encode($return))
?>