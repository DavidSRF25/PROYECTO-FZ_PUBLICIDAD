<?php

    require_once('Conexion.php');
   


    class ModeloProductosDetalles{





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