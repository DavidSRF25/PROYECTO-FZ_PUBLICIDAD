
<?php

require_once("modelo/modeloproductodetalles.php");
require_once("modelo/modeloPedido.php");
require_once("modelo/modeloProductos.php");


$productos = new ModeloProductos();


$pedi = new ModeloPedido();
$destacados=$productos->productosdestacados();


session_start() ;
$nom2=$_SESSION['nombreproducto'];
$imagenpro= $_SESSION['img'];
$precioP= $_SESSION['preciop'];
$iden=$_SESSION['identificador'];
$s=$_SESSION['sizeet'];






if(isset($_SESSION["usuario"])){
    $usuario=$_SESSION['usuario'];
}



if(isset($_REQUEST["btnagregar"]) ){
    if($_SESSION['usuario'] ){
    $producto =$_REQUEST["txtProducto"];
    $cantidad =$_REQUEST["cant"];
    $precio = $_REQUEST["txtPrecio"];
    $img = $_REQUEST["imagen"];
    $id=$_REQUEST["identificador"];
    $tamaño=$_REQUEST["size"];
    $color=$_REQUEST["favcolor"];
    $logo = $_FILES['logo']['name'];
    $tipo = $_FILES['logo']['type'];
    $sice = $_FILES['logo']['size'];
    $d=$_SESSION['doc'];
    $tamaño2= $_REQUEST["medida"];

    if(empty($_REQUEST["medida"])){

        $tamañodef=$tamaño;


    }else{

        $tamañodef=$tamaño2;

    }
    
    if ($logo != null) {

      if ($tipo == "image/gif" || $tipo == "image/png" || $tipo == "image/jpeg") {

        $hoy = date('dmy');

        $logo = $hoy . "_" . $d . "_" . $logo;
        $carpeta = $_SERVER['DOCUMENT_ROOT'] . '/FZ_PUBLICIDAD/img/';
        
        
          move_uploaded_file($_FILES['logo']['tmp_name'], $carpeta . $logo);

          echo "<script type='text/javascript'>alert('Se añadio al carrito);</script>";
        

         
        
      } else {
        echo "<script type='text/javascript'>alert('Formato no permitido');</script>";
        
        

          echo "<script type='text/javascript'>alert('Se añadio al carrito sin logo');</script>";

          $logo="";
        
      }
    }else{
        echo "<script type='text/javascript'>alert('Se añadio al carrito sin logo');</script>";
        $logo="";

    }


    
   
    if(isset ($_SESSION["carritoo"])){
        $_SESSION["carritoo"][$producto]["txtProducto"]=$producto; 
        
        $_SESSION["carritoo"][$producto]["cant"]=$_SESSION["carritoo"][$producto]["cant"]+$cantidad;
        $_SESSION["carritoo"][$producto]["precio"]=$precio; 
        $_SESSION["carritoo"][$producto]["imagen"]=$img; 
        $_SESSION["carritoo"][$producto]["identificador"]=$id; 
        $_SESSION["carritoo"][$producto]["size"]=$tamañodef; 
        $_SESSION["carritoo"][$producto]["favcolor"]= $color; 
        $_SESSION["carritoo"][$producto]["logo"]= $logo; 

        
       

      
       


    }else{
        $_SESSION["carritoo"][$producto]["txtProducto"]=$producto; 
        $_SESSION["carritoo"][$producto]["cant"]=$cantidad+$_SESSION["carritoo"][$producto]["cant"];
        $_SESSION["carritoo"][$producto]["precio"]=$precio;
        $_SESSION["carritoo"][$producto]["imagen"]=$img;   
        $_SESSION["carritoo"][$producto]["identificador"]=$id; 
        $_SESSION["carritoo"][$producto]["size"]=$tamañodef;
        $_SESSION["carritoo"][$producto]["favcolor"]= $color;
        $_SESSION["carritoo"][$producto]["logo"]= $logo;   
       
    }
    echo "<script type='text/javascript'>alert('Producto $producto agregado con exito' );</script>";
    header("Location: detalles-productos.php");
    
    }else{
        echo '<script type="text/javascript">alert("Usuario no autenticado....");self.location="login.php";</script>';
    
    
    }
  
}
if (isset($_POST['ID'])) {
    
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






require_once('vista/Vistadetalleproducto.php');









?>