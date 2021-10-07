
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> FzPublicidad | Mi cuenta </title>
 
    
    <link rel="stylesheet" href="vista/css/stylemicuenta.css">
    <link rel="stylesheet" href="vista/css/stylestablas.css">
    <link rel="stylesheet" href="vista/css/stylemodalcuenta.css">
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
              </nav>
              <a href="carrito.php"><img src="images/cart.png" width="30px" height="30px"></a>
              <img src="images/menu.png" onclick="menutoggle()" class="menu-icon">
          </div>
           <div class="row">
                
               
           </div>
           
           
           
       </div>
       <div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
        style="height: 100%; width: 100%;">
        <path d="M0.00,49.98 C150.00,150.00 349.20,-50.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
            style="stroke: none; fill: #d4d4d4;"></path>
    </svg></div>
    
       
       </div>
       <main>
       
		<h1 class="titulo">Mi Cuenta</h1>
		<div class="categorias" id="categorias">
                    <a href="mispedidos.php" style=" color: #fff; text-decoration: none;" >  
			<div class="categoria activa" data-categoria="metodos-pago">
            <svg xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd"viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);"><path d="M4 20h2V10a1 1 0 0 1 1-1h12V7a1 1 0 0 0-1-1h-3.051c-.252-2.244-2.139-4-4.449-4S6.303 3.756 6.051 6H3a1 1 0 0 0-1 1v11a2 2 0 0 0 2 2zm6.5-16c1.207 0 2.218.86 2.45 2h-4.9c.232-1.14 1.243-2 2.45-2z"></path><path d="M21 11H9a1 1 0 0 0-1 1v8a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2v-8a1 1 0 0 0-1-1zm-6 7c-2.757 0-5-2.243-5-5h2c0 1.654 1.346 3 3 3s3-1.346 3-3h2c0 2.757-2.243 5-5 5z"></path></svg>				
                            <p>Mis pedidos</p>
			</div>
                    </a>
                    <a href="javascript:void(0);" style=" color: #fff; text-decoration: none;" class="actualizarmisdatos">  
			<div class="categoria" data-categoria="entregas">
				<svg xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" viewBox="0 0 24 24"><path d="M12 2c2.757 0 5 2.243 5 5.001 0 2.756-2.243 5-5 5s-5-2.244-5-5c0-2.758 2.243-5.001 5-5.001zm0-2c-3.866 0-7 3.134-7 7.001 0 3.865 3.134 7 7 7s7-3.135 7-7c0-3.867-3.134-7.001-7-7.001zm6.369 13.353c-.497.498-1.057.931-1.658 1.302 2.872 1.874 4.378 5.083 4.972 7.346h-19.387c.572-2.29 2.058-5.503 4.973-7.358-.603-.374-1.162-.811-1.658-1.312-4.258 3.072-5.611 8.506-5.611 10.669h24c0-2.142-1.44-7.557-5.631-10.647z"/></svg>

				<p>Actualizar Usuario & Contraseña</p>
			</div>
                    </a>
                   
                    <a href="javascript:void(0);" style=" color: #fff; text-decoration: none;" class="actualizarpe">  
			<div class="categoria" data-categoria="cuenta">
                     <svg xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" viewBox="0 0 24 24"><path d="M9 12l-4.463 4.969-4.537-4.969h3c0-4.97 4.03-9 9-9 2.395 0 4.565.942 6.179 2.468l-2.004 2.231c-1.081-1.05-2.553-1.699-4.175-1.699-3.309 0-6 2.691-6 6h3zm10.463-4.969l-4.463 4.969h3c0 3.309-2.691 6-6 6-1.623 0-3.094-.65-4.175-1.699l-2.004 2.231c1.613 1.526 3.784 2.468 6.179 2.468 4.97 0 9-4.03 9-9h3l-4.537-4.969z"/></svg>				
				<p> Actualizar mis Datos </p>
			</div>
                    </a>
                   
		</div>

		

		
	</main>

 <!-- ventanas modales-->

 <div class="modal-container8">
        
        <div class="modal8 modal-close8 ">
            
            <p class="close8">X</p>
            <div class="modal-textos ">
                
                <table class="tabla">
                    <thead>

             <tr>
                
               
                <th>Documento</th> 
                <th>Nombre Usuario</th> 
                <th>Password</th> 
                <th>Actualizar</th>
              
                
                
               
                
                
            </tr>
                    </thead>

                    <?php foreach($datosmios as $n){ ?>
                   
         
                        <tr> 
                            <form action="" method="POST"  class="tablasinformacion">
                            <td class="actualizardatos"><input type="text" value="<?php echo  $n[0]?>" class="doc" id="doc" name="do"  readonly></td>
                            <td><input type="text" value="<?php  echo $n[1]?>" class="usu" id="usu" name="us"></td>
                            <td><input type="password" value="<?php echo $n[2] ?>" class="cla" id="cla" name="cl"></td>
                            <input type="hidden" value="<?php echo $n[3] ?>" class="rol" id="rol" name="ro">
                            <input type="hidden" value="<?php echo $n[4] ?>" class="img" id="img" name="im">
                            <td><input type="submit" value="Actualizar" class="actualizar" name="actualizarusuypass"></td>
                             
                             
                             
                            </form>
                            
                        </tr>
                        <?php }?>
                        
                        
                  
       
        </table>
                
                
            </div>
            
        </div>
        
        
    </div>

    <div class="modal-container3">
        
        <div class="modal3 modal-close3 ">
            
            <p class="close3">X</p>
            <div class="modal-textos ">
                
                <table class="tabla">
                    <thead>

             <tr>
                
               
                <th>Documento</th> 
                <th>Nombre</th> 
                <th>Apellido</th>
                <th>Correo</th>
                <th>Celular</th>
                <th>Sexo</th> 
                <th>Direccion</th>
                <th>Fecha Nacimiento</th>
                <th>Actualizar</th>
              
                
                
               
                
                
            </tr>
                    </thead>

                    <?php foreach($datosp as $r){ ?>
                   
         
                        <tr> 
                            <form action="" method="POST" class="tablasinformacion" >
                            <td><input type="number" value="<?php echo  $r[0]?>"readonly name="documento"></td>
                            <td><input type="text" value="<?php echo $r[1] ?>" name="nombre"></td>
                            <td><input type="text" value="<?php echo$r[2]?>" name="apellido"></td>
                            <td><input type="email" value="<?php echo$r[3] ?> " name="correo"></td>
                            <td><input type="text" value="<?php echo$r[4]?>" name="celular"></td>
                            <td><select name="sexo" >
                                <option value="<?php echo$r[5] ?>"><?php echo$r[5] ?></option>
                                <option value="masculino">Masculino</option>
                                <option value="femenino">Femenino</option>
                            </select></td>
                            <td><input type="text" value="<?php echo$r[6] ?>" name="direccion"></td>
                            <td><input type="date" value="<?php echo$r[7] ?>" name="fechanacimiento"></td>
                            <td><input type="submit" value="Actualizar" class="actualizar" name="actualizardp"></td>
                             
                            </form>
                            
                        </tr>
                        <?php }?>
                        
                        
                  
       
        </table>
                
                
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
<script src="vista/js/modalcuenta.js"></script>

