<?php

session_start();

$nombre=$_SESSION['usuario'];
$foto= $_SESSION['foto'];
$doc=$_SESSION['doc'];
 require_once('fpdf/reporteBodega.php');
 require_once('modelo/modeloBodega.php');


        $bodega= new Modelobodega();

        $datos=$bodega->ConsultaTodos();
        $entre=$bodega->entregados();
        $personal=$bodega->personal($doc);
        $combo=$bodega->cargaSelect($doc);
        $com=$bodega->pro();
        $pedido=$bodega->idpedidos();
        $proveedor=$bodega->proveedores();

        if(isset($_POST['actualizar'])){ 
          $criterio=$_POST['criterio'];
          $uno=$bodega->con($criterio);
        }

        if(isset($_POST['actualiza'])){ 
          $criterio=$_POST['criterioo'];
          $dos=$bodega->con_dos($criterio);
        }

        if(isset($_POST['actualizarr'])){
          $idd=$_POST['idd'];
          $provee=$_POST['proveedorr'];
          $ti=$_POST['tipoo'];
          $can=$_POST['cantidadd'];
          $descri=$_POST['descripcionn'];
          $val=$_POST['valorr'];

        
       
            $materia=$bodega->actualizar($idd,$provee,$ti,$can,$descri,$val);
         
 
            if($materia>0){

               echo "<script type='text/javascript'>alert('Acualización exitosa');self.location='bodega.php';</script>";
            }else{

              echo "<script type='text/javascript'>alert('Error de actualización');self.location='bodega.php';</script>";
           }
        }



      


        if(isset($_POST['enviar'])){
            $idd=$_POST['id'];
            $provee=$_POST['proveedor'];
            $ti=$_POST['tipo'];
            $can=$_POST['cantidad'];
            $descri=$_POST['descripcion'];
            $val=$_POST['valor'];

            
            $existe=$bodega->Uno($idd);

            if($existe){ 

              echo "<script type='text/javascript'>alert('Error, registro existente');self.location='bodega.php';</script>";
          
           
            }else{

              $materia=$bodega->insertarmateria($idd,$provee,$ti,$can,$descri,$val);
           
   
              if($materia>0){

                 echo "<script type='text/javascript'>alert('Registro exitoso');self.location='bodega.php';</script>";
              }else{

                echo "<script type='text/javascript'>alert('Error de registro');self.location='bodega.php';</script>";
             }
          }



        }
        
        if(isset($_POST['actua'])){

          $id=$_POST['id_m'];
          $idm=$_POST['id_material'];
          $doce=$_POST['documento_entrega'];
          $docr=$_POST['documento_recibe'];
          $idpedido=$_POST['idpedidoo'];
          $idproducto=$_POST['idproductoo'];
          $de=$_POST['descripcionn'];
          $can=$_POST['canti'];
          $fecha=$_POST['fecha'];
          $fe=$_POST['fechaa'];

          $result=$bodega->cantidamateria($idm);

          foreach($result as $f){

              $cantidad= $f[3];
          }

          if($can > 0 && $fe > 0){ 

              $operacion=$bodega->entre($id);

              foreach($operacion as $f){

                $cnt= $f[5];
              }
              
              if($can > $cnt){ 

                    $resta= $can - $cnt;

                    if($resta <= $cantidad){  

                        $entrega=$bodega->actualizar_entrega($id,$idm,$doce,$docr,$de,$can,$fe,$idpedido,$idproducto);

                        $descuento=$bodega->descuento($resta,$idm);

                        if($entrega > 0){

                          echo "<script type='text/javascript'>alert('Actualización exitosa');self.location='bodega.php';</script>";
                          
                        }else{

                          echo "<script type='text/javascript'>alert('Error de actualización');self.location='bodega.php';</script>";
                        }

                    }else{

                      echo "<script type='text/javascript'>alert('Error, la cantidad supera a lo que tenemos en bodega');self.location='bodega.php';</script>";
                    }

              }else if($can < $cnt){

                        $resta=$cnt - $can;
                        
                        $reenvio=$bodega->recuento($idm,$resta);

                        $entrega=$bodega->actualizar_entrega($id,$idm,$doce,$docr,$de,$can,$fe,$idpedido,$idproducto);

                        $descuento=$bodega->descuento($resta,$idm);

                        if($entrega > 0){

                          echo "<script type='text/javascript'>alert('Actualización exitosa');self.location='bodega.php';</script>";
                          
                        }else{

                          echo "<script type='text/javascript'>alert('Error de actualización');self.location='bodega.php';</script>";
                        }

              }else{

                  echo "<script type='text/javascript'>alert('Error, la cantidad supera a lo que tenemos en bodega');self.location='bodega.php';</script>";
                }

              

          }else if($can > 0 ){ 
         
                  $operacion=$bodega->entre($id);

                    foreach($operacion as $f){

                      $cnt= $f[5];
                    }
                    
                    if($can > $cnt){ 

                          $resta= $can - $cnt;

                          if($resta <= $cantidad){  

                              $entrega=$bodega->actualizar_entrega($id,$idm,$doce,$docr,$de,$can,$fecha,$idpedido,$idproducto);

                              $descuento=$bodega->descuento($resta,$idm);

                              if($entrega > 0){

                                echo "<script type='text/javascript'>alert('Actualización exitosa');self.location='bodega.php';</script>";
                                
                              }else{

                                echo "<script type='text/javascript'>alert('Error de actualización');self.location='bodega.php';</script>";
                              }

                          }else{

                            echo "<script type='text/javascript'>alert('Error, la cantidad supera a lo que tenemos en bodega 2');self.location='bodega.php';</script>";
                          }

                    }else if($can <= $cnt && $can > 0){

                              $resta=$cnt - $can;
                              
                              $reenvio=$bodega->recuento($idm,$resta);


                              $entrega=$bodega->actualizar_entrega($id,$idm,$doce,$docr,$de,$can,$fecha,$idpedido,$idproducto);

                              if($entrega > 0){

                                echo "<script type='text/javascript'>alert('Actualización exitosa');self.location='bodega.php';</script>";
                                
                              }else{

                                echo "<script type='text/javascript'>alert('Error de actualización');self.location='bodega.php';</script>";
                              }

                    }else{

                        echo "<script type='text/javascript'>alert('Error, la cantidad supera a lo que tenemos en bodega 3');self.location='bodega.php';</script>";
                    }

          }else{

            echo "<script type='text/javascript'>alert('Error, la cantidad ingresada no es valida');self.location='bodega.php';</script>";

          }
          
          
          
          
            
        }


        if(isset($_POST['enviarnu'])){

          $idm=$_POST['idmaterial'];
          $doce=$_POST['docen'];
          $docr=$_POST['docre'];
          $idproducto=$_POST['idproducto'];
          $idpedido=$_POST['idpedido'];
          $de=$_POST['descripcion'];
          $can=$_POST['cantidad'];
          $fe=$_POST['fechaen'];

          $result=$bodega->cantidamateria($idm);

          foreach($result as $f){

              $cantidad= $f[3];
          }

          if($can > 0 &&  $can <= $cantidad){ 
         

              $entrega=$bodega->insertarentre($idm,$doce,$docr,$de,$can,$fe,$idpedido,$idproducto);

              

              if($entrega >0){

                $descuento=$bodega->descuento($can,$idm);

                echo "<script type='text/javascript'>alert('Registro exitoso');self.location='bodega.php';</script>";
                
              }else{

                echo "<script type='text/javascript'>alert('Error de registro');self.location='bodega.php';</script>";
              }

          }else{

            echo "<script type='text/javascript'>alert('Error, la cantidad ingresada no es valida');self.location='bodega.php';</script>";

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
