<?php 

require_once("modelo/modeloProductos.php");


$produc = new ModeloProductos();

$productos = $produc->ConsultaTodosP();

foreach($productos as $f){


$_SESSION['nombrep']=$f[1];
$_SESSION['precio']=$f[2];
$_SESSION['imagen']=$f[7];

}

$nombreproducto=$_SESSION['nombrep'];
$precio=$_SESSION['precio'];
$imagen=$_SESSION['imagen'];






require_once('vista/Vistaproductos.php');






?>