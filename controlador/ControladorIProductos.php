<?php
session_start();
$nombreu = $_SESSION['usuario'] ;

$foto = $_SESSION['foto'] ;

    require_once("modelo/modeloIProductos.php");


    $produ= new Pro();


    $productos=$produ->ConsultaTodos();

    if(isset($_POST['enviar'])){
          $id=$_POST['id'];
          $nombre=$_POST['nombre'];
          $valor=$_POST['valor'];
          $color=$_POST['color'];
          $tamaño=$_POST['tamaño'];
          $logo=" ";
          $cantidad=$_POST['cantidad'];        
          $foto=$_FILES['foto']['name'];
          $tipo=$_FILES['foto']['type'];
          $tam=$_FILES['foto']['size'];
          
    
        $existe=$produ->Uno($id);

        if($existe){

            echo "<script type='text/javascript'>alert('El producto ya existe');</script>";
    
       }else{
    
        if($foto != null ){
    
                if($tipo == "image/gif" || $tipo=="image/png" || $tipo=="image/jpeg" ){
    
                   $hoy=date('dmy');
    
                   $foto=$hoy."_".$id."_".$foto;
    
                   $carpeta=$_SERVER['DOCUMENT_ROOT'].'/FZ_PUBLICIDAD/img/';
                  
                   $resultado=$produ->insertar($id,$nombre,$valor,$color,$tamaño,$logo,$cantidad,$foto);
    
                   if($resultado > 0){
    
                      move_uploaded_file($_FILES['foto']['tmp_name'],$carpeta.$foto);
    
                      echo "<script type='text/javascript'>alert('Registro exitoso');</script>";
    
                   }else{
    
                      echo "<script type='text/javascript'>alert('Error de registro 1');</script>";
                   }
                }else{
    
                      echo "<script type='text/javascript'>alert('Formato de foto no permitido');</script>";
    
                    
                }
                   
            }else{
              
    
                echo "<script type='text/javascript'>alert('Error de registro');</script>";
            
            }
            
             
       }
    }

    require_once("vista/vistaIProductos.php");
?>