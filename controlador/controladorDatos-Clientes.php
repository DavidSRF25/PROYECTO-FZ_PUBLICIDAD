<?php

session_start();//Iniciamos session
  $usuarion= $_SESSION['usuario'];
   $ape=$_SESSION['apellido'];
   $oficio= $_SESSION['Oficio'];
   $fotito=$_SESSION['foto'];
   $doc=$_SESSION['doc'];
   $fecha=$_SESSION['fecha'];

    require_once('modelo/modeloClientes.php');


    $clientes= new ModeloCli();

    $todos= $clientes->ConsultaTodos();

       
   if(isset($_POST['detalles'])){
    $dato=$_POST['Criterio'];
    $detalle=$clientes->Uno($dato);
}






    require_once('vista/vistaDatos-clientes.php');
?>