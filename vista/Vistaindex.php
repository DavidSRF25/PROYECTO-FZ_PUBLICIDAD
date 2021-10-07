
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> FzPublicidad | Inicio</title>
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
                  <a href="index.php"><img src="images/logo.png" width="125px"></a>
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
              </nav><?php if( isset($usuario) ){?>
              <a href="carrito.php"><img src="images/cart.png" width="30px" height="30px"></a>
              <?php } ?>
              <img src="images/menu.png" onclick="menutoggle()" class="menu-icon">
          </div>
           <div class="row">
                <div class="col-2">

                    <h1>FzPublicidad<br></h1>
                    <p>Success isn’t always about greatness. It’s about consistency. Consistent<br>hard work gains success. Greatness will come.</p>
                    <a href="productos.php" class="btn">Explar Ahora &#8594;</a>
                </div>
                <div class="col-2">
                    <img src="images/local.png" >
                </div>
               
           </div>
           
           
       </div>
       <div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
        style="height: 100%; width: 100%;">
        <path d="M0.00,49.98 C150.00,150.00 349.20,-50.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
            style="stroke: none; fill: #d4d4d4;"></path>
    </svg></div>
       
       </div>
       
<!------------------ featured categories --------------->
     <div class="categories">
         <div class="small-container">
           <div class="row">
               <div class="col-3">
                   <img src="images/category-1.jpg">
               </div> 
               <div class="col-3">
                  <img src="images/category-2.jpg">
               </div> 
               <div class="col-3">
                   <img src="images/category-3.jpg">
               </div> 
           </div>
       </div>
     </div>
       
<!-------------- Our Featured Products -------------->
  
  
  <div class="small-container">
        <h2 class="title">Productos Destacados</h2>
        <div class="row">
         
         <?php  foreach ($destacados as $f) { ?>
              <div class="col-4">
             
                 <img src="img/<?php echo $f[7]; ?>" >
                  <h4><?php echo $f[1]; ?></h4>
                
                   

                  
                  
                  <p class="precio">$<?php echo $f[2]?></p>
                  <form action="" method="post">
                                   <input type="hidden" value="<?php echo $f[0]; ?>" name="criterio">
                                 
                                   <input type="submit" value="Ver Producto" name="ID" class="verp">
                </form>
              </div>
              <?php

                   }
                   ?>
              
              
          </div>
        <h2 class="title">Ultimos Productos</h2>
             
        <div class="row">
         
         <?php  foreach ($ultimospro as $f) { ?>
              <div class="col-4">
             
                 <img src="img/<?php echo $f[7]; ?>" >
                  <h4><?php echo $f[1]; ?></h4>
                
                   

                  
                  
                  <p class="precio">$<?php echo $f[2]?></p>
                  <form action="" method="post">
                                   <input type="hidden" value="<?php echo $f[0]; ?>" name="criterio">
                                 
                                   <input type="submit" value="Ver Producto" name="ID" class="verp">
                </form>
              </div>
              <?php

                   }
                   ?>
              
              
          </div>
           </div>
       </div>
       
<!----------offer--------------->
  
   <div class="offer">
       <div class="small-container">
           <div class="row">
           <div class="col-2">
               <img src="images/bolsa.png" class="offer-img">
           </div>
           <div class="col-2">
               <p>Exclusivos en Fzpublicidad</p>
               <h1>Bolsas Ecologicas Con tu Logo</h1>
               <small>Compra Tu Bolsa Ecologica y personalizala con el logo que tu mas Prefieras</small>
               <br>
               <a href="productos.php" class="btn">Comprar Ahora &#8594;</a>
           </div>
       </div>
       </div>
       
   </div>
   
<!----------testimonial--------------->   
  
   <div class="testimonial">
       <div class="small-container">
       <div class="row">
           <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                      <p>Los porductos Son de muy buena calidad y siempre son lo que espero</p>
                      <div class="rating">
                           <i class="fa fa-star"></i>
                           <i class="fa fa-star"></i>
                           <i class="fa fa-star"></i>
                           <i class="fa fa-star"></i>
                           <i class="fa fa-star-o"></i>
                       </div>
                       <img src="images/user-1.png">
                       <h3>Sean Parker</h3>
           </div>
            <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                      <p>Los pedidos lo realizas supremamente rapido , he comprado varios productos y nninguno me ha desepcionado.</p>
                      <div class="rating">
                           <i class="fa fa-star"></i>
                           <i class="fa fa-star"></i>
                           <i class="fa fa-star"></i>
                           <i class="fa fa-star"></i>
                           <i class="fa fa-star-o"></i>
                       </div>
                       <img src="images/user-2.png">
                       <h3>Mike Smith</h3>
           </div>
            <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                      <p> Me encantan las bolsas ecologicas , ya que ayudan al medio ambiente y reduce la contaminacion  </p>
                      <div class="rating">
                           <i class="fa fa-star"></i>
                           <i class="fa fa-star"></i>
                           <i class="fa fa-star"></i>
                           <i class="fa fa-star"></i>
                           <i class="fa fa-star-o"></i>
                       </div>
                       <img src="images/user-3.png">
                       <h3>Mabel Joe</h3>
           </div>
       </div>
       </div>
   </div>

   
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
                    <li>Bogotá</li>
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
                MenuItems.style.maxHeight = "200px";
            }else
            {
                MenuItems.style.maxHeight = "0px"
            } 
    }
    
</script>



</body>
</html>

