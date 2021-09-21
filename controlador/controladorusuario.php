<?php
   
   require_once('modelo/modelousuario.php');

   session_start();//Iniciamos session
  $usuarion= $_SESSION['usuario'];
   $ape=$_SESSION['apellido'];
   $oficio= $_SESSION['Oficio'];
   $fotito=$_SESSION['foto'];
   $doc=$_SESSION['doc'];
   $fecha=$_SESSION['fecha'];

    $usuario= new Modelousuario();

    $usu=$usuario->ConsultaTodos();
    $misdatos=$usuario->Uno($doc);

 
  if(isset($_POST['enviar'])){
    $docu=$_POST['documento'];
    $usu=$_POST['usuario'];
    $pass=$_POST['password'];
    $rol=$_POST['rol'];
    $foto=$_FILES['imagen']['name'];
    $tipo=$_FILES['imagen']['type'];
    $tam=$_FILES['imagen']['size'];
  
   $existe= $usuario->Uno($docu);
  
   if($existe){ 

       echo "<script type='text/javascript'>alert('Error, el usuario ya existe');</script>";

   }else{

      if($foto != null ){

         if($tipo == "image/gif" || $tipo=="image/png" || $tipo=="image/jpeg" ){

            $hoy=date('dmy');

            $foto=$hoy."_".$docu."_".$foto;

            $carpeta=$_SERVER['DOCUMENT_ROOT'].'/FZ_PUBLICIDAD/img/';
           
            $resultado=$usuario->insertar($docu,$usu,$pass,$rol,$foto);

            if($resultado > 0){

               move_uploaded_file($_FILES['imagen']['tmp_name'],$carpeta.$foto);

               echo "<script type='text/javascript'>alert('Registro exitoso');</script>";

            }else{

               echo "<script type='text/javascript'>alert('Error de registro3');</script>";
            }
         }else{

               echo "<script type='text/javascript'>alert('Formato no permitido');</script>";

               $resultado=$usuario->insertar($docu,$usu,$pass,$rol,"default.jpg");

               if($resultado>0){

                  echo "<script type='text/javascript'>alert('Registrado sin foto');</script>";

               }else{

                  echo "<script type='text/javascript'>alert('Error de registro2');</script>";

               }

         }
            
     }else{

      $resultado=$usuario->insertar($docu,$usu,$pass,$rol,"default.jpg");

      if($resultado>0){

         echo "<script type='text/javascript'>alert('Registrado sin foto');</script>";

      }else{

         echo "<script type='text/javascript'>alert('Error de registro 1');</script>";
      }
     }
     
   }
   $usu=$usuario->ConsultaTodos();  
 }

   


   
   require_once('vista/usuarios.php');
?>