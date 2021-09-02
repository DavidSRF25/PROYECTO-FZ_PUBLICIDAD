<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="vista/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="images/logo.ico" type="image/x-icon">
</head>
<body>
    <div class="header">
       <div class="container">
          <div class="navbar">
              <div class="logo">
                  <a href="index.php"><img src="images/logo.png" width="125px"></a>
              </div>
              <nav>
               <ul id="MenuItems">
                   <li><a href="index.php">Inicio</a></li>
                   <li><a href="productos.php">Productos</a></li>
                   <li><a href="">Acerca de</a></li>
                   <li><a href="">Contacto</a></li>
                   <li><a href="login.php">Cuenta</a></li>
               </ul>
              </nav>
              <a href="carrito.php"><img src="images/cart.png" width="30px" height="30px"></a>
              <img src="images/menu.png" onclick="menutoggle()" class="menu-icon">
          </div>
          
          
       </div>
    </div>
       
<!--------------Cart Items details--------------->
<div class="accout-page">
    <div class="container">
  
       <div class="row">
         
          <div class="col-2">
             <img src="images/image1.png" width="100%">
          </div>
          
           <div class="col-2">
              <div class="form-container" id="Formulario">
                 <div class="form-btn">
                     <span onclick="login()">Login</span>
                     <span onclick="register()">Registrarse</span>
                     <hr id="indicator">
                 </div>
                 
               <form id="LoginForm" method="POST">
                   <input type="text" placeholder="Usuario" name="usu">
                   <input type="password" placeholder="Contraseña" name="pass">
                   <button type="submit" name="ingresar" class="btn">Login</button>
                   
               </form>

               <form id="RegForm" method="POST">
                   
                   <input type="text" placeholder="Documento" name="doc">
                   <input type="text" placeholder="Nombre" name="nom">
                   <input type="text" placeholder="Apellido" name="ape">
                   <input type="email" placeholder="Correo" name="correo">
                   <input type="text" placeholder="Telefono" name="celular">

                   
                   <input type="text" placeholder="Direccion" name="direccion">
                   
                   <select name="sexo" >

                   <option value="masculino">Seleccione Sexo</option>
                   <option value="masculino">Masculino</option>
                   <option value="femenino">Femenino</option>

                   </select>
                   <input type="Date" placeholder="Fecha nacimiento" name="fechanac">
                   <input type="text" placeholder="Usuario" name="usuario">
                   <input type="password" placeholder="Contraseña" name="password">
                   <button type="submit" name="registrarse" class="btn">Registrarse</button>
               </form>
              </div>
           </div>
       </div>
</div>
</div>

<!----------Footer---------------> 

<div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col1">
               <h3>Contactanos</h3>
                <p>Escribenos y nos contactaremos contigo en el meno tiempo posible.</p>
                
            </div>
            <div class="footer-col2">
               <img src="images/logo.png">
               
            </div>
            <div class="footer-col3">
               <h3>Datos</h3>
                <ul>
                    <li>FzPublicidad</li>
                    <li>Mosquera</li>
                    <li>Cra97#89</li>
                    <li>3115897542</li>
                </ul>
            </div>
            <div class="footer-col4">
               <h3>Follow Us</h3>
                <ul>
                    <li>Facebook</li>
                    <li>Twitter<li>
                    <li>Instagram</li>
                    <li>YouTube</li>
                </ul>
            </div>
        </div>
        <hr>
        
    </div>
    
</div>

<!-------------js for toggle menu-------------->

<script>
    var MenuItems = document.getElementById("MenuItems");
    
    
    MenuItems.style.maxHeight = "0px";
    
    function menutoggle()
    {
        if(MenuItems.style.maxHeight == "0px")
            {
                MenuItems.style.maxHeight = "200px";
            }else
            {
                MenuItems.style.maxHeight = "0px"
            } 
    }
     
</script>
<!------------------- form toggle ----------->
    <script>
        var LoginForm = document.getElementById("LoginForm");
        var RegForm = document.getElementById("RegForm");
        var Indicator = document.getElementById("indicator");
        var Formulario =document.getElementById("Formulario")
        
        function register(){
                RegForm.style.transform = "translateX(0px)";
                Formulario.style.height="650px";
                LoginForm.style.transform = "translateX(0px)";
                Indicator.style.transform = "translateX(100px)"
                Indicator.style.width="120px";
            };
        function login(){
                RegForm.style.transform = "translateX(300px)";
                LoginForm.style.transform = "translateX(300px)";
                Indicator.style.transform = "translateX(0px)"
                Indicator.style.width="100px";
                Formulario.style.height="250px";
            };
            
    </script>
    
    
    
</body>
</html>

