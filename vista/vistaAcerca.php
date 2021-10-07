<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> FzPublicidad | Acerca de Nosotros</title>
    <link rel="stylesheet" href="vista/css/style.css">
    <link rel="stylesheet" href="vista/css/acerc.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="images/logo.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

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

                    <h1>FZ PUBLICIDAD</h1>
                    <p>Somos una empresa de textiles dedicados a la confección de articulos <br>
                      textiles excepto prendas de vestir <br>
                     con el fin de contribuir al medio ambiente<br>
                    por medio del material totalmente ecologico que utilizamos para la<br>
                    elaboración de nuestros productos.
                    </p>
                  
                </div>
                <div class="col-2">
                    <img src="images/bolsas.png">
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

                <h1>¿Quienes hacen parte de nuestra Empresa?</h1>
                    
                <p>Nuestra empresa esta conformada por tres grupos de operarios <br>
                  y un administrador, el primer grupo esta conformado por los operarios del Area de
                 <br><br>Corte:<br>
                 Ellos están encargados en hacer el corte de los productos de acuerdo <br>
                 a lo solicitado por el cliente a la hora de generar su pedido a la empresa.<br>
                 <br>Estampadores:<br>
                 Ellos están encargados en estampar el logo de su empresa o lo que el cliente desee<br>
                  o pida por medio del pedido, para darle un toque personalizado al producto pedido<br>
                  por el cliente.
                  <br><br>Costurero:<br>
                  Ellos están encargados de procesar los diferentes cortes generados por el operario<br>
                  (corte) para unirlos y asi formar el producto y llegar a la culminación de la producción<br>
                  del producto pedido por el cliente.<br>
                  <br>Administrador:<br>
                  El administrador tiene varias funcionalidades, las principales funcionalidades son verificar el pedido del cliente<br>
                  y asi mismo poder asignarle al operario el inicio del proceso de elaboración del producto,<br>
                  pero antes de asignarle un pedido al operario el tiene que generar la entrega del material<br>
                  al operario para que pueda comenzar con el proceso del pedido asignado.

                 

                </p>


           </div>
       </div>
     </div>
       
<!-------------- Our Featured Products -------------->
  

<!----------offer--------------->
  
  
   
<!----------testimonial--------------->   
  
   <div class="testimonial">
       <div class="small-container">
       <h2 class="title">Información de la Empresa</h2>
       <div class="row">
           <div class="col-3">
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15905.673298405136!2d-74.12027486232698!3d4.697156444633302!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9b59dae7d783%3A0x480d53b71075ef10!2sCra.%2098a%20%2367-10%2C%20Bogot%C3%A1!5e0!3m2!1ses-419!2sco!4v1632781030621!5m2!1ses-419!2sco" width="235" height="420" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </a>
                    <h4><i class="fas fa-map-marked-alt"></i> Ubicación</a></h4>
           </div>
            <div class="col-3">

            <?php
                if($administrador){ 
                    foreach($administrador as $f){ 
            ?>
            <img src="img/<?php echo $f[12]; ?>" alt="" width="60" height="60"><br>
            <div class="uno"><i class="icono fas fa-id-card"></i> Documento: <br><?php echo $f[0] ?></div><br>
            <div class="uno"><i class="far fa-edit"></i> Nombre: <br> <?php echo $f[1] ?><?php echo $f[2] ?></div><br>   
            <div class="uno"><i class="fas fa-phone-alt"></i> Telefono: <br> <?php echo $f[4] ?></div><br>
            <div class="uno"><i class="icono fas fa-at"></i> Correo: <br> <?php echo $f[3] ?></div><br>
            <div class="uno"><i class="fas fa-user-tie"></i> Rol: <br> <?php echo $f[11] ?></div><br>
           <?php
                 }
                }

            ?>

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
                <p>Escribenos y nos contactaremos contigo en el tiempo menos posible.<br>  Fzpublicidad@hotmail.com</p>
                
            </div>
            <div class="footer-col2">
               <img src="images/logo.png">
               
            </div>
            <div class="footer-col3">
               <h3>Datos</h3>
                <ul>
                    <li>Fz Publicidad</li>
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

