<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./vista/css/admi.css">
    <link rel="stylesheet" href="./vista/css/operario.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/banca-en-linea.svg" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <title>Operario</title>

</head>
<body>  
    
<div class="sidebar">
        <div class="logo_content">
            <div class="logo">
                <img src="./img/logo.jpg" class="logofz">
                <div class="logo_name">FZ PUBLICIDAD</div>
            
            </div>
            <i class='bx bx-menu' id="btn"></i>
        </div>
        <br><br><br><br><br>
        <ul class="nav_list">
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
    
   
       
                <script>

        let btn=document.querySelector("#btn");
        let sidebar=document.querySelector(".sidebar");
        
        btn.onclick=function() {
            sidebar.classList.toggle("active");

        }
        .onclick=function() {
            sidebar.classList.toggle("active");

        }

    </script>
 </div>
 
 <div class="contenedor">

   

 </div>

 <img src="img/logo.jpg" class="imagen">

 <section class="contenedor2">
  <div class="contenido">
        <ul>
                    <li><i class="icono fas fa-at"></i> Correo:</li>
                    <li><i class="icono fas fa-phone-alt"></i> Telefono:</li>
                    <li><i class="icono fas fa-briefcase"></i> Rol:</li>
                    <li><i class="icono fas fa-venus-mars"></i> Sexo:</li>
        </ul>
       
  </div>
  <div class="contenidod">

        <ul>
                    <li><i class="icono fas fa-id-card"></i> Documento:</li>
                    <li><i class="icono fas fa-calendar-alt"></i> Fecha nacimiento:</li>
                    <li><i class="icono fas fa-user-check"></i> Usuario:</li>
                    <li><i class="icono fas fa-share-alt"></i> Estado:</li>
        </ul>
  </div>
</section>


<div class="redes-sociales">
                <a href="" class="boton-redes facebook fab fa-facebook-f"><i class="icon-facebook"></i></a>
                <a href="" class="boton-redes twitter fab fa-twitter"><i class="icon-twitter"></i></a>
                <a href="" class="boton-redes instagram fab fa-instagram"><i class="icon-instagram"></i></a>
</div>


</body>
</html>