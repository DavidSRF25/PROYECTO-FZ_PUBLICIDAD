<?php
require_once('Conexion.php');

class ModeloPedido{
    


    public function ConsultaTodos(){
        try{
            $sql="select p.ID,p.IDProducto,p.cantidad,p.docCli,p.fechaCompra,pr.estado from tb_Pedidosusu as p  inner join tb_Procesos as pr on p.ID = pr.idpedido where pr.estado='EN PROCESO';"; 
            $conecta=Conexion::conexionbd()->prepare($sql); //preparar consulta
            $conecta->execute(); //ejecuta la consulta
            while($fila3=$conecta->fetch()){
                $pedidosusu[]=$fila3;
            }
       }catch(Exception $e){
           echo "Error en la consulta: ".$e;
       }
      return $pedidosusu;
    }


    public function finalizados(){
        try{
            $sql="select  p.ID,p.IDproducto,pr.estado from tb_Pedidosusu as p  inner join tb_Procesos as pr on p.ID = pr.idpedido where pr.estado='FINALIZADO';"; 
            $conecta=Conexion::conexionbd()->prepare($sql); //preparar consulta
            $conecta->execute(); //ejecuta la consulta
            while($fila3=$conecta->fetch()){
                $pedidosusu[]=$fila3;
            }
       }catch(Exception $e){
           echo "Error en la consulta: ".$e;
       }
      return $pedidosusu;
    }


  

        public function Uno($criterio){
            $usuarios=null;
            try{
               $sql2="select * from tb_pedidosusu where ID=? " ;
               $dep=Conexion::conexionbd()->prepare($sql2);
               $dep->bindParam(1,$criterio);
        

               $dep->execute();
    
               
    
               while($f = $dep->fetch()){
    
                $usuarios[]=$f;
    
    
               }
    
      
            }catch(Exception $e){
               echo"Error en la consulta".$e;
            }
           
            return $usuarios;
    
        }


        

        public function actualizar($cod,$nombre,$localidad){
            $res=0;
            try {
                $sql_up="update departamento set NOMBRE=?, LOCALIDAD=? WHERE CODIGO_DEPART=?";
                $ps=Conexion::conexionbd()->prepare($sql_up);
                $ps->bindParam(3,$cod);
                $ps->bindParam(1,$nombre);
                $ps->bindParam(2,$localidad);
                
                if($ps->execute()){
                  $res=1;
                }else{
                    $res=0;
                }
            } catch (Exception $e) {
                echo "Error al actualizar";
            }
    
            return $res;
             
         }
        
         public function eliminar($cod){
            $res=0;
            try {
                $sql_de="delete from departamento where CODIGO_DEPART=?";
                $ps=Conexion::conexionbd()->prepare($sql_de);
                $ps->bindParam(1,$cod);
         
                
                if($ps->execute()){
                  $res=1;
                }else{
                    $res=0;
                }
            } catch (Exception $e) {
                echo "Error al eliminar";
            }
    
            return $res;
             
         }
         
         public function consul($cod){
           $dep=null;
            try {
                $sql_de="select departamento from empleado as e inner join departamento as d on (e.departamento=d.CODIGO_DEPART) where e.departamento=?";
                $ps=Conexion::conexionbd()->prepare($sql_de);
                $ps->bindParam(1,$cod);
         
                $ps->execute();

                while($f=$ps->fetch()){
                    
                    $dep[]=$f;

                }
            } catch (Exception $e) {
                echo "Error al eliminar";
            }
    
            return $dep;
             
         }
         
        
         
        public function InsertaDepartamento($cod,$nombre,$localidad){
        
            $res=0;
            try {
                $sql_ins="insert into departamento value(?,?,?)";
                $ps=Conexion::conexionbd()->prepare($sql_ins);
                $ps->bindParam(1,$cod);
                $ps->bindParam(2,$nombre);
                $ps->bindParam(3,$localidad);
    
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