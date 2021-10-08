<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Proveedores</title>
    <link rel="stylesheet" href="./vista/css/pedid_menu.css">
    <link rel="stylesheet" href="./vista/css/otro.css">
    <link rel="stylesheet" href="./vista/css/nuevo.css">
    <link rel="stylesheet" href="./vista/css/usuarios.css">
    <link rel="stylesheet" href="./vista/css/proveedores.css"
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
    <script type="text/javascript">


          function regis(){
            var respuesta = confirm("¿Deseas registrar el proveedor?");

            if(respuesta ==true){

              return true;
            }else {

              return false;
            }
          }


          function actualizar(){
            var respuesta = confirm("¿Estas seguro que deseas actualizar el proveedor?");

            if(respuesta ==true){

              return true;
            }else {

              return false;
            }
          }


</script>
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
            <img src="img/logo.pNg" class="logofz">
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
                <a href="proveedor.php">
                <i class="fas fa-dolly"></i>
                    <span class="links_name">PROVEEDORES</span>

                </a>
                <span class="tooltip">PROVEEDORES</span>
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
        <img src="img/<?php echo  $foto ?>" alt="">
        <span class="admin_name"><?php echo $nombre ?></span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>

    <div class="home-content">
     

      <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="title">PROVEEDORES</div>
          <br>
          <div class="sales-details">

         <?php if($proveedores){
             ?>
          <table>
               <tr>
            
       
                   <th>ID</th>
                   <th>Nombre</th>
                   <th>Dirección</th>
                   <th>Celular</th>
                   
                  
               </tr>
               <tbody>
               <?php 
              foreach($proveedores as $f){
                   ?>
               <tr>
                   <td><?php echo $f[0]; ?></td>
                   <td><?php echo $f[1]; ?></td>
                   <td><?php echo $f[2]; ?></td>
                   <td><?php echo $f[3]; ?></td>
                   <td><form action="" method="POST"> 
                     <input type="hidden" value="<?php echo $f[0]?>" name="criterio">
                     <input type="submit" name="actualizar" class="actualizar" value="Actualizar" >

                      </form>  
                  </td>
                
                  


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
          <div class="title">Registrar Proveedor</div>
          <br>
         
            <form method="POST">
            <input type="text" name="documento" placeholder="Ingresa ID" class="controls">
            <input type="text" name="nombre" placeholder="Ingresa Nombre" class="controls">
            <input type="text" name="direccion" placeholder="Ingresa Direccion" class="controls">
            <input type="text" name="celular" placeholder="Ingresa Celular" class="controls">
            <input type="email" name="correo" placeholder="Ingresa Correo" class="controls">
            <input type="submit" name="registrar" value="Registar" class="registrar" onclick="return regis()">


            </form>
            <br>
            <br>
            <?php

            if(isset($_POST['actualizar'])){ 

                if($solo){ 

                    foreach($solo as $f){ 
            ?>

            <h3>Actualizar Proveedor</h3>

            
            <form action="" method="POST">

                    <label>Documento:</label><br>
                    <label><?php echo $f[0]; ?></label><br>
                    <input type="hidden" name="documentoo" value="<?php echo $f[0]; ?>" class="controls"><br>
                    <label>Nombre:</label><br>
                    <input type="text" name="nombree" value="<?php echo $f[1]; ?>" class="controls"><br>
                    <label>Dirección:</label><br>
                    <input type="text" name="direccionn" value="<?php echo $f[2]; ?>" class="controls"><br>
                    <label>Celular:</label><br>
                    <input type="text" name="celularr" value="<?php echo $f[3]; ?>" class="controls"><br>
                    <label>Correo:</label><br>
                    <input type="email" name="correoo" value="<?php echo $f[4]; ?>" class="controls"><br>
                    <input type="submit" name="nuevo" value="Actualizar" class="actualiza"  onclick="return actualizar()">
          
            </form>

              <?php
                   }
                  }
                 }
            ?>


        </div>
      </div>
       
    
    </div>

   <br>
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
