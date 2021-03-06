<?php
require('../../FPDF/fpdf.php');
require_once "../../configuracion/conexion.php";

// $direccion = "La joya rubi Elias Alberto Reyes Conforme";
// $iduser = '1';
$nombres ="";
$usuario ="";
$correo ="";
$iduser = $_GET['iduser'];
$cantidad = $_GET['cantidad'];
$humedad = $_GET['humedad'];
$total = $_GET['total'];

$tb_usuarios = Conexion::buscarVariosRegistro("SELECT 
tu.id_usuario, tu.cod_usuario, tu.cod_rol, tu.usuario, tu.correo, tg.nombres from tb_usuarios tu 
INNER JOIN tb_apiladora_arroz tg on tg.cod_apiladoraArroz = tu.cod_usuario 
where tu.id_usuario = '$iduser' 
");

foreach ($tb_usuarios as $d) {
    // $usuario    = $d['usuario'];
    $nombres        = $d['nombres'];
    $correo      = $d['correo'];
}
// $parrafo = 'Podemos utilizar tanto las funciones Cell y MultiCell, en cualquier parte, solo debemos definir qué tipo de letra utilizaremos antes de invocar cada función. A continuación vamos a crear una cabecera y un pie de página para nuestro documento pdf. Para ello utilizaremos los métodos de FPDF Header() y Footer(), estos métodos son heredados y se ejecutarán automáticamente si están presentes, al crearse la página con AddPage() detecta si los métodos están presentes, sino no los ejecuta. Cada vez que se cree una nueva página los métodos Header y Footer se volverán a ejecutar. Veamos un ejemplo generando un listado sencillo de venta de productos e importes, además veremos como definir una constante para utilizar como símbolo de moneda.';
$fpdf = new FPDF();
$fpdf->AddPage();

$fpdf->SetFont('Arial','B',15);
$fpdf->setX(20);

// $fpdf->Line(20, 6, 195, 6); // 20mm from each edge

//$fpdf->Line(20, 260.5, 200, 260.5); // 20mm from each edge
//$fpdf->Line(20, 261.5, 200, 261.5); // 20mm from each edge
// $fpdf->Line(20, 262.5, 200, 262.5); // 20mm from each edge
$fpdf->SetFont('Arial','B',30);
$fpdf->SetX(50);
$fpdf->Cell(200,30,"DATOS PERSOANLES");
$fpdf->Ln();

// 
$fpdf->setY(31);
$fpdf->setX(20);
$fpdf->SetFont('Arial','B',8);
$fpdf->setY(33);
$fpdf->setX(20);
// $fpdf->Cell(0,10,"AV. CESAR SANDINO NO. 313 (FRENTE AL SEGURO SOCIAL) COL. 1RO. DE MAYO VILLAHERMOSA, TABASCO. TEL: 352 29 10");
$fpdf->setY(40);
$fpdf->setX(20);
$fpdf->SetFont('Arial','B',8);
 $fpdf->Cell(0,35,"",1);
 
//  APELLIDOS
$fpdf->setY(38);
$fpdf->setX(20);
$fpdf->Cell(0,10," APELLIDOS: ".$usuario."");
$fpdf->setY(38);
$fpdf->setX(38);
$fpdf->Cell(0,10,"___________________________________________________________________________________________");

//   NOMBRES
$fpdf->setY(43);
$fpdf->setX(20);
$fpdf->Cell(0,10," NOMBRES: ".$nombres."");
$fpdf->setY(43);
$fpdf->setX(37);
$fpdf->Cell(0,10,"___________________________________________________________________________________________");

// DIRECCION Y TELEFONO 
$fpdf->setY(48);
$fpdf->setX(20);
$fpdf->Cell(0,10," CORREO: ".$correo."");
$fpdf->setY(48);
$fpdf->setX(38);
$fpdf->Cell(0,10,"__________________________________________________________________________________________________");
// DIRECCION Y TELEFONO 
$fpdf->setY(58);
$fpdf->setX(20);
$fpdf->Cell(0,10," CANTIDAD: ".$cantidad."");
$fpdf->setY(48);
$fpdf->setX(38);
$fpdf->Cell(0,10,"__________________________________________________________________________________________________");
// DIRECCION Y TELEFONO 
$fpdf->setY(68);
$fpdf->setX(20);
$fpdf->Cell(0,10," HUMEDAD: ".$humedad."");
$fpdf->setY(48);
$fpdf->setX(38);
$fpdf->Cell(0,10,"__________________________________________________________________________________________________");
// DIRECCION Y TELEFONO 
$fpdf->setY(78);
$fpdf->setX(20);
$fpdf->Cell(0,10," TOTAL: ".$total."");
$fpdf->setY(48);
$fpdf->setX(38);
$fpdf->Cell(0,10,"__________________________________________________________________________________________________");


$fpdf->setY(165);
$fpdf->setX(20);
$fpdf->Cell(0,10," OBSERVACIONES ________________________________________________________________________________________________ ");
///////////////////////////
////////////////////////////////////////////////////
$fpdf->OutPut();
// $fpdf->OutPut('F', 'Información_del_paquete.pdf');
// $fpdf->OutPut('D', 'Información_del_paquete.pdf'); // descarga el pdf automatico
