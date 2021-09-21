<?php

  require_once('modelo/Conexion.php');

  class ModeloProcesos{


    public function Enproceso(){
      $enproceso=0;
        try{
            $sql="select * from tb_procesos where estado='EN PROCESO';"; 
            $conecta=Conexion::conexionbd()->prepare($sql); //preparar consulta
            $conecta->execute(); //ejecuta la consulta
            while($fila3=$conecta->fetch()){
                $enproceso[]=$fila3;
            }
       }catch(Exception $e){
           echo "Error en la consulta: ".$e;
       }
      return $enproceso;
    }

    public function Finalizado(){
      $finalizado=0;
        try{
            $sql="select * from tb_procesos where estado='FINALIZADO';"; 
            $conecta=Conexion::conexionbd()->prepare($sql); //preparar consulta
            $conecta->execute(); //ejecuta la consulta
            while($fila3=$conecta->fetch()){
                $finalizado[]=$fila3;
            }
       }catch(Exception $e){
           echo "Error en la consulta: ".$e;
       }
      return $finalizado;
    }




  }

?>