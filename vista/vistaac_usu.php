<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Actualización</title>
    <link rel="stylesheet" href="./vista/css/ped.css">
    <link rel="stylesheet" href="./vista/css/actualizacion.css">
    <link rel="stylesheet" href="./vista/css/otro.css">
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
            <img src="img/logo.png" class="logofz">
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
                <a href="cliente.php">
                <i class="fab fa-black-tie"></i>
                    <span class="links_name">CLIENTES</span>

                </a>
            <span class="tooltip">CLIENTES</span>
            </li>
            <li>
                <a href="#">
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
        <img src="img/<?php echo $foto ?>" alt="">
        <span class="admin_name"><?php echo $nombre ?></span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>

    <div class="home-content">
     

      <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="title">DATOS DE USUARIO</div>
          <br>
          <div class="sales-details">

         <?php if($usuario){
             ?>
          <table>
               <tr>
        
                   <th>Documento</th>
                   <th>Nombre</th>
                   <th>Password</th>
                   <th>Rol</th>
                   <th>Foto</th>
                 

               </tr>
               <tbody>
               <?php 
              foreach($usuario as $f){
                   ?>
               <tr>
                   <td><?php echo $f[0]; ?></td>
                   <td><?php echo $f[1]; ?></td>
                   <td><?php echo $f[2]; ?></td>
                   <td><?php echo $f[3]; ?></td>
                   <td><img src="img/<?php echo $f[4]?>" alt="" width="60" height="60"></td>
             
                   


               </tr>
               </tbody>
               
            </table>
          
          </div>
         
        
        </div>

        <div class="top-sales box">
          <div class="title">ACTUALIZACION USUARIO</div>
         
            <br>
           <form action="" method="POST" class="formulario" enctype="multipart/form-data">
         
            <label>Documento:</label><br>
            <label><?php echo $f[0]?></label><br>
            <label>Nombre:</label><br>
            <input type="text" name="nombre" value="<?php echo $f[1]?>" class="documento">
            <label>Password:</label><br>
            <input type="password" name="con" value="<?php echo $f[2]?>" class="documento"><br>
            <label>Rol:</label><br>
            <select name="rol" class="documento" required>
                                    <option value="<?php echo $f[3]?>"><?php echo $f[3]?> </option>
                                    <option value="ADMINISTRADOR">Administrador</option>
                                    <option value="CORTADOR">Cortador</option>
                                    <option value="ESTAMPADOR">Estampador</option>
                                    <option value="COSTURERO">Costurero</option>
                                 
            </select><br>
            <input type="hidden" value="<?php echo $f[4]?>" name="fotoa" >
            <label>Foto:</label><br>
            <input type="file"  class="documento" name="fo">
            <input type="submit" name="actualizar" class="actualizar" value="Actulizar">
         
           </form>
           
          
           <?php 
                 }
            }
          ?>
        </div>
      </div>
            <br>

     
    <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="title">DATOS PERSONALES</div>
          <br>
          <div class="sales-details">

         <?php if($datos){
             ?>
          <table>
               <tr>
        
                   <th>Documento</th>
                   <th>Nombre</th>
                   <th>Apellido</th>
                   <th>Correo</th>
                   <th>Celular</th>
                   <th>Sexo</th>
            
                   
                 

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
                   <th><form method="POST">
                         
                           <input type="hidden" value="<?php echo $f[0]?>">
                           <input type="submit" class="detalle" name="detalle" value="Detalles" >

                       </form>

                   </th>
  

               </tr>
               </tbody>
               
            </table>
           
          </div>
         
        
        </div>

        <div class="top-sales box">
          <div class="title">ACTUALIZACION DATOS</div>
          
            <br>
            <form method="POST" class="formulariodos">

            <label>Documento:</label><br>
            <label><?php echo $f[0]?></label><br>
            <label>Nombre:</label><br>
            <input type="text" name="nombrea" value="<?php echo $f[1]?>" class="documento">
            <label>Apellido:</label><br>
            <input type="text" name="apellido" value="<?php echo $f[2]?> " class="documento">
            <label>Correo:</label><br>
            <input type="text" name="correo" class="documento" value="<?php echo $f[3] ?>">
            <label>Celular:</label><br>
            <input type="text" name="celular" class="documento"  value="<?php echo $f[4] ?>">
            <label>Sexo:</label><br>
            <select name="sexo" class="documento" required>
                                    <option value="<?php echo $f[5]?>"><?php echo $f[5]?> </option>
                                    <option value="masculino">Masculino</option>
                                    <option value="femenino">Femenino</option>
                                   
                                 
            </select><br>
            <label>Direccion:</label><br>
            <input type="text" name="direccion" class="documento"  value="<?php echo $f[6] ?>">   
            <input type="hidden" value="<?php echo $f[7] ?>" name="fechaa">
            <label>Fecha Nacimiento:</label><br>
            <input type="date"  name="fecha" class="documento"><br> 
            <input type="submit" name="actualizar2" class="actualizar" value="Actulizar">
           
           </form>
           <?php 
                 }
            }
          ?>

        </div>

      </div>

      <div class="top-sales box">
         <br><br>
          <?php if(isset($_POST['detalle']) && $datos){
             ?>
        
      
      
               <?php 
              foreach($datos as $f){
                   ?>
                <form>
               
                   <label>Documento: <?php echo $f[0]; ?></label>
                   <label>Nombre: <?php echo $f[1]; ?></label><br><br>
                   <label>Apellido: <?php echo $f[2]; ?></label>
                   <label>Correo: <?php echo $f[3]; ?></label><br><br>
                   <label>Celular: <?php echo $f[4]; ?></label>
                   <label>Sexo: <?php echo $f[5]; ?></label><br><br>
                   <label>Direccion: <?php echo $f[6]; ?></label>
                   <label>Fechan Nacimiento: <?php echo $f[7]; ?></label>
                </form>
              <?php

              }
            }
              ?>

        </div>
        <br><br>
   

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
