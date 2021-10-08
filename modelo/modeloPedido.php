<?php
require_once('Conexion.php');

class ModeloPedido{


    
    
    public function operarios(){
        try{
            $sql="select * from tb_usuarios where rol='CORTADOR' OR rol='ESTAMPADOR' OR rol='COSTURERO';"; 
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
    public function con($criterio){
        $usuarios=null;
        try{
           $sql2="select e.ID,p.IDProducto,p.cantidad,p.valoruni,p.valortotal,p.tamaño,p.color,p.logo,pro.imagen  from tb_pedidos as e 
           inner join tb_pedidosusu as p on (e.ID = P.IDPedido )
           inner join tb_producto as pro on (p.IDProducto = pro.ID)
           where  e.ID=?;" ;
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

    public function pedidosasignados(){
        $operario=null;
        try{
            $sql="select * from tb_pedidooperario"; 
            $conecta=Conexion::conexionbd()->prepare($sql); //preparar consulta
            $conecta->execute(); //ejecuta la consulta
            while($fila3=$conecta->fetch()){
                $operario[]=$fila3;
            }
       }catch(Exception $e){
           echo "Error en la consulta: ".$e;
       }
      return $operario;
    }
    
    public function PEDIDOS(){
        $pedidosusu=null;
        try{
            $sql="select* from tb_pedidos;"; 
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

    public function ConsultaTodos(){
        $todos=null;
        try{
            $sql="select p.ID,p.IDProducto,p.cantidad,p.fechaCompra,pr.estado from tb_Pedidosusu as p  inner join tb_Procesos as pr on p.ID = pr.idpedido where pr.estado='EN PROCESO';"; 
            $conecta=Conexion::conexionbd()->prepare($sql); //preparar consulta
            $conecta->execute(); //ejecuta la consulta
            while($fila3=$conecta->fetch()){
                $todos[]=$fila3;
            }
       }catch(Exception $e){
           echo "Error en la consulta: ".$e;
       }
      return $todos;
    }


    public function finalizados(){
        $finalizados=null;
        try{
            $sql="select  p.ID,pr.IDproducto,p.docCli,pr.estado from tb_pedidos as p
            inner join tb_Procesos as pr on p.ID = pr.idpedido
            where pr.estado='FINALIZADO';
            "; 
            $conecta=Conexion::conexionbd()->prepare($sql); //preparar consulta
            $conecta->execute(); //ejecuta la consulta
            while($fila3=$conecta->fetch()){
                $finalizados[]=$fila3;
            }
       }catch(Exception $e){
           echo "Error en la consulta: ".$e;
       }
      return $finalizados;
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
    
    
    public function mispedidos($doc){
        $pedusuario=null;
         try {
             $sql_de="select * from tb_pedidos as ped inner join tb_pedidosusu as pedu  on (ped.ID = pedu.IDPedido) inner join  tb_producto as p on (pedu.IDProducto = p.ID) where docCli=?  order by pedu.FechaCompra desc; ";
             $ps=Conexion::conexionbd()->prepare($sql_de);
             $ps->bindParam(1,$doc);
      
             $ps->execute();

             while($f=$ps->fetch()){
                 
                $pedusuario[]=$f;

             }
         } catch (Exception $e) {
             echo "Error al eliminar";
         }
 
         return $pedusuario;
          
      }
}




?>