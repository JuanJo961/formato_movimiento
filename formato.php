<?php

require('fpdf.php');

$pdf = new FPDF();
$pdf->Addpage('P','Letter');
$pdf->Image('img/0.jpg',20,18,35);
        //imagen SSP
$pdf->Image('img/logo.png',28,30,15);

$pdf->SetFont('Times','B',17);
$pdf->SetXY(10,0);
$pdf->Cell(0,30,utf8_decode('HOSPITAL REGIONAL DE ALTA ESPECIALIDAD DE LA MUJER'),0,0,'C');

$pdf->SetFont('Times','B',14);
$pdf->SetXY(15,10);
$pdf->Cell(0,30,utf8_decode('RECURSOS HUMANOS'),0,0,'C');

$pdf->SetFont('Times','B',16);
$pdf->SetXY(15,20);
$pdf->Cell(0,30,utf8_decode('FORMATO DE MOVIMIENTOS'),0,0,'C');

$pdf->SetFont('Times','B',12);
$pdf->SetXY(150,10);
$pdf->Cell(0,30,utf8_decode('N°.CREDENCIAL'),0,0,'C');

$pdf->Rect(158,20,41,20,'D');

$pdf->SetFont('Times','B',16);
$pdf->SetXY(150,18);
$pdf->Cell(0,30,utf8_decode('1600'),0,0,'C');

$pdf->SetFont('Times','B',12);
$pdf->SetXY(41,57);
$pdf->Cell(0,0,utf8_decode('Jose Carlos de Jesus Montero Rodriguez'));
$pdf->Ln();
$pdf->SetXY(20,55);
$pdf->Cell(130,5,utf8_decode('NOMBRE:____________________________________'));
$pdf->Ln();
$pdf->SetFont('Times','B',12);
$pdf->SetXY(147,57);
$pdf->Cell(0,0,utf8_decode('470'));
$pdf->Ln();
$pdf->SetFont('Times','B',12);
$pdf->SetXY(120,55);
$pdf->Cell(130,5,utf8_decode('Folio Interno: ________'));
$pdf->Ln();

$pdf->SetFont('Helvetica','',12);
$pdf->SetXY(98,50);
$pdf->Cell(0,0,utf8_decode('VILLAHERMOSA,TAB.,A 13 de noviembre de 2020'));
$pdf->Ln();

$pdf->SetFont('Times','B',12);
$pdf->SetXY(20,65);
$pdf->Cell(130,5,utf8_decode('DEPARTAMENTO:____________________________________'));
$pdf->Ln();
$pdf->SetXY(58,65);
$pdf->Cell(130,5,utf8_decode('Unidad de Tecnologias de la Informacion'));
$pdf->Ln();
$pdf->SetFont('Times','B',12);
$pdf->SetXY(163,67);
$pdf->Cell(0,0,utf8_decode('Apoyo Administrativo A1'));
$pdf->Ln();
$pdf->SetFont('Times','B',12);
$pdf->SetXY(135,65);
$pdf->Cell(130,5,utf8_decode('CATEGORIA:_______________________'));
$pdf->Ln();
$pdf->SetFont('Times','B',12);
$pdf->SetXY(38,82);
$pdf->Cell(0,0,utf8_decode('Matutino'));
$pdf->Ln();
$pdf->SetFont('Times','B',12);
$pdf->SetXY(20,80);
$pdf->Cell(130,5,utf8_decode('TURNO:___________'));
$pdf->Ln();
$pdf->SetFont('Times','B',12);
$pdf->SetXY(120,80);
$pdf->Cell(130,5,utf8_decode('GUARDIA:'));
$pdf->Ln();

$pdf->SetFont('Helvetica','',8);
$pdf->SetXY(145,74);
$pdf->Cell(0,0,utf8_decode('LU-VI'));
$pdf->SetFont('Helvetica','',8);
$pdf->SetXY(145,78);
$pdf->Cell(0,0,utf8_decode('SA-DO-FES'));
$pdf->SetFont('Helvetica','',8);
$pdf->SetXY(145,82);
$pdf->Cell(0,0,utf8_decode('LU-MI-VI'));
$pdf->SetFont('Helvetica','',8);
$pdf->SetXY(145,86);
$pdf->Cell(0,0,utf8_decode('MA-JU-DO'));

$pdf->Rect(165,72,3,3,'D');
$pdf->Rect(165,76,3,3,'D');
$pdf->Rect(165,80,3,3,'D');
$pdf->Rect(165,84,3,3,'D');

$pdf->SetFont('Helvetica','',8);
$pdf->SetXY(170,74);
$pdf->Cell(0,0,utf8_decode('MI-VI-DO'));
$pdf->SetFont('Helvetica','',8);
$pdf->SetXY(170,78);
$pdf->Cell(0,0,utf8_decode('MI-SA-DO'));
$pdf->SetFont('Helvetica','',8);
$pdf->SetXY(170,82);
$pdf->Cell(0,0,utf8_decode('MA-JU-SA'));

$pdf->Rect(187,72,3,3,'D');
$pdf->Rect(187,76,3,3,'D');
$pdf->Rect(187,80,3,3,'D');

$pdf->SetFont('Helvetica','B',9);
$pdf->SetXY(20,90);
$pdf->Cell(140,5,utf8_decode('FEDERAL(  ) ESTATAL(  ) REGULARIZADO(  ) LISTA DE RAYA( ) SEGURO POPULAR(  ) OTROS(x ) FORMALIZADO(  )'));

$pdf->SetFont('Times','BI',16);
$pdf->SetXY(78,95);
$pdf->Cell(0,30,utf8_decode('TIPO DE MOVIMIENTO'));
$pdf->Ln();

