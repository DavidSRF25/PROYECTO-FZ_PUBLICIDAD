<?php
   

   
   session_start();//Iniciamos session
   $usuarion= $_SESSION['usuario'];
    $ape=$_SESSION['apellido'];
    $oficio= $_SESSION['Oficio'];
    $fotito=$_SESSION['foto'];
    $doc=$_SESSION['doc'];
    $correo=$_SESSION['correo'];
    $fecha=$_SESSION['fecha'];

   
   require_once('vista/vistaadministrador.php');
?>