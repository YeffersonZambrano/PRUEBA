<?php


class pdfController extends controller
{
    private $_pdf;
    
    public function construct() {
        parent::__construct();
        
    $this->getlibrary('fpdf');
    $this->_pdf = new FPDF();
    
    
    
        
    }
    
public function index() {}


    
    
public function pdf1($nombre,$apellido) {
    
      
             $pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10, utf8_decode($nombre.''. $apellido));
$pdf->Output();
   
    
}
}
    
        




?>
