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

        public function ConsultaUno($criterio){

            $productosuno=null;
            try{
              
              $sql_uno="select * from tb_Producto where ID=?";
              $usu=Conexion::conexionbd()->prepare($sql_uno);
              $usu->bindParam(1,$criterio); 
              $usu->execute();
          
              while($f=$usu->fetch()){
                
                 
                $productosuno[]=$f;
          
          
              }
             
            }catch(Exception $e){
            
              echo "Error en la consulta ".$e;
          
            }
          
           
          
            return$productosuno; 
           
          
          }

       




    }



?>