<?php 


require_once("modelo/modelousuario.php");
require_once("modelo/modeloClientes.php");

$logeo = new Modelousuario();
$cliente = new ModeloCli();


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
    $_SESSION['doc']=$f[0];
    $_SESSION['correo']=$f[8];
    $_SESSION['fecha']=$f[12];
    header('Location:'.$f[3].'.php');
    }
}else{

    echo '<script type="text/javascript">alert("Datos Incorrectos");self.location=login.php</script>';




}


}


if(isset($_POST['registrarse'])){


    $documento=$_POST['doc'];
    $nombre=$_POST['nom'];
    $apellido=$_POST['ape'];
    $correo=$_POST['correo'];
    $celular=$_POST['celular'];
    $sexo=$_POST['sexo'];
    $direccion=$_POST['direccion'];
    $fechanaciminto=$_POST['fechanac'];
    $usuario=$_POST['usuario'];
    $password=$_POST['password'];
    $rol="CLIENTE";
    $foto="default.jpg";

   $existe =$cliente->Uno($documento);
   if ($existe) {

    echo "<script type='text/javascript'>alert('Ya existe una cuenta registrada asociada al documento');</script>";
  }else{

    $resultado =$cliente->Insertarpersonal($documento,$nombre,$apellido,$correo,$celular,$sexo,$direccion,$fechanaciminto);
    $ret=$logeo->insertar($documento,$usuario,$password,$rol,$foto);

    if($resultado){

    echo "<script type='text/javascript'>alert('Se Registro Correctamente');</script>";
    }else{

        echo "<script type='text/javascript'>alert('Error al insertar cuenta');</script>";

    }


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