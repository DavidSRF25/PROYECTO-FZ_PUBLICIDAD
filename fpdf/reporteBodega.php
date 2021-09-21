<?php 

require_once('fpdf.php');

class PDF extends FPDF{

    function header(){

        //logo 

        $this->Image('images/bodegamaterial.jpg',30,10,20);// andcho alto tamaño

        //Tipo Letra 
        $this->SetFont('Arial','B','18');// Tipo letra: arial negrita tamaño 

        //mover a la derecha

        $this->cell(55);

        //titulo
        
        $this->Cell(70,20,'REPORTE   MATERIA PRIMA',0,0,'C');

        $this->ln(40);

        $this->SetFont('Arial','B','11');// Tipo letra: arial negrita tamaño 


        // TABLA


        $this->SetFillColor(100,149,237); // Color Celda RGB rgb(50,54,57)

        $this->Cell(20,10,'ID',1,0,'C',true);
        $this->Cell(35,10,'IDPROVEEDOR',1,0,'C',true);
        $this->Cell(40,10,'TIPO',1,0,'C',true);
        $this->Cell(22,10,'CANTIDAD',1,0,'C',true);
        $this->Cell(50,10,'DESCRIPCION',1,0,'C',true);
        $this->Cell(35,10,'VALOR UNITARIO',1,0,'C',true);
       


    }


    // PIE DE PAGINA

    function Footer(){
        //Posicion a 1.5 cm del final
        $this->SetY(-15);
        $this->SetFont('Arial','I',10);
        $this->Cell(0,10,utf8_decode('Pagina').' '.$this->PageNo(),0,1,'R'); // Nmero de la pagina 



    }




}


?>