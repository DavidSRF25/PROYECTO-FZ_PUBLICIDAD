
<?php

require_once("modelo/modeloproductodetalles.php");

session_start() ;
$nom2=$_SESSION['nombreproducto'];
$imagenpro= $_SESSION['img'];
$precioP= $_SESSION['preciop'];










if(isset($_REQUEST["btnagregar"]) ){
    if($_SESSION['usuario'] ){
    $producto =$_REQUEST["txtProducto"];
    $cantidad =$_REQUEST["cant"];
    $precio = $_REQUEST["txtPrecio"];
    $img = $_REQUEST["imagen"];
   
    if(isset ($_SESSION["carritoo"])){
        $_SESSION["carritoo"][$producto]["txtProducto"]=$producto; 
        
        $_SESSION["carritoo"][$producto]["cant"]=$_SESSION["carritoo"][$producto]["cant"]+$cantidad;
        $_SESSION["carritoo"][$producto]["precio"]=$precio; 
        $_SESSION["carritoo"][$producto]["imagen"]=$img; 
      
       


    }else{
        $_SESSION["carritoo"][$producto]["txtProducto"]=$producto; 
        $_SESSION["carritoo"][$producto]["cant"]=$cantidad+$_SESSION["carritoo"][$producto]["cant"];
        $_SESSION["carritoo"][$producto]["precio"]=$precio;
        $_SESSION["carritoo"][$producto]["imagen"]=$img;   
    }
    echo "<script type='text/javascript'>alert('Producto $producto agregado con exito' );</script>";
    header("Location: detalles-productos.php");
    
    }else{
        echo '<script type="text/javascript">alert("Usuario no autenticado....");self.location="login.php";</script>';
    
    
    }
}







require_once('vista/Vistadetalleproducto.php');









?>