

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis pedidos</title>
    <link rel="stylesheet" href="vista/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="images/logo.ico" type="image/x-icon">
</head>
<body>
    <div class="header">
       <div class="container">
          <div class="navbar">
              <div class="logo">
                  <a href="index.html"><img src="images/logo.png" width="125px"></a>
              </div>
              <nav>
              <ul id="MenuItems">
                   <li><a href="index.php">Inicio</a></li>
                   <li><a href="productos.php">Productos</a></li>
                   <li><a href="acerca_nosotros.php">Acerca De Nosotros</a></li>
                   <li><a href="contacto.php">Contacto</a></li>
                   <?php if( isset($usuario) ){?>
                   <li><a href="micuenta.php"> Mi Cuenta</a></li>
                   <?php }else { ?>
                   <li><a href="login.php">Entrar</a>
                   <?php } ?>
                   <?php if(  isset($usuario)){?>
                   <li>
                   <a href="#">
                    <form action="login.php" method="post">
                
        
                    <input  class="cerrarlog" type="submit" name="cerrar" value="Cerrar" ></span>
                    </form>
                
                   </li>

                    
                
                   <?php } ?>
                </li>
               </ul>
              </nav>
              <a href="carrito.php"><img src="images/cart.png" width="30px" height="30px"></a>
              <img src="images/menu.png" onclick="menutoggle()" class="menu-icon">
          </div>
          
       </div>
       <div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
        style="height: 100%; width: 100%;">
        <path d="M0.00,49.98 C150.00,150.00 349.20,-50.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
            style="stroke: none; fill:#d4d4d4"></path>
    </svg></div>
    </div>
       
       
<!--------------Cart Items details--------------->
<div class="small-container cart-page">
   
   <table>
       <tr>
           <th>Producto</th>
           <th>Cantidad</th>
           <th>Fecha Compra</th>
           <th>Subtotal</th>
       </tr>
       <?php
       $total=0;
       $subtotal=0;

       if($mipedido){
      
               foreach($mipedido as $m){


            ?>
       <tr>
       
           <td>
               <div class="cart-info">
         
                <img src="img/<?php  echo $m[21] ?>">
                <div>
                    <p style="color:#4084fa;"><?php echo $m[15] ?></p>
                    <small>Precio: $<?php echo $m[8] ?></small><br>

                    
                    
                </div>
                     
                <?php $subtotal=$m[7] * $m[8];?>

         
                  
                   
               </div>
        
           </td>
           <td><input   type="number" value="<?php echo $m[7] ?>" disabled></td>
           <td><?php echo  $m[3];?></td>
           <td>$<?php echo $subtotal;

                    $_SESSION["subtotal"]=$subtotal;
           
           ?></td>
         
       </tr>

       <?php 
             
             
            }

       }
            ?>
       <!-- 
       <tr>
           <td>
               <div class="cart-info">
                   <img src="images/buy-2.jpg">
                   <div>
                       <p>HRX Sports Shoes</p>
                       <small>Price: $75.00</small><br>
                       <a href="">Eliminar</a>
                   </div>
               </div>
           </td>
           <td><input type="number" value="1"></td>
           <td>$75.00</td>
       </tr>
       <tr>
           <td>
               <div class="cart-info">
                   <img src="images/buy-3.jpg">
                   <div>
                       <p>HRX Gray Trackpants</p>
                       <small>Price: $75.00</small><br>
                       <a href="">Eliminar</a>
                   </div>
               </div>
           </td>
           <td><input type="number" value="1"></td>
           <td>$75.00</td>
       </tr>
       -->
     
   </table>
    
    <div class="total-price">
        <table>
            
          
            <tr>
                
            </tr>
            
        </table>
    </div>
   
    
</div>
<br><br><br>

<!----------Footer---------------> 

<div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col1">
            <h3><a href="contacto.php" style="color:white;">Contactanos</a></h3>
                <p>Escribenos y nos contactaremos contigo en el meno tiempo posible.</p>
                
            </div>
            <div class="footer-col2">
               <img src="images/logo.png">
               
            </div>
            <div class="footer-col3">
               <h3>Datos</h3>
                <ul>
                    <li>FzPublicidad</li>
                    <li>Bogot??</li>
                    <li>Cra. 98a #67-10 </li>
                    <li>3102391543</li>
                </ul>
            </div>
            <div class="footer-col4">
               <h3>Follow Us</h3>
                <ul>
                    <li>Facebook</li>
                    <li>Twitter<li>
                    <li>Instagram</li>
                    <li>YouTube</li>
                </ul>
            </div>
        </div>
        <hr>
        
    </div>
    
</div>



<!-------------js for toggle menu-------------->
<script>
    
    var MenuItems = document.getElementById("MenuItems");
    
    MenuItems.style.maxHeight = "0px";
    
    function menutoggle()
    {
        if(MenuItems.style.maxHeight == "0px")
            {
                MenuItems.style.maxHeight = "250px";
            }else
            {
                MenuItems.style.maxHeight = "0px"
            } 
    }
    

    
    
    
    
</script>



</body>
</html>

