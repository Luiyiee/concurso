<?php
require('FPDF/fpdf.php');
$apellidos = "Reyes Conforme";
$nombres   = "Elias Alberto";
$direccion = "La joya rubi Elias Alberto Reyes Conforme";
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
$fpdf->Cell(0,10," APELLIDOS: ".$apellidos."");
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
$fpdf->Cell(0,10," DIRECCION: ".$direccion."");
$fpdf->setY(48);
$fpdf->setX(38);
$fpdf->Cell(0,10,"__________________________________________________________________________________________________");

// 
// $fpdf->setY(48);
// $fpdf->setX(20);
// $fpdf->Cell(0,10," CP _____________________________ TEL _______________________________________ RFC ________________________________");
// $fpdf->setY(53);
// $fpdf->setX(20);
// $fpdf->Cell(0,10," MODELO _______________ TIPO ______________ MARCA _________________ COLOR _____________ PLACA _________________");
// $fpdf->setY(58);
// $fpdf->setX(20);
// $fpdf->Cell(0,10," FECHA DE INGRESO _______________ HORA ______________ FECHA DE ENTREGA ___________________ HORA _____________ ");
// $fpdf->setY(63);
// $fpdf->setX(20);
// $fpdf->Cell(0,10," SERIE _____________________________________________________ KM. RECORRIDOS ____________________________________ ");

// $fpdf->setY(80);
// $fpdf->setX(20);
// $fpdf->Cell(0,10," INVENTARIO DEL VEHICULO ");
// $fpdf->setY(85);
// $fpdf->setX(20);
// $fpdf->Cell(0,10," *** EXTERIORES *** ");

