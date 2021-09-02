<?php
    require_once('modelo/modeloProcesos.php');


    $proceso= new ModeloProcesos();


    $enproceso=$proceso->Enproceso();
    $finalizado=$proceso->Finalizado();



    require_once('vista/produccion.php');

?>