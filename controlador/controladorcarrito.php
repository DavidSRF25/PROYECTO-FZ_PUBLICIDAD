<?php  
require_once("modelo/modelocarrito.php");
require_once("modelo/modeloPedido.php");




session_start();
$carro = new  ModeloCarrito();
$pedi = new ModeloPedido();
if(isset($_SESSION["usuario"])){
    $usuario=$_SESSION['usuario'];
}

   

    if($_SESSION['usuario']){

        
    
    
   
        $total=0;
        
    
        if(isset($_SESSION["carritoo"])){
           foreach($_SESSION["carritoo"] as $indice => $arreglo){
           
            $total += $arreglo["cant"] * $arreglo["precio"];
            foreach($arreglo as $key =>$value){
               
            }
           
           }
          
    
        
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

           

        if(isset($_REQUEST["btnpedir"])){
            if($_SESSION['carritoo']){
                $docusu=$_SESSION['doc'];
                $fechaco= date('ymd');
                $totalc=$_SESSION["totalc"];

                $pedidou=$carro->InsertarentbPedido($docusu,$totalc, $fechaco);

                foreach($_SESSION["carritoo"] as $d => $arreglo){

                    $ima= $arreglo["imagen"];
                    $nom= $d;
                    $preciouni=$arreglo["precio"];
                    
                    $canti= $arreglo["cant"];
                    $tam= $arreglo["size"];
                    $logo=$arreglo["logo"];
                    $color= $arreglo["favcolor"];
                    
                    $id=$arreglo["identificador"];
                    $subt= $arreglo["precio"] * $arreglo["cant"];
                    
                    
                        $uno=$carro->Uno();

                        foreach($uno as $f){

                            $idpedido= $f[0];
                        }

                        $ped=$carro->InsertarPedido($id,$idpedido,$canti,$preciouni,$subt,$tam,$color,$logo, $fechaco);

                        
                        

                            
                            unset($_SESSION["carritoo"]);
                   
     
                    

                }
        

                if ($ped) {

                    echo "<script type='text/javascript'>alert(' Se registro el pedido ');</script>";
                  } else {
                    echo "<script type='text/javascript'>alert(' Se registro el pedido');</script>";
                  }

            


            }else {
                echo "<script type='text/javascript'>alert('El carrito esta vacio') ;</script>";
                header("location:carrito.php");
                

            }



        }

    


    }else{
        echo '<script type="text/javascript">alert("Usuario no autenticado....");self.location="login.php";</script>';
    
    
    }


    require_once("vista/Vistacarrito.php");
?>