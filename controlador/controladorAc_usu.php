<?php
 require_once("modelo/modeloAc_usu.php");
    session_start();

    $nombre=$_SESSION['usuario'];
    $foto= $_SESSION['foto'];
    $documento=$_SESSION['doc'];

   


    $personal= new Actualizarusuario();



    $usuario=$personal->Uno($documento);
    $datos=$personal->dos($documento);


    if(isset($_POST['actualizar'])){
      $documento=$_SESSION['doc'];
        $nombre=$_POST['nombre'];
        $password=$_POST['con'];
        $rol=$_POST['rol'];
        $fo=$_POST['fotoa'];
        $foto=$_FILES['fo']['name'];
        $tipo=$_FILES['fo']['type'];
        $tam=$_FILES['fo']['size'];
        
  
     
  
      if($foto != null ){
  
              if($tipo == "image/gif" || $tipo=="image/png" || $tipo=="image/jpeg" ){
  
                 $hoy=date('dmy');
  
                 $foto=$hoy."_".$documento."_".$foto;
  
                 $carpeta=$_SERVER['DOCUMENT_ROOT'].'/FZ_PUBLICIDAD/img/';
                
                 $resultado=$personal->actualizar($documento,$nombre,$password,$rol,$foto);
  
                 if($resultado > 0){
  
                    move_uploaded_file($_FILES['fo']['tmp_name'],$carpeta.$foto);
  
                    echo "<script type='text/javascript'>alert('Actualizacion exitosa');self.location='actualizarusu.php';</script>";
  
                 }else{
  
                    echo "<script type='text/javascript'>alert('Error de actualizacion');self.location='actualizarusu.php';</script>";
                 }
              }else{
  
                    echo "<script type='text/javascript'>alert('Formato no permitido');self.location='actualizarusu.php';</script>";
  
                    $resultado=$personal->actualizar($documento,$nombre,$password,$rol,$fo);
  
                    if($resultado>0){
  
                       echo "<script type='text/javascript'>alert('Actualizacion sin foto');self.location='actualizarusu.php';</script>";
  
                    }else{
  
                       echo "<script type='text/javascript'>alert('Error de actualizacion');self.location='actualizarusu.php';</script>";
  
                    }
  
              }
                 
          }else{
  
            $resultado=$personal->actualizar($documento,$nombre,$password,$rol,$fo);
  
           if($resultado>0){
  
              echo "<script type='text/javascript'>alert('Actualizacion sin foto');self.location='actualizarusu.php';</script>";
  
           }else{
  
              echo "<script type='text/javascript'>alert('Error de actualizacion');self.location='actualizarusu.php';</script>";
           }
          }
          
           
     }


     if(isset($_POST['actualizar2'])){
      $docu=$_SESSION['doc'];
      $nom=$_POST['nombrea'];
      $apellido=$_POST['apellido'];
      $correo=$_POST['correo'];
      $celular=$_POST['celular'];
      $sexo=$_POST['sexo'];
      $direccion=$_POST['direccion'];
      $fe=$_POST['fechaa'];
      $fecha=$_POST['fecha'];
    
      
      if($fecha != null){ 
          $resultado=$personal->actu_personal($docu,$nom,$apellido,$correo,$celular,$sexo,$direccion,$fecha);

          if($resultado > 0){

            echo "<script type='text/javascript'>alert('Actualizacion exitosa');self.location='actualizarusu.php';</script>";
          }else {

            echo "<script type='text/javascript'>alert('Error actualizacion');self.location='actualizarusu.php';</script>";
          }

      }else{
         
         $resultado=$personal->actu_personal($docu,$nom,$apellido,$correo,$celular,$sexo,$direccion,$fe);

         if($resultado > 0){

           echo "<script type='text/javascript'>alert('Actualizacion exitosa sin fecha');self.location='actualizarusu.php';</script>";
         }else {

           echo "<script type='text/javascript'>alert('Error actualizacion');self.location='actualizarusu.php';</script>";
         }


      }

    
   }

    require_once("vista/vistaac_usu.php");
  

?>