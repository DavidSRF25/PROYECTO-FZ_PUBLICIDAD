<?php

session_start();//Iniciamos session
 $usuarion= $_SESSION['usuario'];
 $ape=$_SESSION['apellido'];
 $oficio= $_SESSION['Oficio'];
 $fotito=$_SESSION['foto'];
 $doc=$_SESSION['doc'];
 $fech=$_SESSION['fecha'];
 $Correo=$_SESSION['correo'];
 $tel=$_SESSION['telefono'];
 $sex=$_SESSION['sexo'];
 $nombre=$_SESSION['nombre'];
    require_once('modelo/modeloOperarios.php');


    

    require_once('vista/operarios.php');
?>