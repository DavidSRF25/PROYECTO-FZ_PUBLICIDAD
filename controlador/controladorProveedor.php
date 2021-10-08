<?php

    require_once('modelo/modeloProveedor.php');

    session_start();//Iniciamos session
    $nombre= $_SESSION['usuario'];
     $ape=$_SESSION['apellido'];
     $oficio= $_SESSION['Oficio'];
     $foto=$_SESSION['foto'];
     $doc=$_SESSION['doc'];
     $fecha=$_SESSION['fecha'];

    $modelo= new modeloProveedor();

    $proveedores= $modelo->ConsultaTodos();


    if(isset($_POST['actualizar'])){

        $criterio=$_POST['criterio'];
        $solo= $modelo->existe($criterio);

    }

    if(isset($_POST['nuevo'])){

        $documento=$_POST['documentoo'];
        $nombre=$_POST['nombree'];
        $direccion=$_POST['direccionn'];
        $celular=$_POST['celularr'];
        $correo=$_POST['correoo'];



            
        $resultado=$modelo->actualizar($documento,$nombre,$direccion,$celular,$correo);

        if($resultado > 0){

                    echo "<script type='text/javascript'>alert('Proveedor actualizado');self.location='proveedor.php';</script>";

        }else{

                    echo "<script type='text/javascript'>alert('Error, el proveedor no pudo ser actualizado');self.location='proveedor.php';</script>";
        }

        
    }

    if(isset($_POST['registrar'])){

        $documento=$_POST['documento'];
        $nombre=$_POST['nombre'];
        $direccion=$_POST['direccion'];
        $celular=$_POST['celular'];
        $correo=$_POST['correo'];

        $existe= $modelo->existe($documento);

        if($existe){ 
            
            echo "<script type='text/javascript'>alert('El Proveedor ya existe');self.location='proveedor.php';</script>";

        }else{

            
            $resultado= $modelo->insertar($documento,$nombre,$direccion,$celular,$correo);

                if($resultado > 0){

                    echo "<script type='text/javascript'>alert('Proveedor Registrado');self.location='proveedor.php';</script>";

                }else{

                    echo "<script type='text/javascript'>alert('Error, el proveedor no pudo ser registrado');self.location='proveedor.php';</script>";
                }

        }


        

    }

    require_once('vista/vistaProveedor.php');

?>