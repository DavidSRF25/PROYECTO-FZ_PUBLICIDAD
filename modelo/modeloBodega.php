<?php
require_once('Conexion.php');

 class Modelobodega{
    
    public function con($id){
        $usuarios=null;
        try{
           $sql2="select * from tb_materiaprima where  ID=?; " ;
           $dep=Conexion::conexionbd()->prepare($sql2);
           $dep->bindParam(1,$id);
    
    


           $dep->execute();

           

           while($f = $dep->fetch()){

            $usuarios[]=$f;


           }

  
        }catch(Exception $e){
           echo"Error en la consulta".$e;
        }
       
        return $usuarios;

    }

    public function con_dos($id){
        $usuarios=null;
        try{
           $sql2="select * from tb_entregamaterial where  ID=?; " ;
           $dep=Conexion::conexionbd()->prepare($sql2);
           $dep->bindParam(1,$id);
    
    


           $dep->execute();

           

           while($f = $dep->fetch()){

            $usuarios[]=$f;


           }

  
        }catch(Exception $e){
           echo"Error en la consulta".$e;
        }
       
        return $usuarios;

    }

    public function actualizar($ID,$IDProveedor,$Tipo,$Cantidad,$Descripcion,$ValorUnidad){
        $res=0;
        try {
            $sql_up="update tb_materiaprima set IDProveedor=?, Tipo=?, Cantidad=?, Descripcion=?, ValorUnidad=? where ID=?;";
            $ps=Conexion::conexionbd()->prepare($sql_up);
            $ps->bindParam(6,$ID);
            $ps->bindParam(1,$IDProveedor);
            $ps->bindParam(2,$Tipo);
            $ps->bindParam(3,$Cantidad);
            $ps->bindParam(4,$Descripcion);
            $ps->bindParam(5,$ValorUnidad);

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

     public function actualizar_entrega($ID,$IDMaterial,$docentre,$docreci,$Descripcion,$cantidad,$fecha,$idpedido,$idproducto){
        $res=0;
        try {
            $sql_up="update tb_entregamaterial set IDMaterial=?, docEntre=?, docReci=?, descrip=?, cant=?, fechaEn=?, IDPedido=?, IDProducto=? where ID=?;";
            $ps=Conexion::conexionbd()->prepare($sql_up);
            $ps->bindParam(9,$ID);
            $ps->bindParam(1,$IDMaterial);
            $ps->bindParam(2,$docentre);
            $ps->bindParam(3,$docreci);
            $ps->bindParam(4,$Descripcion);
            $ps->bindParam(5,$cantidad);
            $ps->bindParam(6,$fecha);
            $ps->bindParam(7,$idpedido);
            $ps->bindParam(8,$idproducto);

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

     public function proveedores(){
        $materiaprima=null;
        try{
            $sql="select * from tb_proveedor"; 
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

    public function ConsultaTodos(){
        $materiaprima=null;
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

    public function idpedidos(){
        $materiaprima=null;
        try{
            $sql="select * from tb_pedidos"; 
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
        $materiaprima=null;
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

    public function observacion($idpedido,$documentooperario){
        $observacion=null;
        try{
           $sql2="select * from tb_pedidooperario where idpedido=?  and idoperario=? " ;
           $dep=Conexion::conexionbd()->prepare($sql2);
           $dep->bindParam(1,$idpedido);
           $dep->bindParam(2,$documentooperario);
    

           $dep->execute();

           

           while($f = $dep->fetch()){

            $observacion[]=$f;


           }

  
        }catch(Exception $e){
           echo"Error en la consulta".$e;
        }
       
        return $observacion;

    }
 
    public function entre($id){
        $usuarios=null;
        try{
           $sql2="select * from tb_entregamaterial where  ID=?; " ;
           $dep=Conexion::conexionbd()->prepare($sql2);
           $dep->bindParam(1,$id);
    
    


           $dep->execute();

           

           while($f = $dep->fetch()){

            $usuarios[]=$f;


           }

  
        }catch(Exception $e){
           echo"Error en la consulta".$e;
        }
       
        return $usuarios;

    }


    public function entregados(){
        $materiaprima=null;
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

  
    public function cargaSelect($id){
        $usuarios=null;
        try{
           $sql2="select docusu,rol from tb_usuarios where rol='COSTURERO' or rol='CORTADOR' or rol='ESTAMPADOR' or rol='ADMINISTRADOR' and docusu !=? " ;
           $dep=Conexion::conexionbd()->prepare($sql2);
           $dep->bindParam(1,$id);
    
    


           $dep->execute();

           

           while($f = $dep->fetch()){

            $usuarios[]=$f;


           }

  
        }catch(Exception $e){
           echo"Error en la consulta".$e;
        }
       
        return $usuarios;

    }

    public function personal($id){
        $usuarios=null;
        try{
           $sql2="select * from tb_usuarios where  docusu=?; " ;
           $dep=Conexion::conexionbd()->prepare($sql2);
           $dep->bindParam(1,$id);
    
    


           $dep->execute();

           

           while($f = $dep->fetch()){

            $usuarios[]=$f;


           }

  
        }catch(Exception $e){
           echo"Error en la consulta".$e;
        }
       
        return $usuarios;

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
    
    
    



  public function insertarentre($IDProveedor,$docentre,$docrec,$Descripcion,$cantidad,$fecha,$idpedido,$idproducto){
        
    $res=0;  
    try {
        $sql_ins="insert into tb_entregamaterial (IDMaterial, docEntre, docReci, descrip, cant, fechaEn, IDPedido, IDProducto) value(?,?,?,?,?,?,?,?)";
        $ps=Conexion::conexionbd()->prepare($sql_ins);
        $ps->bindParam(1,$IDProveedor);
        $ps->bindParam(2,$docentre);
        $ps->bindParam(3,$docrec);
        $ps->bindParam(4,$Descripcion);
        $ps->bindParam(5,$cantidad);
        $ps->bindParam(6,$fecha);
        $ps->bindParam(7,$idpedido);
        $ps->bindParam(8,$idproducto);

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
        
         public function recuento($id,$can){
            $res=0;
            try {
                $sql_up="update tb_materiaprima set cantidad=cantidad+?  where ID=?;";
                $ps=Conexion::conexionbd()->prepare($sql_up);
                $ps->bindParam(2,$id);
                $ps->bindParam(1,$can);
                

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
        
         
         public function cantidamateria($id){
            $usuarios=null;
            try{
               $sql2="select * from tb_materiaprima where ID=?" ;
               $dep=Conexion::conexionbd()->prepare($sql2);
               $dep->bindParam(1,$id);
        
        
    
    
               $dep->execute();
    
               
    
               while($f = $dep->fetch()){
    
                $usuarios[]=$f;
    
    
               }
    
      
            }catch(Exception $e){
               echo"Error en la consulta".$e;
            }
           
            return $usuarios;
    
        }
      
}





?>