// $fpdf->setY(90);
// $fpdf->setX(20);
// $fpdf->Cell(0,10," DATO                 SI / NO ");
// $starty=0;
// $fpdf->setY(95+$starty);
// $fpdf->setX(20);
// $fpdf->Cell(0,10," UNIDAD DE LUCES");
// $fpdf->setY(95+$starty);
// $fpdf->setX(60);
// $fpdf->Cell(0,10,"|__|__| ");
// $starty+=5;
// $fpdf->setY(95+$starty);
// $fpdf->setX(20);
// $fpdf->Cell(0,10," 1/4 DE LUCES");
// $fpdf->setY(95+$starty);
// $fpdf->setX(60);
// $fpdf->Cell(0,10,"|__|__| ");
// $starty+=5;
// $fpdf->setY(95+$starty);
// $fpdf->setX(20);
// $fpdf->Cell(0,10," ANTENA");
// $fpdf->setY(95+$starty);
// $fpdf->setX(60);
// $fpdf->Cell(0,10,"|__|__| ");
// $starty+=5;
// $fpdf->setY(95+$starty);
// $fpdf->setX(20);
// $fpdf->Cell(0,10," ESPEJO LATERAL");
// $fpdf->setY(95+$starty);
// $fpdf->setX(60);
// $fpdf->Cell(0,10,"|__|__| ");
// $starty+=5;
// $fpdf->setY(95+$starty);
// $fpdf->setX(20);
// $fpdf->Cell(0,10," CRISTALES");
// $fpdf->setY(95+$starty);
// $fpdf->setX(60);
// $fpdf->Cell(0,10,"|__|__| ");
// $starty+=5;
// $fpdf->setY(95+$starty);
// $fpdf->setX(20);
// $fpdf->Cell(0,10," BLEMA");
// $fpdf->setY(95+$starty);
// $fpdf->setX(60);
// $fpdf->Cell(0,10,"|__|__| ");
// $starty+=5;
// $fpdf->setY(95+$starty);
// $fpdf->setX(20);
// $fpdf->Cell(0,10," LLANTAS(4)");
// $fpdf->setY(95+$starty);
// $fpdf->setX(60);
// $fpdf->Cell(0,10,"|__|__| ");
// $starty+=5;
// $fpdf->setY(95+$starty);
// $fpdf->setX(20);
// $fpdf->Cell(0,10," TAPON DE RUEDAS(4)");
// $fpdf->setY(95+$starty);
// $fpdf->setX(60);
// $fpdf->Cell(0,10,"|__|__| ");
// $starty+=5;
// $fpdf->setY(95+$starty);
// $fpdf->setX(20);
// $fpdf->Cell(0,10," MULDURAS COMPLETAS");
// $fpdf->setY(95+$starty);
// $fpdf->setX(60);
// $fpdf->Cell(0,10,"|__|__| ");
// $starty+=5;
// $fpdf->setY(95+$starty);
// $fpdf->setX(20);
// $fpdf->Cell(0,10," TAPON DE GASOLINA");
// $fpdf->setY(95+$starty);
// $fpdf->setX(60);
// $fpdf->Cell(0,10,"|__|__| ");
// $starty+=5;
// $fpdf->setY(95+$starty);
// $fpdf->setX(20);
// $fpdf->Cell(0,10," CARROCERIA SIN GOLPES");
// $fpdf->setY(95+$starty);
// $fpdf->setX(60);
// $fpdf->Cell(0,10,"|__|__| ");
// $starty+=5;
// $fpdf->setY(95+$starty);
// $fpdf->setX(20);
// $fpdf->Cell(0,10," BOCINAS DE CLAXON");
// $fpdf->setY(95+$starty);
// $fpdf->setX(60);
// $fpdf->Cell(0,10,"|__|__| ");
// $starty+=5;
// ///////////////////////////////////////////////////////////////
// $fpdf->setY(85);
// $fpdf->setX(150);
// $fpdf->Cell(0,10," *** INTERIORES *** ");
// $fpdf->setY(90);
// $fpdf->setX(150);
// $fpdf->Cell(0,10," DATO                 SI / NO ");
// $starty=0;
// $fpdf->setY(95+$starty);
// $fpdf->setX(150);
// $fpdf->Cell(0,10," INSTR. DE TABLERO");
// $fpdf->setY(95+$starty);
// $fpdf->setX(190);
// $fpdf->Cell(0,10,"|__|__| ");
// $starty+=5;
// $fpdf->setY(95+$starty);
// $fpdf->setX(150);
// $fpdf->Cell(0,10," CALEFACCION");
// $fpdf->setY(95+$starty);
// $fpdf->setX(190);
// $fpdf->Cell(0,10,"|__|__| ");
// $starty+=5;
// $fpdf->setY(95+$starty);
// $fpdf->setX(150);
// $fpdf->Cell(0,10," LIMPIADORES (PLUMAS)");
// $fpdf->setY(95+$starty);
// $fpdf->setX(190);
// $fpdf->Cell(0,10,"|__|__| ");
// $starty+=5;
// $fpdf->setY(95+$starty);
// $fpdf->setX(150);
// $fpdf->Cell(0,10," RADIO/TIPO ___________");
// $fpdf->setY(95+$starty);
// $fpdf->setX(190);
// $fpdf->Cell(0,10,"|__|__| ");
// $starty+=5;
// $fpdf->setY(95+$starty);
// $fpdf->setX(150);
// $fpdf->Cell(0,10," BOCINAS ___________");
// $fpdf->setY(95+$starty);
// $fpdf->setX(190);
// $fpdf->Cell(0,10,"|__|__| ");
// $starty+=5;
// $fpdf->setY(95+$starty);
// $fpdf->setX(150);
// $fpdf->Cell(0,10," ENCENDEDOR");
// $fpdf->setY(95+$starty);
// $fpdf->setX(190);
// $fpdf->Cell(0,10,"|__|__| ");
// $starty+=5;
// $fpdf->setY(95+$starty);
// $fpdf->setX(150);
// $fpdf->Cell(0,10," ESPEJO RETROVISOR");
// $fpdf->setY(95+$starty);
// $fpdf->setX(190);
// $fpdf->Cell(0,10,"|__|__| ");
// $starty+=5;
// $fpdf->setY(95+$starty);
// $fpdf->setX(150);
// $fpdf->Cell(0,10," CENICEROS");
// $fpdf->setY(95+$starty);
// $fpdf->setX(190);
// $fpdf->Cell(0,10,"|__|__| ");
// $starty+=5;
// $fpdf->setY(95+$starty);
// $fpdf->setX(150);
// $fpdf->Cell(0,10," CINTURONES");
// $fpdf->setY(95+$starty);
// $fpdf->setX(190);
// $fpdf->Cell(0,10,"|__|__| ");
// $starty+=5;
// $fpdf->setY(95+$starty);
// $fpdf->setX(150);
// $fpdf->Cell(0,10," BOTONES DE INTERIORES");
// $fpdf->setY(95+$starty);
// $fpdf->setX(190);
// $fpdf->Cell(0,10,"|__|__| ");
// $starty+=5;
// $fpdf->setY(95+$starty);
// $fpdf->setX(150);
// $fpdf->Cell(0,10," MANIJA DE INTERIORES");
// $fpdf->setY(95+$starty);
// $fpdf->setX(190);
// $fpdf->Cell(0,10,"|__|__| ");
// $starty+=5;
// $fpdf->setY(95+$starty);
// $fpdf->setX(150);
// $fpdf->Cell(0,10," TAPETES");
// $fpdf->setY(95+$starty);
// $fpdf->setX(190);
// $fpdf->Cell(0,10,"|__|__| ");
// $starty+=5;
// $fpdf->setY(95+$starty);
// $fpdf->setX(150);
// $fpdf->Cell(0,10," VESTIDURAS");
// $fpdf->setY(95+$starty);
// $fpdf->setX(190);
// $fpdf->Cell(0,10,"|__|__| ");
// $starty+=5;
///////////////////////////////////
$fpdf->setY(165);
$fpdf->setX(20);
$fpdf->Cell(0,10," OBSERVACIONES ________________________________________________________________________________________________ ");
///////////////////////////
$fpdf->setY(180);
$fpdf->setX(90);
$fpdf->Cell(0,10," *** ACCESORIOS *** ");
$fpdf->setY(90);
$fpdf->setX(90);
$fpdf->Cell(0,10," DATO                 SI / NO ");
$starty=0;
$fpdf->setY(190+$starty);
$fpdf->setX(90);
$fpdf->Cell(0,10," GATO");
$fpdf->setY(190+$starty);
$fpdf->setX(130);
$fpdf->Cell(0,10,"|__|__| ");
$starty+=5;
$fpdf->setY(190+$starty);
$fpdf->setX(90);
$fpdf->Cell(0,10," MANERAL DE GATO");
$fpdf->setY(190+$starty);
$fpdf->setX(130);
$fpdf->Cell(0,10,"|__|__| ");
$starty+=5;        
$fpdf->setY(190+$starty);
$fpdf->setX(90);
$fpdf->Cell(0,10," LLAVE DE RUEDAS");
$fpdf->setY(190+$starty);
$fpdf->setX(130);
$fpdf->Cell(0,10,"|__|__| ");
$starty+=5;        
$fpdf->setY(190+$starty);
$fpdf->setX(90);
$fpdf->Cell(0,10," ESTUCHE DE HTAS.");
$fpdf->setY(190+$starty);
$fpdf->setX(130);
$fpdf->Cell(0,10,"|__|__| ");
$starty+=5;        $fpdf->setY(190+$starty);
$fpdf->setX(90);
$fpdf->Cell(0,10," TRGLO. DE SEGURIDAD");
$fpdf->setY(190+$starty);
$fpdf->setX(130);
$fpdf->Cell(0,10,"|__|__| ");
$starty+=5;
$fpdf->setY(190+$starty);
$fpdf->setX(90);
$fpdf->Cell(0,10," LLANTA DE REFACCION");
$fpdf->setY(190+$starty);
$fpdf->setX(130);
$fpdf->Cell(0,10,"|__|__| ");
$starty+=5;
$fpdf->setY(190+$starty);
$fpdf->setX(90);
$fpdf->Cell(0,10," EXTINGUIDOR");
$fpdf->setY(190+$starty);
$fpdf->setX(130);
$fpdf->Cell(0,10,"|__|__| ");
$starty+=5;
////////////////////////////////////////////////////
$fpdf->setY(180);
$fpdf->setX(145);
$fpdf->Cell(0,10," *** COMPONENTES MECANICOS *** ");
$fpdf->setY(140);
$fpdf->setX(150);
$starty=0;
$fpdf->setY(190+$starty);
$fpdf->setX(150);
$fpdf->Cell(0,10," GATO");
$fpdf->setY(190+$starty);
$fpdf->setX(190);
$fpdf->Cell(0,10,"|__|__| ");
$starty+=5;
$fpdf->setY(190+$starty);
$fpdf->setX(150);
$fpdf->Cell(0,10," MANERAL DE GATO");
$fpdf->setY(190+$starty);
$fpdf->setX(190);
$fpdf->Cell(0,10,"|__|__| ");
$starty+=5;        
$fpdf->setY(190+$starty);
$fpdf->setX(150);
$fpdf->Cell(0,10," LLAVE DE RUEDAS");
$fpdf->setY(190+$starty);
$fpdf->setX(190);
$fpdf->Cell(0,10,"|__|__| ");
$starty+=5;        
$fpdf->setY(190+$starty);
$fpdf->setX(150);
$fpdf->Cell(0,10," ESTUCHE DE HTAS.");
$fpdf->setY(190+$starty);
$fpdf->setX(190);
$fpdf->Cell(0,10,"|__|__| ");
$starty+=5;        $fpdf->setY(190+$starty);
$fpdf->setX(150);
$fpdf->Cell(0,10," TRGLO. DE SEGURIDAD");
$fpdf->setY(190+$starty);
$fpdf->setX(190);
$fpdf->Cell(0,10,"|__|__| ");
$starty+=5;
$fpdf->setY(190+$starty);
$fpdf->setX(150);
$fpdf->Cell(0,10," LLANTA DE REFACCION");
$fpdf->setY(190+$starty);
$fpdf->setX(190);
$fpdf->Cell(0,10,"|__|__| ");
$starty+=5;
$fpdf->setY(190+$starty);
$fpdf->setX(150);
$fpdf->Cell(0,10," EXTINGUIDOR");
$fpdf->setY(190+$starty);
$fpdf->setX(190);
$fpdf->Cell(0,10,"|__|__| ");
$starty+=5;
////////////////////////////////////////////////////
// $fpdf->OutPut();
// $fpdf->OutPut('F', 'Información_del_paquete.pdf');
// $fpdf->OutPut('D', 'Información_del_paquete.pdf'); // descarga el pdf automatico
