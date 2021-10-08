<?php
     session_start();

     $nombre=$_SESSION['usuario'];
     $foto= $_SESSION['foto'];
     $documento=$_SESSION['doc'];

     require_once('modelo/modelomaterialop.php');
 
    $material= new modelomaterialop();

    $datos=$material->Uno($documento);

    $dos=$material->dos($documento);

    $operarios=$material->operarios($documento);

    if(isset($_POST['actualizar'])){

      $criterio=$_POST['criterio'];
      $solo=$material->ac($criterio);




    }

    if(isset($_POST['registrar'])){

        $idm=$_POST['idmaterial'];
        $doce=$_POST['docEntrega'];
        $docr=$_POST['docRecibe'];
        $de=$_POST['descripcion'];
        $can=$_POST['cantidad'];
        $fe=$_POST['fecha'];

        $existe=$material->revision($idm,$doce);

        if($existe){

          echo "<script type='text/javascript'>alert('Error, la entrega ya fue registrada');self.location='materialoperario.php';</script>";


        }else{ 
              $ca=$material->cantidad($idm);

              foreach($ca as $f){

                  $cantidad=  $f[0];
              }

              if($can == $cantidad){ 

                  $entrega=$material->insertarentre($idm,$doce,$docr,$de,$can,$fe);



                  if($entrega >0){

                    echo "<script type='text/javascript'>alert('Registro exitoso');self.location='materialoperario.php';</script>";
                    
                  }else{

                    echo "<script type='text/javascript'>alert('Error de registro');self.location='materialoperario.php';</script>";
                  }

              }else{

                  echo "<script type='text/javascript'>alert('Error, cantidad no valida');self.location='materialoperario.php';</script>";

              }
        }
              
     }

     if(isset($_POST['actua'])){
      $id=$_POST['ID'];
      $idm=$_POST['idmateriall'];
      $doce=$_POST['docEntregaa'];
      $docr=$_POST['docRecibee'];
      $de=$_POST['descripcionn'];
      $can=$_POST['cantidadd'];
      $fe=$_POST['fechaa'];
      $fecha=$_POST['fe'];

      
            $ca=$material->cantidad($idm);

            foreach($ca as $f){

                $cantidad=  $f[0];
            }

            if($can == $cantidad){ 

              if($fecha != null){ 

                      $entrega=$material->actualizar($id,$idm,$doce,$docr,$de,$can,$fecha);



                      if($entrega >0){

                        echo "<script type='text/javascript'>alert('Actualización exitosa');self.location='materialoperario.php';</script>";
                        
                      }else{

                        echo "<script type='text/javascript'>alert('Error de actualización');self.location='materialoperario.php';</script>";
                      }
              }else{

                      $entrega=$material->actualizar($id,$idm,$doce,$docr,$de,$can,$fe);



                      if($entrega >0){

                        echo "<script type='text/javascript'>alert('Actualización exitosa, sin fecha');self.location='materialoperario.php';</script>";
                        
                      }else{

                        echo "<script type='text/javascript'>alert('Error de actualización 2');self.location='materialoperario.php';</script>";
                      }
                    
                
              }

            }else{

                echo "<script type='text/javascript'>alert('Error, cantidad no valida');self.location='materialoperario.php';</script>";

            }
      }
            
   



    require_once('vista/vistamaterialo.php');
?>