<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title><?php echo $nom2; ?> - FzPublicidad </title>

 
    <link rel="stylesheet" href="vista/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
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
            <form action="detalles-productos.php" method="POST" class="product-select" enctype="multipart/form-data">
              <label><b> Tu logo</b></label> <br><input type="file"  name="logo" class="logodeta" >
            <select  name="size" >
               <option value="">Seleccione Tamaño</option>
               <option value="Pequeña">Pequeña</option>
               <option value="Mediana">Mediana</option>
               <option value="Grande">Grande</option>
               
              
           </select>
           <div class="color-price">
      <div class="color-option">
        
        <div class="circles">
        <label ><b>Color:</b></label>
        <input class="colores" type="color"  name="favcolor" value="#4084fa"><br>
          
        </div>
      </div>
      <div class="price">
        
      </div>
    </div>


                
           
                 
            
           <input type="hidden" name="txtProducto" value="<?php echo $nom2; ?>">
           <input type="hidden" name="imagen" value="<?php echo $imagenpro; ?>">
           <input type="hidden" name="txtPrecio" value="<?php echo $precioP ?>">
           <input type="hidden" name="identificador" value="<?php echo $iden ?>">
            <input class="numerodeta" type="number" value="1" name="cant" min="1" pattern="^[1-9]+">

           
           
            <input type="submit" class="btn" value="Añadir al Carrito" name="btnagregar">
        
            
            </form>
            
            
        </div>
    </div>
</div>
<!----------------- title -------------->
<div class="small-container">
   <div class="row row-2">
       <h2>Otros Productos</h2>
      <a href="productos.php"><p>Ver Más</p></a>
   </div>
    
</div>
    
<!-------------- Our Products -------------->
<div class="small-container">
         
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

<!-- Color selecction-->

<script>
   let circle = document.querySelector(".color-option");

   circle.addEventListener("click", (e)=>{
     let target = e.target;
     if(target.classList.contains("circle")){
       circle.querySelector(".active").classList.remove("active");
       target.classList.add("active");
       document.querySelector(".main-images .active").classList.remove("active");
       document.querySelector(`.main-images .${target.id}`).classList.add("active");
        
     }
   });

  </script>



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

