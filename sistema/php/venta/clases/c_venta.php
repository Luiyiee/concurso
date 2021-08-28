<?php
// ini_set('display_errors', '1');
class Venta
{
    function Crear($datos)
    {
            $cod_apiladora  = $_POST['iduser'];
            $cod_productora = $_POST['cod_productora'];
            $total          = $_POST['total'];
            $tb_ventas = Conexion::UpdateRegistro("INSERT INTO tb_ventas (cod_apiladora,cod_productora,total) VALUES      
            ('$cod_apiladora','$cod_productora','$total') ");
  
        if ($tb_ventas) {
            $respuesta['status'] = "correcto";
            $respuesta['mensaje'] = "Venta creada";
        } else {
            $respuesta['status'] = "error";
            $respuesta['mensaje'] = "Error al guardar";
        }
        return $respuesta;
    }
}
