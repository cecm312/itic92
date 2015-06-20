<?php


$name = $_GET["name"];
$email = $_GET["email"];
$sex = $_GET["sex"];
$telephone = $_GET["telephone"];
$cellular = $_GET["cellular"];
$career = $_GET["career"];
$observations = $_GET["observations"];
$aspirantPicture = $_GET["aspirantPicture"];

require('assets/fpdf/fpdf.php');
$pdf= new FPDF('P','cm','A4');
$pdf->AddPage();
$pdf->SetFont('Arial','B','16');
$pdf->Cell(0,1,'Registro de Aspirantes',0,1,'C');
$pdf->SetFont('Arial','B','12');
$pdf->Image($aspirantPicture,1,2,5);
$pdf->setXY(6,2);
$pdf->Cell(0,1,'Nombre:'.$name,0,1,'L');
$pdf->setX(6);
$pdf->Cell(0,1,'Email:'.$email,0,1,'L');
$pdf->setX(6);
$pdf->Cell(0,1,'Sexo:'.$sex,0,1,'L');
$pdf->setX(6);
$pdf->Cell(0,1,'Telefono:'.$telephone,0,1,'L');
$pdf->setX(6);
$pdf->Cell(0,1,'Celular:'.$cellular,0,1,'L');
$pdf->setX(6);
$pdf->Cell(0,1,'Carrera:'.$career,0,1,'L');
$pdf->setX(6);
$pdf->MultiCell(0,1,'Observaciones:'.$observations,0,'L');
$pdf->Output();
?>