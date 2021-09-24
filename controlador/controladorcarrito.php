<?php  

session_start();
   

    if($_SESSION['usuario']){

        
    
    
   
        $total=0;
        
    
        if(isset($_SESSION["carritoo"])){
           foreach($_SESSION["carritoo"] as $indice => $arreglo){
           
            $total += $arreglo["cant"] * $arreglo["precio"];
            foreach($arreglo as $key =>$value){
               
            }
           
           }
          
    
        
        }
        
        else{
           
            
           
           
        }
        if(isset($_REQUEST["vaciar"])){
            session_destroy();
            header("Location:carrito.php");
        }   
        if(isset($_REQUEST["item"])){
            $producto=$_REQUEST["item"];
            unset($_SESSION["carritoo"][$producto]);
            echo "<script type='text/javascript'>alert('Se elimino el producto: $producto');</script>";
            header("location:carrito.php");
        }
    


    }else{
        echo '<script type="text/javascript">alert("Usuario no autenticado....");self.location="login.php";</script>';
    
    
    }


    require_once("vista/Vistacarrito.php");
?>