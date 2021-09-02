<?php

class Conexion{
    public static function conexionbd(){

        try{
            $con=new PDO('mysql:host=localhost;dbname=fzpublicidad2','root','3132046059Da%');
            $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
           // echo "Conexion exitosa";


        }catch(Exception $e){
            die("Error en la conexion".$e->GetMessage());
            echo("Linea de Error".$e->getLine());

        }
        return $con;
    }
}

//Conexion::conexionbd();


?>