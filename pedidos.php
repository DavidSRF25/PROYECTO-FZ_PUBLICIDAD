<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Pedidos</title>
    <link rel="stylesheet" href="./vista/css/pedid_menu.css">
    <link rel="stylesheet" href="./vista/css/otroos.css">
    <link rel="stylesheet" href="./vista/css/nuevo.css">
    <link rel="stylesheet" href="./vista/css/formularioo.css">
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


        function registrar(){
          var respuesta = confirm("¿Deseas registrar el pedido?");

          if(respuesta ==true){

            return true;
          }else {

            return false;
          }
        }


        function actua(){
          var respuesta = confirm("¿Estas seguro que deseas actualizar el pedido?");

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
       <img src="img/<?php echo  $fotito ?>"  alt="">
        <span class="admin_name"><?php echo $usuarion ?></span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>

    <div class="home-content">
    <div class="sales-boxes">
        
        <div class="recent-sales box">
          <div class="title">PEDIDOS CLIENTES</div>
          <br>
          <div class="sales-details">

         <?php if($clientes){
             ?>
          <table id="tabla_uno">
               <tr>
       
                   <th>ID </th>
                   <th>Documento cliente</th>
                   <th>Total</th>
                   <th>Fecha compra</th>

               </tr>
               <tbody>
               <?php 
              foreach($clientes as $f){
                   ?>
               <tr>
                   <td><?php echo $f[0]; ?></td>
                   <td><?php echo $f[1]; ?></td>
                   <td><?php echo $f[2]; ?></td>
                   <td><?php echo $f[3]; ?></td>
                   <td><form method="post">
                        <input type="hidden" name="dato" value="<?php echo $f[0]; ?>">
                        <input type="submit" name="de" value="Detalles"  class="detalles">
                   </form></td>
               </tr>
               </tbody>
              
            </table>
             <?php 
                 }
            }
          ?>
          
            
          
          </div>
            
            
        </div>
            
        <div class="top-sales box">
          <div class="title">ASIGNAR PEDIDO OPERARIO</div>
          
            <form method="POST">

            <label>ID Pedido</label>
            <select name="idpedido" class="idpedido">
                    <option value="0">Seleccione</option>
                    <?php if($clientes)
                    
                    foreach($clientes as $f){ {
             ?>     <option value="<?php echo $f[0]; ?>"><?php echo $f[0]; ?></option>
                     <?php 
                 }
                }
          ?>
            </select>
            
            <label>ID Operario</label>
            <select name="idoperario" class="idoperario">
                    <option value="0">Seleccione</option>
                    <?php if($operarios)
                    
                    foreach($operarios as $f){ {
             ?>     <option value="<?php echo $f[0]; ?>"><?php echo $f[1]; ?> (<?php echo $f[3]; ?>, <?php echo $f[0]; ?>)</option>
                     <?php 
                 }
                }
          ?>

            </select>
            <input type="submit" name="enviar" class="envio" value="Registrar" onclick="return registrar()">



            </form>
                <br>
                <br>
               <center><h3>ACTUALIZAR PEDIDO</h3></center>
               <br>
            <form method="POST">

                  <label>ID </label>
                  <select name="ida" class="idpedido">
                          <option value="0">Seleccione</option>
                          <?php if($asignados)
                          
                          foreach($asignados as $f){ {
                  ?>     <option value="<?php echo $f[0]; ?>"><?php echo $f[0]; ?></option>
                          <?php 
                      }
                      }
                  ?>
                  </select>
                  <label>ID Pedido</label>
                  <select name="idpedidoa" class="idpedido">
                          <option value="0">Seleccione</option>
                          <?php if($clientes)
                          
                          foreach($clientes as $f){ {
                  ?>     <option value="<?php echo $f[0]; ?>"><?php echo $f[0]; ?></option>
                          <?php 
                      }
                      }
                  ?>
                  </select>
                  
                  <label>ID Operario</label>
                  <select name="idoperarioa" class="idoperario">
                          <option value="0">Seleccione</option>
                          <?php if($operarios)
                          
                          foreach($operarios as $f){ {
                  ?>     <option value="<?php echo $f[0]; ?>"><?php echo $f[1]; ?> (<?php echo $f[3]; ?>, <?php echo $f[0]; ?>)</option>
                          <?php 
                      }
                      }
                  ?>

                  </select>
                  <input type="submit" name="actualizar" class="envio" value="Actulizar" onclick="return actua()">



            </form>


        </div>
      </div>  

        <?php 
          if(isset($_POST['de'])){ 

        ?>
    <div class="home-content">
    <div class="sales-boxes">
        
        <div class="recent-sales box">
          <div class="title">DETALLES DE LOS PEDIDOS CLIENTES</div>
          <br>
          <div class="sales-details">

         <?php if($detalles){
             ?>
          <table >
               <tr>
       
                   <th>ID Pedido </th>
                   <th>ID Producto</th>
                   <th>Cantidad</th>
                   <th>Valor unitario</th>
                   <th>Valor Total</th>
                   <th>Tamaño</th>
                   <th>Color</th>
                   <th>Logo</th>
                   <th>Producto</th>


               </tr>
               <tbody>
               <?php 
              foreach($detalles as $f){
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
                   <td><img src="img/<?php echo $f[8]; ?>" alt="" width="60" height="60"></td>

               </tr>
               </tbody>
              <?php 
                 }
            }
          ?>
            </table>
             
          
            
          
          </div>
            
            
        </div>
       
      </div>  
        <?php
          }
        ?>  
        
      <br>
      <div class="sales-boxes">
        
        <div class="recent-sales box">
          <div class="title">PEDIDOS ASIGNADOS</div>
          <br>
          <div class="sales-details">

         <?php if($asignados){
             ?>
          <table class="tablaasignada">
               <tr>
       
                   <th>ID</th>
                   <th>ID Pedido</th>
                   <th>Documento Operario</th>
                   
               </tr>
               <tbody>
               <?php 
              foreach($asignados as $f){
                   ?>
               <tr>
                   <td><?php echo $f[0]; ?></td>
                   <td><?php echo $f[1]; ?></td>
                   <td><?php echo $f[2]; ?></td>

               



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
                   <th>Documento Cliente</th>
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
                   <td><?php echo $f[3]; ?></td>



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

        
            <br>

     
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
