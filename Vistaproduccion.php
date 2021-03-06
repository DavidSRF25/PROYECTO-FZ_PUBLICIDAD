<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Produccion</title>
    <link rel="stylesheet" href="./vista/css/pedid_menu.css">
    <link rel="stylesheet" href="./vista/css/otros.css">
    <link rel="stylesheet" href="./vista/css/tablee.css">
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
                
                    <span class="links_name">PRODUCCI??N</span>

                </a>
                <span class="tooltip">PRODUCCI??N</span>
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
        <img src="img/<?php echo $foto ?>" alt="">
        <span class="admin_name"><?php echo $nombre ?></span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>

    <div class="home-content">
     

      <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="title">PRODUCCION EN PROCESO</div>
          <br>
          <div class="sales-details">

         <?php if($enproceso){
             ?>
          <table>
               <tr>
        
                   <th>ID </th>
                   <th>ID Pedido</th>
                   <th>ID Entrega Material</th>
                   <th>Estado</th>
                   <th>Descripcion</th>
                   <th>Ambiente</th>
                   <th>Cantidad</th>
                   <th>Fecha Entrega</th>

               </tr>
               <tbody>
               <?php 
              foreach($enproceso as $f){
                   ?>
               <tr>
                   <td><?php echo $f[0]; ?></td>
                   <td><?php echo $f[1]; ?></td>
                   <td><?php echo $f[2]; ?></td>
                   <td><?php echo $f[3]; ?></td>
                   <td><?php echo $f[4]; ?></td>
                   <td><?php echo $f[5]; ?></td>
                   <td><?php echo $f[6]; ?></td>
                   <td><?php echo $f[7]; ?></td>
                   


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
          <div class="title">PRODUCCCION FINALIZADA</div>
          
            <br>
         <?php if($finalizado){
             ?>
          <table>
               <tr>
       
                   <th>ID </th>
                   <th>ID Pedido</th>
                   <th>ID Entrega Material</th>
                   <th>Estado</th>
                   <th>Ambiente</th>
               


               </tr>
               <tbody>
               <?php 
              foreach($finalizado as $f){
                   ?>
               <tr>

                   <td><?php echo $f[0]; ?></td>
                   <td><?php echo $f[1]; ?></td>
                   <td><?php echo $f[2]; ?></td>
                   <td><?php echo $f[3]; ?></td>
                   <td><?php echo $f[5]; ?></td>
                  



               </tr>
               </tbody>
               <?php 
                 }
            }
          ?>
            </table>
          

        </div>
      </div>
            <br>

      <?php    
      
        if(isset($_POST['detalles'])){

        ?>
       <div class="sales-boxes">
        <div class="recent-sales box">
         
          <br>
          <div class="sales-details">

          <?php 
              foreach($deta as $f){
                   ?>
          <form  class="informacion" >

            <label class="label1">ID:  <?php echo $f[0];?></label><br><br>
            <label class="label2">IDProducto: <?php echo $f[1];?></label><br><br>
            <label class="label3">Cantidad: <?php echo $f[2];?></label><br><br>
            <label class="label4">Valor Unitario: <?php echo $f[3];?></label><br><br>
            <label class="label5">Valor total: <?php echo $f[4];?></label><br><br>
            <label class="label6">Tama??o: <?php echo $f[5];?></label><br><br>
            <label class="label7">Color: <?php echo $f[6];?></label><br><br>
            <label class="label8">Logo:</label> <img src="img/<?php echo $f[7]; ?>" alt="" width="60" height="60"><br><br>
            <label class="label9">Documento Cliente: <?php echo $f[8];?></label><br><br>
            <label class="label10">Fecha compra: <?php echo $f[9];?></label><br><br>
            
     
          </form>
          <?php 
                 }
            
          ?>
        </div>
        <?php 
        
          }
        ?>
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
