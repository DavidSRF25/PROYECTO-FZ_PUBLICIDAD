<?php

    require_once('Conexion.php');
   


    class ModeloProductos{



        public function ConsultaTodosP(){
            try{
                $sql="select * from tb_Producto;"; 
                $conecta=Conexion::conexionbd()->prepare($sql); //preparar consulta
                $conecta->execute(); //ejecuta la consulta
                while($fila3=$conecta->fetch()){
                    $productos[]=$fila3;
                }
           }catch(Exception $e){
               echo "Error en la consulta: ".$e;
           }
          return $productos;
        }




    }



?>