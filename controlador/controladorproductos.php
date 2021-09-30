<?php 

require_once("modelo/modeloProductos.php");
require_once("modelo/modelousuario.php");


$produc = new ModeloProductos();



$productos = $produc->ConsultaTodosP();

foreach($productos as $f){
 
$_SESSION['nombrep']=$f[1];
$_SESSION['precio']=$f[2];
$_SESSION['imagen']=$f[7];



}

if (isset($_POST['ID'])) {
    session_start();
    $cri = $_POST['criterio'];
    $dato=$produc->ConsultaUno($cri);
    foreach ($dato as $d) {
        $_SESSION['nombreproducto']=$d[1];
        $_SESSION['img']=$d[7];
        $_SESSION['preciop']=$d[2];
        $_SESSION['identificador']=$d[0];
        
        
    
    
    }
    header('Location: detalles-productos.php');

}














require_once('vista/Vistaproductos.php');

?>