<?php
// ini_set('display_errors', '1');
require_once "../../configuracion/conexion.php";
require_once "clases/c_apiladoraArroz.php";
$apiladoraArroz = new apiladoraArroz();

$tipo = $_POST['tipo'];
if(is_null($tipo)){
    $tipo = $_POST['tipo'];
}

// var_dump($tipo);
switch($tipo){
    case "C":
        $return = $apiladoraArroz->Crear($_POST); 
        break;
    
    case "UC":
        $return = $apiladoraArroz->ActualizarCuenta($_POST); 
        break;

    case "UIP":    
        $return = $apiladoraArroz->ActualizarInfoPersonal($_POST); 
        break;
        
    case "UP":    
        $return = $apiladoraArroz->ActualizarPassword($_POST); 
        break;
    
    case "CE":    
        $return = $apiladoraArroz->ActualizarEstado($_POST); 
        break;

     case "D":
        $return = $apiladoraArroz->EliminarCuenta($_POST);   
        break;


}


header("Content-Type:Application/json");
echo die(json_encode($return))
?>