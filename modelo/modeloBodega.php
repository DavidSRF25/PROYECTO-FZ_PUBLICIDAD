<?php
require_once('Conexion.php');

 class Modelobodega{
    


    public function ConsultaTodos(){
        try{
            $sql="select * from tb_materiaprima"; 
            $conecta=Conexion::conexionbd()->prepare($sql); //preparar consulta
            $conecta->execute(); //ejecuta la consulta
            while($fila3=$conecta->fetch()){
                $materiaprima[]=$fila3;
            }
       }catch(Exception $e){
           echo "Error en la consulta: ".$e;
       }
      return $materiaprima;
    }

    public function ConsultaTodosPDF(){
        try{
            $sql="select * from tb_materiaprima"; 
            $conecta=Conexion::conexionbd()->prepare($sql); //preparar consulta
            $conecta->execute(); //ejecuta la consulta
            while($fila3=$conecta->fetch()){
                $materiaprima[]=$fila3;
            }
       }catch(Exception $e){
           echo "Error en la consulta: ".$e;
       }
      return $materiaprima;
    }

    public function entregados(){
        try{
            $sql="select * from tb_entregamaterial"; 
            $conecta=Conexion::conexionbd()->prepare($sql); //preparar consulta
            $conecta->execute(); //ejecuta la consulta
            while($fila3=$conecta->fetch()){
                $materiaprima[]=$fila3;
            }
       }catch(Exception $e){
           echo "Error en la consulta: ".$e;
       }
      return $materiaprima;
    }
 
       
    public function insertarmateria($ID,$IDProveedor,$Tipo,$Cantidad,$Descripcion,$ValorUnidad){
        
        $res=0;
        try {
            $sql_ins="insert into tb_materiaprima value(?,?,?,?,?,?)";
            $ps=Conexion::conexionbd()->prepare($sql_ins);
            $ps->bindParam(1,$ID);
            $ps->bindParam(2,$IDProveedor);
            $ps->bindParam(3,$Tipo);
            $ps->bindParam(4,$Cantidad);
            $ps->bindParam(5,$Descripcion);
            $ps->bindParam(6,$ValorUnidad);

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

    public function cargaSelect(){
       
    $empleado=null;
        try{
           $sql4="select docusu,rol from tb_usuarios where rol='COSTURERO' or rol='CORTADOR' or rol='ESTAMPADOR' or rol='ADMINISTRADOR' ";
           $conecta=Conexion::conexionbd()->prepare($sql4);
           $conecta->execute();
           while($f = $conecta->fetch()){

            $empleado[]=$f;


           }

  
        }catch(Exception $e){
           echo"Error en la consulta".$e;
        }
       
        return $empleado;

    }
    
    public function pro(){
       
        $empleado=null;
            try{
               $sql4="select ID,Tipo from tb_materiaprima where cantidad > 0";
               $conecta=Conexion::conexionbd()->prepare($sql4);
               $conecta->execute();
               while($f = $conecta->fetch()){
    
                $empleado[]=$f;
    
    
               }
    
      
            }catch(Exception $e){
               echo"Error en la consulta".$e;
            }
           
            return $empleado;
    
        }
    
    
    



  public function insertarentre($IDProveedor,$docentre,$docrec,$Descripcion,$cantidad,$fecha){
        
    $res=0;
    try {
        $sql_ins="insert into tb_entregamaterial (IDMaterial, docEntre, docReci, descrip, cant, fechaEn) value(?,?,?,?,?,?)";
        $ps=Conexion::conexionbd()->prepare($sql_ins);
        $ps->bindParam(1,$IDProveedor);
        $ps->bindParam(2,$docentre);
        $ps->bindParam(3,$docrec);
        $ps->bindParam(4,$Descripcion);
        $ps->bindParam(5,$cantidad);
        $ps->bindParam(6,$fecha);

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


  

        public function Uno($criterio){
            $usuarios=null;
            try{
               $sql2="select * from tb_materiaprima where ID=? " ;
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


        

        public function descuento($can,$id){
            $res=0;
            try {
                $sql_up="update tb_materiaprima set cantidad=cantidad-?  where ID=?;";
                $ps=Conexion::conexionbd()->prepare($sql_up);
                $ps->bindParam(1,$can);
                $ps->bindParam(2,$id);

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
         
        
      
}





?>