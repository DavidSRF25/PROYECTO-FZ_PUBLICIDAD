<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Bodega</title>
    <link rel="stylesheet" href="./vista/css/pedidos.css">
    <link rel="stylesheet" href="./vista/css/usuarios.css">
    <link rel="stylesheet" href="./vista/css/bode.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/banca-en-linea.svg" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
    <img src="img/logo.pNg" class="logofz"></a>
            <div class="logo_name">FZ PUBLICIDAD</div>
            
    </div>
    <ul class="nav-links">
        <li>
                <a href="pedido.php">
                    <i class='bx bxs-dashboard'></i>
                    <span class="links_name">PEDIDOS</span>

                </a>
                <span class="tooltip">PEDIDOS</span>
            </li>
            <li>
                <a href="usuario.php">
                    <i class='bx bxs-user' ></i>
                    <span class="links_name">USUARIOS</span>

                </a>
                <span class="tooltip">USUARIOS</span>
            </li>
            <li>
                <a href="datos-clientes.php">
                <i class="fab fa-black-tie"></i>
                    <span class="links_name">CLIENTES</span>

                </a>
            <span class="tooltip">CLIENTES</span>
            </li>
            <li>
                <a href="actualizarusu.php">
                <i class="fas fa-user-cog"></i>
                    <span class="links_name">EDITAR</span>

                </a>
               <span class="tooltip">EDITAR</span>
            </li>
            <li>
                <a href="bodega.php">
                <i class="fas fa-cube"></i>
                    <span class="links_name">BODEGA</span>

                </a>
                <span class="tooltip">BODEGA</span>
            </li>
            <li>
                <a href="procesos.php">
                <i class="fas fa-hammer"></i>
                
                    <span class="links_name">PRODUCCIÓN</span>

                </a>
                <span class="tooltip">PRODUCCIÓN</span>
            </li>
            <li>
                <a href="IProductos.php">
                <i class="fas fa-shopping-bag"></i>
                    <span class="links_name">PRODUCTOS</span>

                </a>
                <span class="tooltip">PRODUCTOS</span>
            </li>
            <li>
            <a href="#">
            <form action="login.php" method="post">
                
                <i class='bx bx-log-out' ></i>
                    
                    <span><input  class="cerrarlog" type="submit" name="cerrar" value="Cerrar" ></span>
                </form>
                </a>
            </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">FZ PUBLICIDAD</span>
      </div>
      <div class="search-box">
     
      </div>
      <div class="profile-details">
      
              
        <img src="img/<?php echo  $fotito ?>" alt="">
        
        <span class="admin_name"><?php echo  $usuarion ?></span>
       
      </div>
    </nav>

    <div class="home-content">
     

      <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="title">BODEGA</div>
          <br>
          <div class="sales-details">
         
         <?php if($datos){
             ?>
          <table>
               <tr>
       
                   <th>ID</th>
                   <th>ID Proveedor</th>
                   <th>Tipo</th>
                   <th>Cantidad</th>
                   <th>Descripcion</th>
                   <th>Valor Unitario</th>
    
               </tr>
               <tbody>
               <?php 
              foreach($datos as $f){
                   ?>
               <tr>
                   <td><?php echo $f[0]; ?></td>
                   <td><?php echo $f[1]; ?></td>
                   <td><?php echo $f[2]; ?></td>
                   <td><?php echo $f[3]; ?></td>
                   <td><?php echo $f[4]; ?></td>
                   <td><?php echo $f[5]; ?></td>
                  


               </tr>
               </tbody>
               <?php 
                 }
            }
          ?>
            </table>

            
          
          </div>
          <form method="POST" class="registro" >
            <input type="submit" class="enviar" name="pdf" value="Generear PDF">
            </form>
         
        
        </div>
        <div class="top-sales box">
          <div class="title">Registro Materia prima</div>

          <form method="POST" class="registro" >
            <input type="text" name="id" class="id" placeholder="ID Registro">
            <input type="text" name="proveedor" class="documento" placeholder="ID Proveedor">
            <input type="text" name="tipo" class="usuario" placeholder="Tipo Material">
            <input type="number" name="cantidad" class="password" placeholder="Cantidad">
            <input type="text" name="descripcion" class="descripcion" placeholder="Descripción">
            <input type="number" name="valor" class="valor" placeholder="Valor unitario" >
            <input type="submit" class="enviar" name="enviar" value="Registrar">
            

          </form> 

        </div>
      </div>
       
      <br>
      <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="title">MATERIAL SUMINISTRADO</div>
          <br>
          <div class="sales-details">
         <?php if($datos){
             ?>
          <table>
               <tr>
       
                   <th>ID</th>
                   <th>ID Material</th>
                   <th>Documento Entrega</th>
                   <th>Documento Recibe</th>
                   <th>Descripcion</th>
                   <th>Cantidad</th>
                   <th>Fecha Entrega</th>
    
               </tr>
               <tbody>
               <?php 
              foreach($entre as $f){
                   ?>
               <tr>
                   <td><?php echo $f[0]; ?></td>
                   <td><?php echo $f[1]; ?></td>
                   <td><?php echo $f[2]; ?></td>
                   <td><?php echo $f[3]; ?></td>
                   <td><?php echo $f[4]; ?></td>
                   <td><?php echo $f[5]; ?></td>
                   <td><?php echo $f[6]; ?></td>
                  


               </tr>
               </tbody>
               <?php 
                 }
            }
          ?>
            </table>
          
          </div>
         
        
        </div>
        <div class="top-sales box">
          <div class="title">Registro Entrega Material</div>
          <form method="POST" class="registro" enctype="multipart/form-data">
          
            <select name="idmaterial" class="docen"><br>
			 			<option value="0">ID Material</option>
             <?php
                if($com){ 
                foreach($com as $f){ ?>
                <option value="<?php echo $f[0];?>"><?php echo $f[0];?>, ( <?php echo $f[1];?>)</option>

               <?php 

                }
              }
             ?>
				 			
	          </select>
            <select name="docen" class="docen"><br>
			 			<option value="0">Documento Entrega</option>
             <?php
                if($combo){ 
                foreach($combo as $f){ ?>
                <option value="<?php echo $f[0];?>"><?php echo $f[0];?>, ( <?php echo $f[1];?>)</option>

               <?php 

                }
              }
             ?>
				 			
	          </select>
            <select name="docre" class="docre"><br>
			 			<option value="0">Documento Recibe</option>
             <?php
                if($combo){ 
                foreach($combo as $f){ ?>
                <option value="<?php echo $f[0];?>"><?php echo $f[0];?>, ( <?php echo $f[1];?>)</option>

               <?php 

                }
              }
             ?>
				 			
	         </select>
       
            <input type="text" name="descripcion" class="descripcion" placeholder="Descripción">
            <input type="number" name="cantidad" class="valor" placeholder="Cantidad" >
            <input type="date" name="fechaen" class="fecha" >
            <input type="submit" class="enviar" name="enviarnu" value="Registrar">
            

          </form> 

        </div>
      </div>
    </div>

   
  </section>
  

  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>

</body>
</html>
