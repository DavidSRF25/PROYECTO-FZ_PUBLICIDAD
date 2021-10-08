<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Pedidos</title>
    <link rel="stylesheet" href="./vista/css/pedidosope.css">
    <link rel="stylesheet" href="./vista/css/tablee.css">
    <link rel="stylesheet" href="./vista/css/otroos.css">
    <link rel="stylesheet" href="./vista/css/operario.css">
    <link rel="stylesheet" href="./vista/css/pedoperario.css">
    <link rel="stylesheet" href="./vista/css/op.css">
    
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

        function ConfirmDelete(){
          var respuesta = confirm("¿Estas seguro que deseas eliminar?");

          if(respuesta ==true){

            return true;
          }else {

            return false;
          }
        }


        function registrar(){
          var respuesta = confirm("¿Deseas registrar el proceso?");

          if(respuesta ==true){

            return true;
          }else {

            return false;
          }
        }


        function actua(){
          var respuesta = confirm("¿Estas seguro que deseas actualizar el proceso?");

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
                <a href="actualizaroperario.php">
                <i class="fas fa-user-cog"></i>
                    <span class="links_name">EDITAR</span>

                </a>
               <span class="tooltip">EDITAR</span>
            </li>


            <li>
                <a href="materialoperario.php">
                <i class="fas fa-cube"></i>
                    <span class="links_name">MATERIAL</span>

                </a>
                <span class="tooltip">MATERIAL</span>
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
          <div class="title">PEDIDOS DE PRODUCCION</div>
          <br>
          <div class="sales-details">

         <?php if($datos){
             ?>
          <table>
               <tr>
                   <th>ID</th>
                   <th>ID Pedido</th>
                   <th>ID Operario</th>
                 
                  
                  

               </tr>
               <tbody>
               <?php 
              foreach($datos as $f){
                   ?>
               <tr>
                   <td><?php echo $f[0]; ?></td>
                   <td><?php echo $f[1]; ?></td>
                   <td><?php echo $f[2]; ?></td>
                   <td><form method="post">
                      <input type="hidden" value="<?php echo $f[1] ?>" name="criterio">
                      <input type="submit" name="detalles" class="detalles" value="Detalles"> 

                   </form></td>
                
                  



               </tr>
               </tbody>
               <?php 
                 }
            }
          ?>
            </table>
           
           
          
          </div>
          <?php
            
            if(isset($_POST['detalles'])){ 
            
                  if($otros){
             ?>
          <table>
               <tr>
         
            
                   <th>ID Producto</th>
                   <th>ID Pedido</th>
                   <th>Entrega Material</th>
                   <th>Cantidad</th>
                   <th>Tamaño</th>
                   <th>Color</th>
                   <th>Logo</th>
                   <th>Imagen</th>
                  
                 
                  
                  

               </tr>
               <tbody>
               <?php 
              foreach($otros as $f){
                   ?>
               <tr>
              
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
          }
          ?>
            </table>
          
         
        
        </div>

        <div class="top-sales box">
          <div class="title">REGISTRAR COMIENZO PROCESO</div>
          
            <br>

            <form method="POST">
            <label class="label1">ID Pedido:</label><br>
            <select name="idpedido" class="idpedido" required>
                  <option value="0">Seleccione</option>
                  <?php 
                    foreach($datos as $f){
                   ?> 
                              <option value="<?php echo $f[1] ?>"><?php echo $f[1] ?></option>
                                    
                    <?php
                     }
                     ?>       
            </select><br>
            <label class="label2">ID Entrega Material:</label><br>
            <select name="idmaterial" class="idmaterial" required>
                                    <option value="0">Seleccione</option>
                     <?php if($material){

                          foreach($material as $f){

                     
                        ?>   <option value="<?php echo $f[0] ?>"><?php echo $f[0] ?></option>


                        <?php
                          }
                        }
                        
                        ?>
                                  
            </select>
            <label class="label4">ID Producto:</label><br>
            <input type="number" name="idproducto" class="descripcion" placeholder="ID Producto">
            <label class="label3">Estado:</label><br>
            <select name="estado" class="estado" required>
                                    <option value="0">Seleccione</option>
                                    <option value="EN PROCESO">EN PROCESO</option>
                               
                             
                                 
            </select>
            <label class="label4">Descripcion:</label><br>
            <input type="text" name="descripcion" class="descripcion" placeholder="Mensaje">
            <label >Ambiente:</label>
            <select name="ambiente" class="ambiente" required>
                                    <option value="0">Seleccione</option>
                                    <option value="<?php echo $oficio ?>"><?php echo $oficio ?></option>
                             
                                 
            </select>
            <label class="label5">Cantidad:</label><br>
            <input type="number" name="cantidad" class="cantidad" placeholder="Ingresa cantidad">
            <label class="label6">Fecha Entrega:</label><br>
            <input type="date" name="fecha" class="fecha" >
            <input type="submit" class="enviar" name="enviar" value="Registrar" onclick="return registrar()">



            </form>
          

        </div>
      </div>
            <br>



        <!-- FILA 2 -->

        <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="title">PEDIDOS EN PROCESO</div>
          <br>
          <div class="sales-details">

         <?php if($proceso){
             ?>
          <table>
               <tr>
                   <th>ID</th>
                   <th>ID Pedido</th>
                   <th>ID Entrega Material</th>
                   <th>Estado</th>
                   <th>Descripcion</th>
                   <th>Ambiente</th>
                   <th>Cantidad</th>
                   <th>ID Producto</th>

               </tr>
               <tbody>
               <?php 
              foreach($proceso as $f){
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
                   <td><form method="post">
                    <input type="hidden" name="criterio" value="<?php echo $f[0]; ?>">
                    <input type="hidden" name="criterioo" value="<?php echo $f[1]; ?>">
                    <input type="submit" name="eliminar" value="Eliminar" class="eliminar"  onclick="return ConfirmDelete()">
                   </form></td>



               </tr>
               </tbody>
               <?php 
                 }
            }
          ?>
            </table>
            
            
          </div>
          <form method="POST">
         <input type="submit" name="procesos" class="procesos" value="Visualizar pedidos que estuvieron (EN PROCESO)" >
          </form>
          <br>
          <?php
          if(isset($_POST['procesos'])){ 

            if($procesados){

            

          ?>
          <table>
               <tr>
                   <th>ID</th>
                   <th>ID Pedido</th>
                   <th>ID Entrega Material</th>
                   <th>Estado</th>
                   <th>Ambiente</th>
                   <th>Cantidad</th>
                   <th>Fecha Entrega</th>
               </tr>
               <tbody>
               <?php 
                 foreach($procesados as $f){
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
          }
          ?>
            </table>
         

          

        
        </div>

        <div class="top-sales box">
          <div class="title">ACTUALIZAR PROCESO</div>
        <br>
            <form method="POST">
            <label class="label1">ID Pedido:</label><br>
            <select name="idpedidoo" class="idpedido" required>
                        <option value="0">Seleccione</option>
                        <?php 
                          if($select){ 
                              foreach($select as $f){
                        ?> 
                              <option value="<?php echo $f[1] ?>"><?php echo $f[1] ?></option>
                                    
                        <?php
                        }
                        }
                        ?>            
            </select><br>
            <label class="label2">ID Entrega Material:</label><br>
            <select name="idmateriall" class="idmaterial" required>
                                    <option value="0">Seleccione</option>
                     <?php if($material){

                          foreach($material as $f){

                     
                        ?>   <option value="<?php echo $f[0] ?>"><?php echo $f[0] ?></option>


                        <?php
                          }
                        }
                        
                        ?>
                                  
            </select>
            <label>ID Producto:</label><br>
            <input type="number" name="idproductoo" class="descripcion" placeholder="Ingresa ID Producto">"
            <label class="label3">Estado:</label><br>
            <select name="ingreso" class="estado" required>
                                    <option value="0">Seleccione</option>
                                    <option value="EN PROCESO">EN PROCESO</option>
                                    <option value="FINALIZADO">FINALIZADO</option>
                             
                                 
            </select>
            <label >Ambiente:</label>
            <select name="ambientee" class="ambiente" required>
                                    <option value="0">Seleccione</option>
                                    <option value="<?php echo $oficio ?>"><?php echo $oficio ?></option>
                                    
                             
                                 
            </select>
            <label class="label5">Cantidad:</label><br>
            <input type="number" name="cantidadd" class="cantidad" placeholder="Ingresa cantidad">
            <label class="label6">Fecha Entrega:</label><br>
            <input type="date" name="fechaa" class="fecha" >
            <input type="submit" class="enviar" name="actualizar" value="Actualizar" onclick="return actua()">



            </form>
          

        </div>
      </div>
      <br>
      <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="title">PEDIDOS FINALIZADOS</div>
          <br>
          <div class="sales-details">

         <?php if($finalizado){
             ?>
          <table>
               <tr>
                   <th>ID</th>
                   <th>ID Pedido</th>
                   <th>ID Entrega Material</th>
                   <th>ID Producto</th>
                   <th>Estado</th>
                   <th>Descripcion</th>
                   <th>Ambiente</th>
                   <th>Cantidad</th>

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
