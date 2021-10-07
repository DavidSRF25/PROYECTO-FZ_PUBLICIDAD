<?php 


require_once('modelo/modelomicuenta.php');

session_start();
$documento=$_SESSION['doc'];
if(isset($_SESSION["usuario"])){
    $usuario=$_SESSION['usuario'];
}


$micuenta= new Modelomicuenta();


$datosmios= $micuenta->Miusuypass($documento);


$datosp=$micuenta->Misdatos($documento);


if(isset($_POST["actualizarusuypass"])){


    $doc=$_POST["do"];
    $username=$_POST["us"];
    $pass=$_POST["cl"];
    $rol=$_POST["ro"];
    $imagen="default.jpg";




    $actua=$micuenta->actualizarUsu($doc,$username,$pass,$rol,$imagen);


    if($actua){

        echo '<script type="text/javascript">alert("Actualizacion exitosa");self.location="micuenta.php";</script>';
    }else{
        
        echo '<script type="text/javascript">alert("Error de Actualizacion")</script>';

    }



}

if(isset($_POST["actualizardp"])){


    $docu=$_POST["documento"];
    $nom=$_POST["nombre"];
    $ape=$_POST["apellido"];
    $corr=$_POST["correo"];
    $celu=$_POST["celular"];
    $s=$_POST["sexo"];
    $dir=$_POST["direccion"];
    $fecha=$_POST["fechanacimiento"];

    $actualizardatos=$micuenta->actualizarmisdatos($docu,$nom,$ape,$corr,$celu,$s,$dir,$fecha);

    if($actualizardatos){

        echo '<script type="text/javascript">alert("Actualizacion exitosa");self.location="micuenta.php";</script>';
    }else{
        
        echo '<script type="text/javascript">alert("Error de Actualizacion")</script>';

    }





}


















require_once("vista/vistamicuenta.php");




?>