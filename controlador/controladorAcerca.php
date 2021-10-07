<?php
    require_once('modelo/modeloAcerca.php');
    session_start();

if(isset($_SESSION["usuario"])){
    $usuario=$_SESSION['usuario'];
}


    $modelo= new modeloAcerca();

    $administrador= $modelo->administradores();




    require_once("vista/vistaAcerca.php");



?>