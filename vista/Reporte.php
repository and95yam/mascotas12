<?php
require('../fpdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('../fpdf/TYRA.JPG',10,8,33);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(80);
    // Título
    $this->Cell(100,10,'Reporte de Mascotas',1,0,'C');
    // Salto de línea
    $this->Ln(40);
    $this->Cell(10,10,'ID',1,0,'C',0);
    $this->Cell(40,10,'Nombres',1,0,'C',0);
    $this->Cell(40,10,'Apellidos',1,0,'C',0);
    $this->Cell(50,10,'Correo',1,0,'C',0);
    $this->Cell(55,10,'Direccion',1,0,'C',0);
    $this->Ln(10);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

require'../modelo/Rconexion.php';
$consulta="SELECT * FROM paciente ";
$resultado=mysqli_query($enlace,$consulta);
//$resultado=$enlace->query($consulta);

// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);

while($mostrar=$resultado->fetch_assoc()){

    $pdf->Cell(10,10,$mostrar['id_mascota'],1,0,'c',0);
    $pdf->Cell(40,10,$mostrar['id_cliente'],1,0,'c',0);
    $pdf->Cell(40,10,$mostrar['alias'],1,0,'c',0);
    $pdf->Cell(50,10,$mostrar['Especie'],1,0,'c',0);
    $pdf->Cell(55,10,$mostrar['Raza'],1,1,'c',0);
   

}



$pdf->Output();
?>
