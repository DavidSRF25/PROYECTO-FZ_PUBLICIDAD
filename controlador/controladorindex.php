<?php 

session_start();

if(isset($_SESSION["usuario"])){
    $usuario=$_SESSION['usuario'];
}

require_once("modelo/modeloProductos.php");


$productos = new ModeloProductos();


$ultimospro= $productos->ultimosporductos();

$destacados=$productos->productosdestacados();


$productitos = $productos->ConsultaTodosP();

foreach($productitos  as $f){
 
$_SESSION['nombrep']=$f[1];
$_SESSION['precio']=$f[2];
$_SESSION['imagen']=$f[7];



}

if (isset($_POST['ID'])) {
    session_start();
    $cri = $_POST['criterio'];
    $dato=$productos->ConsultaUno($cri);
    foreach ($dato as $d) {
        $_SESSION['nombreproducto']=$d[1];
        $_SESSION['img']=$d[7];
        $_SESSION['preciop']=$d[2];
        $_SESSION['identificador']=$d[0];
        
        
    
    
    }
    header('Location: detalles-productos.php');

}













require_once('vista/Vistaindex.php');

?>