<?php 

require_once("modelo/modeloPedido.php");
session_start();
$docu=$_SESSION['doc'];
if(isset($_SESSION["usuario"])){
    $usuario=$_SESSION['usuario'];
}


$pedidocli= new ModeloPedido();



$mipedido = $pedidocli ->mispedidos($docu);









require_once("vista/vistamispedidos.php");


?>