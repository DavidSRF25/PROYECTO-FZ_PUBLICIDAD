<?php

    require_once("Conexion.php");


    class Pro{


        public function ConsultaTodos(){
            try{
                $sql="select * from tb_producto;"; 
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

        
    public function Uno($criterio){
        $producto=null;
        try{
           $sql2="select * from tb_producto where ID=?";
           $usu=Conexion::conexionbd()->prepare($sql2);
           $usu->bindParam(1,$criterio);
           $usu->execute();

           

           while($f = $usu->fetch()){

            $producto[]=$f;


           }

  
        }catch(Exception $e){
           echo"Error en la consulta".$e;
        }
        
       
        return $producto;

    }
    
        public function insertar($id,$nombre,$valor,$color,$tama,$logo,$cantidad,$foto){
        
            $res=0;
            try {
                $sql_ins="insert into tb_producto value(?,?,?,?,?,?,?,?)";
                $ps=Conexion::conexionbd()->prepare($sql_ins);
                $ps->bindParam(1,$id);
                $ps->bindParam(2,$nombre);
                $ps->bindParam(3,$valor);
                $ps->bindParam(4,$color);
                $ps->bindParam(5,$tama);
                $ps->bindParam(6,$logo);
                $ps->bindParam(7,$cantidad);
                $ps->bindParam(8,$foto);
    
                if($ps->execute()){
                  $res=1;
                }else{
                    $res=0;
                }
            } catch (Exception $e) {
                echo "Error al insertar";
            }
    
            return $res;
        }



    }


?>