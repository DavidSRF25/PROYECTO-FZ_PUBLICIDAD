
<?php 

require_once("modelo/modeloproductodetalles.php");

session_start();

$nom2=$_SESSION['nombreproducto'];
$imagenpro= $_SESSION['img'];
$precioP= $_SESSION['preciop'];







require_once('vista/Vistadetalleproducto.php');








?>