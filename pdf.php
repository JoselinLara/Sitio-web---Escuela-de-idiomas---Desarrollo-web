<?php
require('fpdf.php');
function generarCodigo($longitud) {
 $key = '';
 $pattern = '1234567890ABCDEFGHIJKMNOPQRSTUVWXYZ';
 
 $max = strlen($pattern)-1;
 for($i=0;$i < $longitud;$i++) $key .= $pattern{mt_rand(0,$max)};
 return $key;
}
$codigo=generarCodigo(6);
class PDF extends FPDF{
	function Header(){
		$this->Image('logo.png',30,16,150);
		$this->SetFont('Times','B',16);
		$this->Ln(40);
		$this->Cell(80);
		$this->Cell(30,10,"Recibo",0,0,'C');
	}
	function footer(){
		 // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Times','I',8);
    // Page number
    $this->Cell(0,10,$this->PageNo(),0,0,'R');
	}
}
$pdf = new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Output();
?>