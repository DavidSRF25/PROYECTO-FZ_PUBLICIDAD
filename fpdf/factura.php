<?php 

require_once('fpdf.php');

class Factura extends FPDF{

    function header(){

        //logo 

        $this->Image('images/logo.png',30,10,20);// andcho alto tamaño

        //Tipo Letra 
        $this->SetFont('Arial','B','18');// Tipo letra: arial negrita tamaño 

        //mover a la derecha

        $this->cell(55);

        //titulo
        
        $this->Cell(70,20,'Mis Pedidos',0,0,'C');

        $this->ln(40);

        $this->SetFont('Arial','B','11');// Tipo letra: arial negrita tamaño 


        // TABLA


        $this->SetFillColor(100,149,237); // Color Celda RGB rgb(50,54,57)

        $this->Cell(20,10,'IDPEDIDO',1,0,'C',true);
        $this->Cell(45,10,'PRODUCTO',1,0,'C',true);
        $this->Cell(20,10,'CANTIDAD',1,0,'C',true);
        $this->Cell(25,10,'PRECIO',1,0,'C',true);
        $this->Cell(30,10,'COLOR',1,0,'C',true);
        $this->Cell(35,10,'FECHA-PEDIDO',1,0,'C',true);
        
        $this->Cell(25,10,'SUBTOTAL',1,0,'C',true);
       
    }
        function Footer(){
            //Posicion a 1.5 cm del final
            $this->SetY(-15);
            $this->SetFont('Arial','I',10);
            $this->Cell(0,10,utf8_decode('Pagina').' '.$this->PageNo(),0,1,'R'); // Nmero de la pagina 
    
    
    
        }
       




}










?>