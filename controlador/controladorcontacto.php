<?php 


if(isset($_POST["enviam"])){

if(!empty($_POST["nombre"])&& !empty($_POST["asunto"])&& !empty($_POST["msg"])&& !empty($_POST["email"])){
 
    $name=$_POST["nombre"];
    $asunto=$_POST["asunto"];
    $msg=$_POST["msg"];
    $email=$_POST["email"];
    $destinatario="davidserratoruiz@gmail.com";

    $header="Enviado desde la pagina Fzpublicidad";
    $mensajecompleto= $msg."\nAtentamente:" .$name;

    @mail($destinatario,$asunto,$mensajecompleto,$header);
   

        echo "<script type='text/javascript'>alert('Mensaje Enviado con Exito');</script>";

    


}



}



require_once("vista/vistacontacto.php");
?> 