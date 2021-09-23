<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todos los Productos</title>
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
                   <li><a href="">Acerca de</a></li>
                   <li><a href="">Contacto</a></li>
                   <li><a href="login.php">Cuenta</a></li>
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
<!----------------- title -------------->

<div class="small-container">
   <div class="row row-2">
       <h2>Todos los Productos</h2>
       <select>
           <option>Default Shorting</option>
           <option>Short by price</option>
           <option>Short by popularity</option>
           <option>Short by rating</option>
           <option>Short by sale</option>
       </select>
   </div>
    
             
           <div class="row">
         
          <?php  foreach ($productos as $f) { ?>
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
               
               <!----  
               <div class="col-4">
                   <img src="images/product-2.jpg">
                   <h4>HRX Sports Shoes</h4>
                   <div class="rating">
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star-half-o"></i>
                   </div>
                   <p>$75.00</p>
               </div> 
               <div class="col-4">
                   <img src="images/product-3.jpg">
                   <h4>HRX Gray Trackpants</h4>
                   <div class="rating">
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star-half-o"></i>
                   </div>
                   <p>$45.00</p>
               </div> 
                <div class="col-4">
                   <img src="images/product-4.jpg">
                   <h4>Blue Printed T-Shirt</h4>
                   <div class="rating">
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star-o"></i>
                   </div>
                   <p>$55.00</p>
               </div> 
           </div>
            
             <div class="row">
               <div class="col-4">
                   <img src="images/product-5.jpg">
                   <h4>Puma Gray Sports Shoes</h4>
                   <div class="rating">
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star-o"></i>
                   </div>
                   <p>$95.00</p>
               </div> 
               <div class="col-4">
                   <img src="images/product-6.jpg">
                   <h4>Black Printed T-Shirt</h4>
                   <div class="rating">
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star-half-o"></i>
                   </div>
                   <p>$55.00</p>
               </div> 
               <div class="col-4">
                   <img src="images/product-7.jpg">
                   <h4>HRX Set of 3 Socks</h4>
                   <div class="rating">
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star-half-o"></i>
                   </div>
                   <p>$30.00</p> 
               </div> 
                <div class="col-4">
                   <img src="images/product-8.jpg">
                   <h4>Black Fossil Watch</h4>
                   <div class="rating">
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star-o"></i>
                   </div>
                   <p>$120.00</p>
               </div> 
           </div>
           
           <div class="row">
               <div class="col-4">
                   <img src="images/product-9.jpg">
                   <h4>Black Sportx Watch</h4>
                   <div class="rating">
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star-o"></i>
                   </div>
                   <p>$135.00</p> 
               </div> 
               <div class="col-4">
                   <img src="images/product-10.jpg">
                   <h4>Black HRX Shoes</h4>
                   <div class="rating">
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star-half-o"></i>
                   </div>
                   <p>$50.00</p>
               </div> 
               <div class="col-4">
                   <img src="images/product-11.jpg">
                   <h4>Gray Nike Shoes</h4>
                   <div class="rating">
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star-half-o"></i>
                   </div>
                   <p>$55.00</p>
               </div> 
                <div class="col-4">
                   <img src="images/product-12.jpg">
                   <h4>HRX Black Trackpants</h4>
                   <div class="rating">
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star-o"></i>
                   </div>
                   <p>$75.00</p>
               </div> 
           </div>
           --->
           </div>
           <div class="page-btn">
              <span>1</span>
              <span>2</span>
              <span>3</span>
              <span>4</span>
              <span>&#8594;</span>
          </div>
</div>

    
<!----------Footer---------------> 

<div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col1">
               <h3>Contactanos</h3>
                <p>Escribenos y nos contactaremos contigo en el meno tiempo posible.</p>
                
            </div>
            <div class="footer-col2">
               <img src="images/logo.png">
               
            </div>
            <div class="footer-col3">
               <h3>Datos</h3>
                <ul>
                    <li>FzPublicidad</li>
                    <li>Mosquera</li>
                    <li>Cra97#89</li>
                    <li>3115897542</li>
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

