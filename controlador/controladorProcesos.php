<?php

    session_start();

    $nombre=$_SESSION['usuario'];
    $foto= $_SESSION['foto'];

    require_once('modelo/modeloProcesos.php');


    $proceso= new ModeloProcesos();


    $enproceso=$proceso->Enproceso();
    $finalizado=$proceso->Finalizado();



    require_once('vista/Vistaproduccion.php');

?>