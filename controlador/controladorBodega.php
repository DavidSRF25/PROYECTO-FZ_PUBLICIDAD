<?php
 require_once('modelo/modeloBodega.php');
 session_start();

        $bodega= new Modelobodega();

        $datos=$bodega->ConsultaTodos();
        $entre=$bodega->entregados();

        $combo=$bodega->cargaSelect();
        $com=$bodega->pro();
        if($_SESSION){



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
        }else{

          echo '<script type="text/javascript">alert("Usuario no autenticado....");self.location="login.php";</script>';


        }
  require_once('vista/vistabodega.php');


?>
