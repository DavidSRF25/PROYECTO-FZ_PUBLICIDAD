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

    foreach($usu as $k){

        session_start();//Iniciamos session
    $_SESSION['usuario']=$k[1];
    $_SESSION['apellido']=$k[7];
    $_SESSION['Oficio']=$k[3];
    $_SESSION['foto']=$k[4];
    $_SESSION['fecha']=$k[12];
    $_SESSION['doc']=$k[0];
    $_SESSION['correo']=$k[8];
    $_SESSION['telefono']=$k[9];
    $_SESSION['sexo']=$k[10];
    $_SESSION['nombre']=$k[6];
    
    header('Location:'.$k[3].'.php');
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
    
        if($resultado>0){
    
        echo "<script type='text/javascript'>alert('Se Registro Correctamente');</script>";
        }else{
    
            echo "<script type='text/javascript'>alert('registrado correctamente ');</script>";
    
        }
    
    
      }
    
    
    }



require_once("vista/Vistalogin.php");




?>