<?php 


require_once('modelo/modelomicuenta.php');
require_once('fpdf/factura.php');
require_once("modelo/modeloPedido.php");

session_start();
$documento=$_SESSION['doc'];
if(isset($_SESSION["usuario"])){
    $usuario=$_SESSION['usuario'];
}


$micuenta= new Modelomicuenta();
$pedidocli= new ModeloPedido();


$datosmios= $micuenta->Miusuypass($documento);


$datosp=$micuenta->Misdatos($documento);


if(isset($_POST["actualizarusuypass"])){


    $doc=$_POST["do"];
    $username=$_POST["us"];
    $pass=$_POST["cl"];
    $rol=$_POST["ro"];
    $imagen="default.jpg";




    $actua=$micuenta->actualizarUsu($doc,$username,$pass,$rol,$imagen);


    if($actua){

        echo '<script type="text/javascript">alert("Actualizacion exitosa");self.location="micuenta.php";</script>';
    }else{
        
        echo '<script type="text/javascript">alert("Error de Actualizacion")</script>';

    }



}

if(isset($_POST["actualizardp"])){


    $docu=$_POST["documento"];
    $nom=$_POST["nombre"];
    $ape=$_POST["apellido"];
    $corr=$_POST["correo"];
    $celu=$_POST["celular"];
    $s=$_POST["sexo"];
    $dir=$_POST["direccion"];
    $fecha=$_POST["fechanacimiento"];

    $actualizardatos=$micuenta->actualizarmisdatos($docu,$nom,$ape,$corr,$celu,$s,$dir,$fecha);

    if($actualizardatos){

        echo '<script type="text/javascript">alert("Actualizacion exitosa");self.location="micuenta.php";</script>';
    }else{
        
        echo '<script type="text/javascript">alert("Error de Actualizacion")</script>';

    }





}


$mipedido = $pedidocli ->mispedidos($documento);




if (isset($_POST["PEDIPDF"])) {
    $pdf = new Factura();
    
    
    $mipedido = $pedidocli ->mispedidos($documento);
      $pdf->AliasNbPages();
      $pdf->AddPage('P','Letter');
      $pdf->SetFont('Times','',12);
    
      foreach($mipedido as $f ){
        $pdf->Ln();
        $pdf->Cell(20,10,$f[0],1,0,'C',0);
        $pdf->Cell(45,10,utf8_decode($f[15]),1,0,'C',0);
        $pdf->Cell(20,10,$f[7],1,0,'C',0);
        $pdf->Cell(25,10,"$".$f[8],1,0,'C',0);
        $pdf->Cell(30,10,$f[11],1,0,'C',0);
        $pdf->Cell(35,10,$f[3],1,0,'C',0);
        
        
        $pdf->Cell(25,10,"$".$f[9],1,0,'C',0);
        
            
    
    
      }
    
      
      $hoy = date('dmy');
            $nombre =$documento."_".$hoy . "_Mis_Pedidos.pdf" ;
      $pdf->Output('D',$nombre);// GEnera el PDF
    
    
    
    }
















require_once("vista/vistamicuenta.php");




?>