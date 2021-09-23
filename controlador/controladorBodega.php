<?php

session_start();//Iniciamos session
  $usuarion= $_SESSION['usuario'];
   $ape=$_SESSION['apellido'];
   $oficio= $_SESSION['Oficio'];
   $fotito=$_SESSION['foto'];
   $doc=$_SESSION['doc'];
   $fecha=$_SESSION['fecha'];

 require_once('modelo/modeloBodega.php');
 require_once('fpdf/reporteBodega.php');


        $bodega= new Modelobodega();

        $datos=$bodega->ConsultaTodos();
        $entre=$bodega->entregados();

        $combo=$bodega->cargaSelect();
        $com=$bodega->pro();



        if(isset($_POST['enviar'])){
            $idd=$_POST['id'];
            $provee=$_POST['proveedor'];
            $ti=$_POST['tipo'];
            $can=$_POST['cantidad'];
            $descri=$_POST['descripcion'];
            $val=$_POST['valor'];

            
            $existe=$bodega->Uno($idd);

            if($existe){ 

              echo "<script type='text/javascript'>alert('Error, registro existente');</script>";
          
           
            }else{

              $materia=$bodega->insertarmateria($idd,$provee,$ti,$can,$descri,$val);
           
   
              if($materia>0){

                 echo "<script type='text/javascript'>alert('Registro exitoso');</script>";
              }else{

                echo "<script type='text/javascript'>alert('Error de registro');</script>";
             }
          }



        }


        if(isset($_POST['enviarnu'])){

          $idm=$_POST['idmaterial'];
          $doce=$_POST['docen'];
          $docr=$_POST['docre'];
          $de=$_POST['descripcion'];
          $can=$_POST['cantidad'];
          $fe=$_POST['fechaen'];


         

              $entrega=$bodega->insertarentre($idm,$doce,$docr,$de,$can,$fe);

              $descuento=$bodega->descuento($can,$idm);

              if($entrega >0){

                echo "<script type='text/javascript'>alert('Registro exitoso');</script>";
                
              }else{

                echo "<script type='text/javascript'>alert('Error de registro');</script>";
              }


            
          }


          if (isset($_POST['pdf'])) {
            $pdf = new PDF();
            
            
              $datos = $bodega->ConsultaTodosPDF();
              $pdf->AliasNbPages();
              $pdf->AddPage('P','Letter');
              $pdf->SetFont('Times','',12);
            
              foreach($datos as $f ){
                
                    $pdf->Ln();
                    $pdf->Cell(20,10,$f[0],1,0,'C',0);
                    $pdf->Cell(35,10,utf8_decode($f[1]),1,0,'C',0);
                    $pdf->Cell(40,10,utf8_decode($f[2]),1,0,'C',0);
                    $pdf->Cell(22,10,$f[3],1,0,'C',0);
                    $pdf->Cell(50,10,$f[4],1,0,'C',0);
                    $pdf->Cell(35,10,$f[5],1,0,'C',0);
                    
            
            
              }
            
              
              $hoy = date('dmy');
                    $nombre = $hoy . "_Listado_MateriaPrima.pdf" ;
              $pdf->Output('I',$nombre);// GEnera el PDF
            
            
            
            }
  require_once('vista/vistabodega.php');


?>
