<?php 


require_once("modelo/modelousuario.php");

$logeo = new Modelousuario();


if(isset($_POST['ingresar'])){

$nombre=$_POST['usu'];
$password=$_POST['pass'];
$usu=$logeo->Login($nombre,$password);


if(count($usu)>0){

    foreach($usu as $f){

    session_start();//Iniciamos session
    $_SESSION['usuario']=$f[1];
    $_SESSION['apellido']=$f[7];
    $_SESSION['Oficio']=$f[3];
    $_SESSION['foto']=$f[4];
    $_SESSION['fecha']=$f[12];
    $_SESSION['doc']=$f[0];
    $_SESSION['correo']=$f[8];
    $_SESSION['telefono']=$f[9];
    $_SESSION['sexo']=$f[10];
    $_SESSION['nombre']=$f[6];
    
    header('Location:'.$f[3].'.php');
    }
}else{

    echo '<script type="text/javascript">alert("Datos Incorrectos");self.location=login.php</script>';




}


}

if(isset($_POST['cerrar'])){


    session_start();//Iniciamos session
    if($_SESSION){
    
    session_destroy();
    echo '<script type="text/javascript">alert("Cerrando Sesion....");self.location="login.php";</script>';
    
    
    
    }else{
        echo '<script type="text/javascript">alert("Usuario no autenticado....");self.location="login.php";</script>';
    
    
    }
    
    
    
    
    }






require_once("vista/Vistalogin.php");




?>