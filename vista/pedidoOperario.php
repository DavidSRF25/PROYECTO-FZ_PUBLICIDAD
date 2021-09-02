<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Pedidos</title>
    <link rel="stylesheet" href="./vista/css/pedidos.css">
    <link rel="stylesheet" href="./vista/css/otros.css">
    <link rel="stylesheet" href="./vista/css/operario.css">
    
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
            <img src="img/logo.jpg" class="logofz">
            <div class="logo_name">FZ PUBLICIDAD</div>
    </div>
    <br><br><br><br>
      <ul class="nav-links">
        <li>
                <a href="pedidoOpe.php">
                    <i class='bx bxs-dashboard'></i>
                    <span class="links_name">PEDIDOS</span>

                </a>
                <span class="tooltip">PEDIDOS</span>
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
                    <span class="links_name">MATERIAL</span>

                </a>
                <span class="tooltip">MATERIAL</span>
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
        <img src="images/profile.jpg" alt="">
        <span class="admin_name">Prem Shahi</span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>

    <div class="home-content">
     

      <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="title">PEDIDOS DE PRODUCCION</div>
          <br>
          <div class="sales-details">

         <?php if($datos){
             ?>
          <table>
               <tr>
       
                   <th>ID Pedido</th>
                   <th>ID Producto</th>
                   <th>Cantidad</th>
                   <th>Documento Cliente</th>
                   <th>Fecha Compra</th>
                   <th>Estado</th>

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
                   <td><form action="" method="POST">
                   <input type="hidden" value="<?php echo $f[0];?>" name="Criterio">
                   <input type="submit" name="detalles" value="detalles" class="detalles">             
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
          <div class="title">REGISTRAR</div>
          
            <br>

            <form method="POST">
            <label class="label1">ID Pedido:</label><br>
            <select name="idpedido" class="idpedido" required>
                                    <option value="0">Seleccione</option>
                                    <option value="ADMINISTRADOR">Administrador</option>
                                    <option value="CORTADOR">Cortador</option>
                                    <option value="ESTAMPADOR">Estampador</option>
                                    <option value="COSTURERO">Costurero</option>
                                 
            </select>
            <label class="label2">ID Entrega Material:</label><br>
            <select name="idmaterial" class="idmaterial" required>
                                    <option value="0">Seleccione</option>
                                  
            </select>
            <label class="label3">Estado:</label><br>
            <select name="estado" class="estado" required>
                                    <option value="0">Seleccione</option>
                                    <option value="SIN COMENZAR">SIN COMENZAR</option>
                                    <option value="EN PROCESO">EN PROCESO</option>
                                    <option value="FINALIZADO">FINALIZADO</option>
                             
                                 
            </select>
            <label class="label4">Descripcion:</label><br>
            <input type="text" name="descripcion" class="descripcion" placeholder="Mensaje">
            <select name="ambiente" class="ambiente" required>
                                    <option value="0">Seleccione</option>
                                    <option value="CORTE">CORTE </option>
                                    <option value="ESTAMPADO">ESTAMPADO</option>
                                    <option value="COSTURA">COSTURA</option>
                             
                                 
            </select>
            <label class="label5">Cantidad:</label><br>
            <input type="number" name="cantidad" class="cantidad" placeholder="Ingresa cantidad">
            <label class="label6">Fecha Entrega:</label><br>
            <input type="date" name="fecha" class="fecha" >
            <input type="submit" class="enviar" name="enviar" value="Registrar">



            </form>
          

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
            <label class="label6">Tamaño: <?php echo $f[5];?></label><br><br>
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


        <!-- FILA 2 -->

        <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="title">PEDIDOS EN PROCESO</div>
          <br>
          <div class="sales-details">

         <?php if($datos){
             ?>
          <table>
               <tr>
       
                   <th>ID Pedido</th>
                   <th>ID Producto</th>
                   <th>Cantidad</th>
                   <th>Documento Cliente</th>
                   <th>Fecha Compra</th>
                   <th>Estado</th>

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
                   <td><form action="" method="POST">
                   <input type="hidden" value="<?php echo $f[0];?>" name="Criterio">
                   <input type="submit" name="detalles" value="detalles" class="detalles">             
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
          <div class="title">PEDIDOS FINALIZADOS</div>
          
            <br>
         <?php if($fin){
             ?>
          <table>
               <tr>
       
                   <th>ID Pedido</th>
                   <th>ID Producto</th>
                   <th>Estado</th>

               </tr>
               <tbody>
               <?php 
              foreach($fin as $f){
                   ?>
               <tr>
                   <td><?php echo $f[0]; ?></td>
                   <td><?php echo $f[1]; ?></td>
                   <td><?php echo $f[2]; ?></td>
                   <td><form action="" method="POST">
                   <input type="hidden" value="<?php echo $f[0];?>" name="Criterio">
                   <input type="submit" name="detalles" value="detalles" class="detalles">             
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
            <label class="label6">Tamaño: <?php echo $f[5];?></label><br><br>
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
