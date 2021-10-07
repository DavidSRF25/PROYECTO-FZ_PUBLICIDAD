<?php 


session_start();
$usu = $_SESSION['usuario'] ;
$ap = $_SESSION['apellido']; 
$of = $_SESSION['Oficio'] ;
$img = $_SESSION['foto'] ;
$doc = $_SESSION['doc'];
if(isset($_SESSION["usuario"])){
    $usuario=$_SESSION['usuario'];
}

require_once("modelo/modeloProductos.php");

$productos = new ModeloProductos();



$ultimospro= $productos->ultimosporductos();

$destacados=$productos->productosdestacados();



require_once("vista/Vistaclientes.php");

?>