$pdf->SetFont('Times','BI',12);
$pdf->SetXY(30,116);
$pdf->Cell(130,5,utf8_decode('PERMISO ECONÓMICO(  )'));
$pdf->Ln();

$pdf->SetFont('Times','BI',12);
$pdf->SetXY(30,122);
$pdf->Cell(130,5,utf8_decode('PASE DE SALIDA(  )            HORA DE SALIDA:                      HORA DE REGRESO:      '));
$pdf->Ln();

$pdf->SetFont('Times','BI',12);
$pdf->SetXY(30,128);
$pdf->Cell(130,5,utf8_decode('ONOMÁSTICO(  )'));
$pdf->Ln();

$pdf->SetFont('Times','BI',12);
$pdf->SetXY(30,134);
$pdf->Cell(130,5,utf8_decode('DÍAS 31(  )'));
$pdf->Ln();

$pdf->SetFont('Times','BI',12);
$pdf->SetXY(30,140);
$pdf->Cell(130,5,utf8_decode('ESTIMULO(  )'));
$pdf->Ln();


$pdf->SetFont('Times','BI',12);
$pdf->SetXY(30,146);
$pdf->Cell(130,5,utf8_decode('VACACIONES RIESGO:     ALTO(  )     MEDIANO(  )     BAJO(  )'));
$pdf->Ln();

$pdf->SetFont('Times','BI',12);
$pdf->SetXY(30,152);
$pdf->Cell(130,5,utf8_decode('VACACIONES:     PRIMER PERIODO(  )     SEGUNDO PERIODO(  )'));
$pdf->Ln();

$pdf->SetFont('Times','BI',12);
$pdf->SetXY(30,158);
$pdf->Cell(130,5,utf8_decode('CAMBIO DE GUARDIA(  )            CUBRE GUARDIA:'));
$pdf->Ln();

$pdf->SetFont('Times','BI',12);
$pdf->SetXY(30,164);
$pdf->Cell(130,5,utf8_decode('FECHA DE DEVOLUCION DE GUARDIA:'));
$pdf->Ln();

$pdf->SetFont('Times','BI',12);
$pdf->SetXY(30,170);
$pdf->Cell(130,5,utf8_decode('DEVOLUCION DE GUARDIA(  )                        MOTIVO:'));
$pdf->Ln();

$pdf->SetFont('Times','BI',12);
$pdf->SetXY(30,176);
$pdf->Cell(130,5,utf8_decode('AUTORIZACION DE ENTRADA(  )                   MOTIVO:'));
$pdf->Ln();

$pdf->SetFont('Times','BI',12);
$pdf->SetXY(30,182);
$pdf->Cell(130,5,utf8_decode('AUTORIZACION DE SALIDA(  )                       MOTIVO:'));
$pdf->Ln();

$pdf->SetFont('Times','BI',12);
$pdf->SetXY(30,188);
$pdf->Cell(130,5,utf8_decode('COMISION(  )    LUGAR:                                    MOTIVO:'));
$pdf->Ln();

$pdf->SetFont('Times','BI',12);
$pdf->SetXY(30,196);
$pdf->Cell(130,5,utf8_decode('FECHA DE INICIO__________________                FECHA DE TERMINO______________'));
$pdf->Ln();

$pdf->Rect(20,100,180,110,'D');

$pdf->SetFont('Times','B',12);
$pdf->SetXY(40,210);
$pdf->Cell(130,5,utf8_decode('SOLICITANTE'));
$pdf->Ln();

$pdf->SetFont('Times','B',12);
$pdf->SetXY(25,218);
$pdf->Cell(130,5,utf8_decode('______________________________'));
$pdf->Ln();

$pdf->SetFont('Times','B',12);
$pdf->SetXY(36,223);
$pdf->Cell(130,5,utf8_decode('NOMBRE Y FIRMA'));
$pdf->Ln();

$pdf->SetFont('Times','B',12);
$pdf->SetXY(145,210);
$pdf->Cell(130,5,utf8_decode('JEFE DE DEPTO'));
$pdf->Ln();

$pdf->SetFont('Times','B',12);
$pdf->SetXY(130,218);
$pdf->Cell(130,5,utf8_decode('_______________________________'));
$pdf->Ln();

$pdf->SetFont('Times','B',10);
$pdf->SetXY(140,223);
$pdf->Cell(130,5,utf8_decode('TITULAR DE LA UNIDAD DE'));
$pdf->Ln();

$pdf->SetFont('Times','B',10);
$pdf->SetXY(130,227);
$pdf->Cell(130,5,utf8_decode('TECNOLOGIAS DE LA INFORMACION'));
$pdf->Ln();

$pdf->SetFont('Times','B',12);
$pdf->SetXY(75,232);
$pdf->Cell(130,5,utf8_decode('_______________________________'));
$pdf->Ln();

$pdf->SetFont('Times','',12);
$pdf->SetXY(77,237);
$pdf->Cell(130,5,utf8_decode('JEFE DE RECURSOS HUMANOS'));
$pdf->Ln();

$pdf->SetFont('Times','B',12);
$pdf->SetXY(35,246);
$pdf->Cell(130,5,utf8_decode('NO SE ACEPTARÁ ESTE FORMATO CON BORRONES O TACHADURAS'));
$pdf->Ln();

$pdf->SetFont('Times','',12);
$pdf->SetXY(30,250);
$pdf->Cell(130,5,utf8_decode('EL LLENADO DEL FORMATO ES RESPONSABILIDAD DE QUIEN LO SOLICITA'));
$pdf->Ln();

$pdf->Rect(20,245,180,10,'D');

$pdf->Output();