<?php
require_once('Conexion.php');

class Modelousuario{
    


    public function ConsultaTodos(){
        try{
            $sql="select * from tb_usuarios"; 
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
               $sql2="select * from tb_usuarios  where docusu=? " ;
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
         
     
        public function insertar($docu,$nombreusu,$pass,$rol,$foto){
        
            $res=0;
            try {
                 $sql_ins="insert into tb_usuarios values (?,?,?,?,?)";
                $ps=Conexion::conexionbd()->prepare($sql_ins);
                $ps->bindParam(1,$docu);
                $ps->bindParam(2,$nombreusu);
                $ps->bindParam(3,$pass);
                $ps->bindParam(4,$rol);
                $ps->bindParam(5,$foto);
    
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
    
    public function Login($nombre,$pass){
        $datos=null;
        try {
          $log=Conexion::conexionbd()->prepare('call login(?,?)');
          $log->bindParam(1,$nombre);
          $log->bindParam(2,$pass);
          $log->execute();
        
          $datos =$log->fetchAll();
        
            
        } catch (Exception $e) {
           echo"Error en el logn".$e;
        }
          return $datos;
        }
        
}




?>