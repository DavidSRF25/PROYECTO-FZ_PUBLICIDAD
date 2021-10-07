<?php 

    require_once('Conexion.php');

    class modeloAcerca{


        public function administradores(){
            $administrador=null;
            try{
                $sql="select * from tb_personal inner join tb_usuarios on (tb_personal.doc = tb_usuarios.docusu)
                where tb_usuarios.rol='ADMINISTRADOR'"; 
                $conecta=Conexion::conexionbd()->prepare($sql); //preparar consulta
                $conecta->execute(); //ejecuta la consulta
                while($fila3=$conecta->fetch()){
                    $administrador[]=$fila3;
                }
           }catch(Exception $e){
               echo "Error en la consulta: ".$e;
           }
          return $administrador;
        }
    }

?>