<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Bodega</title>
    <link rel="stylesheet" href="./vista/css/pedid_menu.css">
    <link rel="stylesheet" href="./vista/css/usuarios.css">
    <link rel="stylesheet" href="./vista/css/bode.css">
    <link rel="stylesheet" href="./vista/css/contene.css">
   
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

        function materia(){
          var respuesta = confirm("¿Estas seguro que deseas registrar la materia prima?");

          if(respuesta ==true){

            return true;
          }else {

            return false;
          }
        }


        function entrega(){
          var respuesta = confirm("¿Deseas registrar la entrega del material?");

          if(respuesta ==true){

            return true;
          }else {

            return false;
          }
        }


        function actualizar(){
          var respuesta = confirm("¿Estas seguro que deseas actualizar?");

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
        <img src="img/<?php echo $foto ?>" alt="">
        <span class="admin_name"><?php echo $nombre ?></span>
        <i class='bx bx-chevron-down' ></i>
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
                   <td><form method="post">
                      <input type="hidden" name="criterio" value="<?php echo $f[0]; ?>">
                      <input type="submit" name="actualizar" value="Actualizar" class="actualizar">
                   </form></td>
                  


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
              <select name="proveedor" class="usuario">
                    <option value="0">Proveedor</option>
                    <?php 
                    if($proveedor){ 

                      foreach($proveedor as $p){ 
                    ?>
                    <option value="<?php echo $p[0]; ?>"><?php echo $p[1];?></option>
                    <?php 
                      }
                    }

                    ?>
              </select>
              <input type="text" name="tipo" class="usuario" placeholder="Tipo Material">
              <input type="number" name="cantidad" class="password" placeholder="Cantidad">
              <input type="text" name="descripcion" class="descripcion" placeholder="Descripción">
              <input type="number" name="valor" class="valor" placeholder="Valor unitario" >
              <input type="submit" class="enviar" name="enviar" value="Registrar" onclick="return materia()">
              

            </form> 
            

        </div>
            
      </div>
       <br>
       <?php
          if(isset($_POST['actualizar'])){
            
            foreach($uno as $f){ 
     
       ?>
       <div class="sales-boxes" id="contenedor">
      
        <div class="top-sales box">
    
           <div class="title">Actualizar Registro</div>

            <form method="POST" class="registro" >
              <label>ID:</label><br>
              <input type="text" name="idd" class="controls" value="<?php echo $f[0]; ?>" >
              <label>ID Proveedor:</label><br>
              <input type="text" name="proveedorr" class="controls" value="<?php echo $f[1]; ?>">
              <label>Tipo:</label><br>
              <input type="text" name="tipoo" class="controls" value="<?php echo $f[2]; ?>">
              <label>Cantidad:</label><br>
              <input type="number" name="cantidadd" class="controls" value="<?php echo $f[3]; ?>">
              <label>Descripcion:</label><br>
              <input type="text" name="descripcionn" class="controls" value="<?php echo $f[4]; ?>">
              <label>Valor Unitario:</label><br>
              <input type="number" name="valorr" class="controls" value="<?php echo $f[5]; ?>" >
              <input type="submit" class="actualizarr" name="actualizarr" value="Actualizar" onclick="return actualizar()">
              

            </form> 
            

        </div>
            
      </div>
      <?php
           }
          }
      ?>
      <br>
      <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="title">MATERIAL SUMINISTRADO</div>
          <br>
          <div class="sales-details">
         <?php if($entre){
             ?>
          <table>
               <tr>
       
                   <th>ID</th>
                   <th>ID Material</th>
                   <th>Documento Recibe</th>
                   <th>Descripcion</th>
                   <th>Cantidad</th>
                   <th>Fecha Entrega</th>
                   <th>ID Pedido</th>
                   <th>ID Producto</th>
    
               </tr>
               <tbody>
               <?php 
              foreach($entre as $f){
                   ?>
               <tr>
                   <td><?php echo $f[0]; ?></td>
                   <td><?php echo $f[1]; ?></td>
                   <td><?php echo $f[3]; ?></td>
                   <td><?php echo $f[4]; ?></td>
                   <td><?php echo $f[5]; ?></td>
                   <td><?php echo $f[6]; ?></td>
                   <td><?php echo $f[7]; ?></td>
                   <td><?php echo $f[8]; ?></td>
                   <td><form method="post">
                      <input type="hidden" name="criterioo" value="<?php echo $f[0]; ?>">
                      <input type="submit" name="actualiza" value="Actualizar" class="actualizar">
                   </form></td>


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
                if($personal){ 
                foreach($personal as $f){ ?>
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
            
            <select name="idpedido" class="descripcion"><br>
                <option value="0">ID Pedido</option>
                <?php
                    if($pedido){ 
                    foreach($pedido as $f){ ?>
                    <option value="<?php echo $f[0];?>"><?php echo $f[0];?></option>

                  <?php 

                    }
                  }
                ?>
				 			
	         </select>
           <input type="number" name="idproducto" class="descripcion" placeholder="Ingresa ID Producto">
            <input type="text" name="descripcion" class="descripcion" placeholder="Descripción">
            <input type="number" name="cantidad" class="valor" placeholder="Cantidad" >
            <input type="date" name="fechaen" class="fecha" >
            <input type="submit" class="enviar" name="enviarnu" value="Registrar" onclick="return entrega()">
            

          </form> 

        </div>
      </div>
      <br>
       <?php
          if(isset($_POST['actualiza'])){

            if($dos){ 
            
            foreach($dos as $f){ 
     
       ?>
       <div class="sales-boxes" id="contenedor">
      
        <div class="top-sales box">
    
           <div class="title">Actualizar Registro</div>

            <form method="POST" class="registro" >


              <label>ID:</label><br>
              <input type="text" name="id_m" class="controls" value="<?php echo $f[0]; ?>" >

              <label>ID Material:</label><br>
                <select name="id_material" class="controls"><br>
                  <option value="<?php echo $f[1]; ?>"><?php echo $f[1]; ?></option>
                    <?php
                        if($com){ 
                        foreach($com as $o){ ?>
                        <option value="<?php echo $o[0];?>"><?php echo $o[0];?>, ( <?php echo $o[1];?>)</option>

                      <?php 

                        }
                      }
                    ?>
                      
              </select>

              <label>Documento Entrega:</label><br><br>
              <label><?php echo $f[2]; ?></label><br><br>
              <input type="hidden" name="documento_entrega" class="controls" value="<?php echo $f[2]; ?>">

              <label>Documento Recibe:</label><br>
              <select name="documento_recibe" class="controls"><br>
                <option value="<?php echo $f[3]; ?>"><?php echo $f[3]; ?></option>
                <?php
                    if($combo){ 
                    foreach($combo as $a){ ?>
                    <option value="<?php echo $a[0];?>"><?php echo $a[0];?>, ( <?php echo $a[1];?>)</option>

                  <?php 

                    }
                  }
                ?>
                  
              </select>
              <label>ID Producto:</label><br>
              <input type="number" name="idproductoo" class="controls" value="<?php echo $f[8]; ?>">
              <label>ID Pedido:</label><br>
              <select name="idpedidoo" class="controls"><br>
                <option value="<?php echo $f[7]; ?>"><?php echo $f[7]; ?></option>
                <?php
                    if($pedido){ 
                    foreach($pedido as $e){ ?>
                    <option value="<?php echo $e[0];?>"><?php echo $e[0];?></option>

                  <?php 

                    }
                  }
                ?>
				 			
	            </select>
              <label>Descripcion:</label><br>
              <input type="text" name="descripcionn" class="controls" value="<?php echo $f[4]; ?>">

              <label>Cantidad:</label><br>
              <input type="number" name="canti" class="controls" value="<?php echo $f[5]; ?>" >

              <label>Fecha Entrega:</label><br><br>
              <label><?php echo $f[6]; ?></label>
              <input type="hidden" name="fecha" value="<?php echo $f[6]; ?>">
              <input type="date" name="fechaa" class="controls" >
              
              <input type="submit" class="actualizarr" name="actua" value="Actualizar" onclick="return actualizar()">
              

            </form> 
            

        </div>
            
      </div>
      <?php
           }
          }
        }
      ?>
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
