<?php
   

   
   session_start();//Iniciamos session
   $usuarion= $_SESSION['usuario'];
    $ape=$_SESSION['apellido'];
    $oficio= $_SESSION['Oficio'];
    $fotito=$_SESSION['foto'];
    $doc=$_SESSION['doc'];

   
   require_once('vista/vistaadministrador.php');
?>