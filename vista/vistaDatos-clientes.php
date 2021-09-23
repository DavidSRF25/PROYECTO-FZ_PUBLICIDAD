<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Clientes</title>
    <link rel="stylesheet" href="./vista/css/pedidos.css">
    <link rel="stylesheet" href="./vista/css/usuarios.css">
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
          <div class="title">Clientes</div>
          <br>
          <div class="sales-details">

         <?php if($todos){
             ?>
          <table>
               <tr>
            
       
                   <th>Documento</th>
                   <th>Nombre</th>
                   <th>Apellido</th>
                   <th>Rol</th>
                   <th>Correo</th>
                  
               </tr>
               <tbody>
               <?php 
              foreach($todos as $f){
                   ?>
               <tr>
                   <td><?php echo $f[0]; ?></td>
                   <td><?php echo $f[1]; ?></td>
                   <td><?php echo $f[2]; ?></td>
                   <td><?php echo $f[3]; ?></td>
                   <td><?php echo $f[4]; ?></td>
                   <td><form action="" method="POST"> 
                     <input type="hidden" value="<?php echo $f[0]?>" name="Criterio">
                     <input type="submit" name="detalles" class="detalles" value="Detalles" >

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
          <div class="title">DATOS DEL CLIENTE SELECCIONADO</div>
          <br>
         
        <?php    
      
           if(isset($_POST['detalles'])){

        ?>

        
        <?php 
            foreach($detalle as $f){
        ?>
        
        <form class="informacion">
  
          <label class="label1">Documento: <?php echo $f[0];?></label><br><br>
          <label class="label2">Nombre: <?php echo $f[1];?></label><br><br>
          <label class="label3">Apellido: <?php echo $f[2];?></label><br><br>
          <label class="label4">Correo: <?php echo $f[3];?></label><br><br>
          <label class="label5">celular: <?php echo $f[4];?></label><br><br>
          <label class="label6">Sexo: <?php echo $f[5];?></label><br><br>
          <label class="label7">Dirección: <?php echo $f[6];?></label><br><br>
          <label class="label9">Fecha Nacimiento: <?php echo $f[7];?></label><br><br>
     
          
        </form>
      
        <?php 
               }
            
       }
          
        ?>

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
