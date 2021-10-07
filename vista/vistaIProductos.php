<!DOCTYPE html>

<html lang="es" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Productos</title>
    <link rel="stylesheet" href="./vista/css/ped.css">
    <link rel="stylesheet" href="./vista/css/otros.css">
    <link rel="stylesheet" href="./vista/css/producto.css">
    
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
      <a href="ADMINISTRADOR.php">
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
        <img src="img/<?php echo $foto ?>" alt="">
        <span class="admin_name"><?php echo $nombreu ?></span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>

    <div class="home-content">
     

      <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="title">PRODUCTOS</div>
          <br>
          <div class="sales-details">
          <?php if($productos){
             ?>
          <table>
               <tr>
       
                   <th>ID </th>
                   <th>Nombre Producto</th>
                   <th>Valor Unitario</th>
                   <th>Color</th>
                   <th>Tamaño</th>
                   <th>Logo</th>
                   <th>Cantidad</th>
                   <th>Foto</th>


               </tr>
               <tbody>
               <?php 
              foreach($productos as $f){
                   ?>
               <tr>

                   <td><?php echo $f[0]; ?></td>
                   <td><?php echo $f[1]; ?></td>
                   <td><?php echo $f[2]; ?></td>
                   <td><?php echo $f[3]; ?></td>
                   <td><?php echo $f[4]; ?></td>
                   <td><?php echo $f[5]; ?></td>
                   <td><?php echo $f[6]; ?></td>
                   <td><img src="img/<?php echo $f[7]; ?>" alt="" width="60" height="60"></td>



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
          <div class="title">REGISTRAR PRODUCTOS</div>
            
          <form method="POST" enctype="multipart/form-data">
           <label>ID</label><br>
           <input type="text" name="id" class="documento" placeholder="Ingresa ID">
           <label>Nombre Producto</label><br>
           <input type="text" name="nombre" class="documento" placeholder="Ingresa nombre">
           <label>Valor Unitario</label><br>
           <input type="number" name="valor" class="documento" placeholder="Ingresa valor unitario">
           <label>Color</label><br>
           <input type="text" name="color" class="documento" placeholder="Ingresa color">
           <label>Tamaño</label><br>
           <input type="text" name="tamaño" class="documento" placeholder="Ingresa tamaño">
           <label>Logo</label><br>
           <input type="file" name="logo" class="documento"><br>
           <label>Cantidad</label><br>
           <input type="number" name="cantidad" class="documento" placeholder="Ingresa cantidad">
           <label>Foto</label><br>
           <input type="file" name="foto" class="documento"><br>
           <textarea name="descripcion"   class="documento"placeholder="Descripcion del producto" cols="30" rows="10"></textarea>
           <input type="submit" name="enviar" class="registrar" value="Registrar">
        
        
         </form>
     
            

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
