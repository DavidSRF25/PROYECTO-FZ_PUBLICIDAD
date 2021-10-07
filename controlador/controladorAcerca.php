<?php
    require_once('modelo/modeloAcerca.php');

    $modelo= new modeloAcerca();

    $administrador= $modelo->administradores();




    require_once("vista/vistaAcerca.php");



?>