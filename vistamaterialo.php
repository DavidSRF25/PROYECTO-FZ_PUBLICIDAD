<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Material operario</title>
    <link rel="stylesheet" href="./vista/css/actuaope.css">
    <link rel="stylesheet" href="./vista/css/material.css">
    <link rel="stylesheet" href="./vista/css/mate.css">
    <link rel="stylesheet" href="./vista/css/otro.css">
    <link rel="stylesheet" href="./vista/css/nuevo.css">
    <link rel="stylesheet" href="./vista/css/usuarios.css">
    <link rel="stylesheet" href="./vista/css/actualizacion.css">
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

function ConfirmActualiza(){
  var respuesta = confirm("¿Estas seguro que deseas actualizar?");

  if(respuesta ==true){

    return true;
  }else {

    return false;
  }
}

function Registro(){
  var respuesta = confirm("¿Estas seguro que deseas Registrar?");

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
        <img src="img/<?php echo $foto ?>" alt="">
        <span class="admin_name"><?php echo $nombre ?></span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>

    <div class="home-content">
     

      <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="title">MATERIAL ASIGNADO</div>
          <br>
          <div class="sales-details">
         <?php if($datos){
             ?>
          <table>
               <tr>
        
                   <th>ID</th>
                   <th>ID Material</th>
                   <th>Documento Entrega</th>
                   <th>descripcion</th>
                   <th>Cantidad</th>
                   <th>Fecha Entrega</th>
                   <th>ID Pedido</th>
                   <th>ID Producto</th>
                 

               </tr>
               <tbody>
               <?php 
              foreach($datos as $f){
                   ?>
               <tr>
                   <td><?php echo $f[0]; ?></td>
                   <td><?php echo $f[1]; ?></td>
                   <td><?php echo $f[2]; ?></td>
                   <td><?php echo $f[4]; ?></td>
                   <td><?php echo $f[5]; ?></td>
                   <td><?php echo $f[6]; ?></td>
                   <td><?php echo $f[7]; ?></td>
                   <td><?php echo $f[8]; ?></td>
                  
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
          <div class="title">ENTREGAR MATERIAL</div>
         
            <br>


            <form method="POST" >
            <label>ID Material</label>
            <select name="idmaterial" class="idmaterial">
                <option value="0">Seleccione</option>
                <?php
                    if($datos){

                        foreach($datos as $f){

                    
                ?>
                <option value="<?php echo $f[1]?>"><?php echo $f[1]?></option>
                <?php
                      }
                    }
                ?>
            </select>

            <label>Documento Entrega</label><br>
            <label class="nombre"><?php echo $documento?></label>
            <input type="hidden" name="docEntrega" value="<?php echo $documento ?>"><br>
            

            <label>Documento Recibe</label>
            <select name="docRecibe" class="docRecibe">
                <option value="0">Seleccione</option>
                <?php
                    if($operarios){

                        foreach($operarios as $f){

                    
                ?>
                <option value="<?php echo $f[0]?>"> <?php echo $f[1]?> (<?php echo $f[3]?>)</option>

                <?php
                        }
                    }
                ?>
            </select>

            <label>Descripcion</label>
            <input type="text" name="descripcion" class="descripcion" placeholder="Descripcion">

            <label>Cantidad</label>
            <input type="number" name="cantidad" class="cantidad" placeholder="Ingresa cantidad">

            <label>Fecha Entrega</label>
            <input type="date" name="fecha" class="fecha" >

            <input type="submit" name="registrar" class="registrar" value="Registrar" onclick="return Registro()">

            </form>
           
        </div>
      </div>
            <br>

     


    
        <br><br>
   

        
      <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="title">MATERIAL ENTREGADO</div>
          <br>
          <div class="sales-details">
         <?php if($dos){
             ?>
          <table>
               <tr>
        
                   <th>ID</th>
                   <th>ID Material</th>
                   <th>Documento Entrega</th>
                   <th>Documento Recibe</th>
                   <th>descripcion</th>
                   <th>Cantidad</th>
                   <th>Fecha Entrega</th>
                 

               </tr>
               <tbody>
               <?php 
              foreach($dos as $f){
                   ?>
               <tr>
                   <td><?php echo $f[0]; ?></td>
                   <td><?php echo $f[1]; ?></td>
                   <td><?php echo $f[2]; ?></td>
                   <td><?php echo $f[3]; ?></td>
                   <td><?php echo $f[4]; ?></td>
                   <td><?php echo $f[5]; ?></td>
                   <td><?php echo $f[6]; ?></td>
                   <td><form method="post">
                      <input type="hidden" name="criterio" value="<?php echo $f[0]; ?> ">
                      <input type="submit" name="actualizar" value="Actualizar"  class="ac">
                  
               </tr>
               </tbody>
               <?php
              }
            }
          ?>
            </table>
          
          </div>
         
        
        </div>
        <?php 

            if(isset($_POST['actualizar'])){ 
             
             if($solo){ 

               foreach($solo as $f){ 
            
        ?>
        <div class="top-sales box">
          <div class="title">ACTUALIZAR MATERIAL</div>
         
            <br>


            <form method="POST" >
            <label>ID:</label><br>
            <label><?php echo $f[0]; ?></label><br>
            <input type="hidden" name="ID" value="<?php echo $f[0]; ?>">

            <label>ID Material</label>
            <select name="idmateriall" class="idmaterial">
                <option value="<?php echo $f[1]; ?>"><?php echo $f[1]; ?></option>
                <?php
                    if($datos){

                        foreach($datos as $a){

                    
                ?>
                <option value="<?php echo $a[1]?>"><?php echo $a[1]?></option>
                <?php
                      }
                    }
                ?>
            </select>

            <label>Documento Entrega</label><br>
            <label class="nombre"><?php echo $f[2]; ?></label>
            <input type="hidden" name="docEntregaa" value="<?php echo $f[2]; ?>"><br>
            

            <label>Documento Recibe</label>
            <select name="docRecibee" class="docRecibe">
                <option value="<?php echo $f[3]; ?>"><?php echo $f[3]; ?></option>
                <?php
                    if($operarios){

                        foreach($operarios as $e){

                    
                ?>
                <option value="<?php echo $e[0]?>"> <?php echo $e[1]?> (<?php echo $e[3]?>)</option>

                <?php
                        }
                    }
                ?>
            </select>

            <label>Descripcion</label>
            <input type="text" name="descripcionn" class="descripcion" value="<?php echo $f[4]; ?>">

            <label>Cantidad</label>
            <input type="number" name="cantidadd" class="cantidad" value="<?php echo $f[5]; ?>">

            <label>Fecha Entrega</label><br>
            <label><?php echo $f[6]; ?></label><br>
            <input type="hidden" name="fechaa" value="<?php echo $f[6]; ?>">
            <input type="date" name="fe" class="fecha" >

            <input type="submit" name="actua" class="registrar" value="Actualizar" onclick="return ConfirmActualiza()">

            </form>
           
        </div>
      </div>
      <?php
            }
          } 
        }

      ?>
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
