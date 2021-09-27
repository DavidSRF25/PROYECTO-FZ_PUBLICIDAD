<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title><?php echo $nom2; ?> - FzPublicidad </title>

 
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
                   <li><a href="">Acerca De</a></li>
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
<!--------------single-product--------------->
<div class="small-container single-product">
    <div class="row">
        <div class="col-2">
           <img src="img/<?php echo $imagenpro; ?>" width="100%" id="ProductImg" >
            
            
        </div>
        <div class="col-2">
          
            <h1><?php echo $nom2; ?></h1>
            <h4>$<?php echo $precioP ?></h4>
            
            <select>
               <option>Seleccione Tamaño</option>
               <option>Pequeña</option>
               <option>Mediana</option>
               <option>Grande</option>
              
           </select>
            <form action="detalles-productos.php" method="POST">
           <input type="hidden" name="txtProducto" value="<?php echo $nom2; ?>">
           <input type="hidden" name="imagen" value="<?php echo $imagenpro; ?>">
           <input type="hidden" name="txtPrecio" value="<?php echo $precioP ?>">
            <input class="numerodeta" type="number" value="1" name="cant" min="1" pattern="^[0-9]+">
           
            <input type="submit" class="btn" value="Añadir al Carrito" name="btnagregar">
        
            
            </form>
            
            <h3>Detalles Del Producto <i class="fa fa-indent"></i></h3>
            <br>
            <p>Give your summer wardrobe a style upgrade with the HRX Men's Active T-shirt. Team it with a pair of shorts for your morning workout or a denims for an evening out with the guys.</p>
        </div>
    </div>
</div>
<!----------------- title -------------->
<div class="small-container">
   <div class="row row-2">
       <h2>Otros Productos</h2>
      <a href="productos.html"><p>Ver Más</p></a>
   </div>
    
</div>
    
<!-------------- Our Products -------------->
<div class="small-container">
         
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

