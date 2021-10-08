<?php

    require_once('modelo/Conexion.php');

    class todooperario{


        public function nuevo($idpedido,$idoperario){
        
            $res=0;
            try {
                $sql_ins="insert into  tb_pedidooperario (idpedido,idoperario)  value(?,?)";
                $ps=Conexion::conexionbd()->prepare($sql_ins);
                $ps->bindParam(1,$idpedido);
                $ps->bindParam(2,$idoperario);
           
    
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
        

         public function proceso($identregamaterial,$idpedido,$estado,$descripcion,$ambiente,$cantidad,$fecha,$idproducto){
        
            $res=0;
            try {  
                $sql_ins="insert into  tb_procesos (IDEntregaMaterial,IDPedido,estado,descrip,ambiente,cant,fechaEn,IDProducto)  value(?,?,?,?,?,?,?,?);";
                $ps=Conexion::conexionbd()->prepare($sql_ins);
                $ps->bindParam(1,$identregamaterial);
                $ps->bindParam(2,$idpedido);
                $ps->bindParam(3,$estado);
                $ps->bindParam(4,$descripcion);
                $ps->bindParam(5,$ambiente);
                $ps->bindParam(6,$cantidad);
                $ps->bindParam(7,$fecha);
                $ps->bindParam(8,$idproducto);
           
    
                if($ps->execute()){
                  $res=1;
                }else{
                    $res=0;
                }
            } catch (Exception $e) {
                echo "Error al insertar 1";
            }
    
            return $res;
         }    
        

         public function procesos($idpedido,$identregamaterial,$estado,$ambiente,$cantidad,$fecha,$idproducto){
        
            $res=0;
            try {
                $sql_ins="insert into  tb_registrosprocesos (idpedido,idEntregaMaterial,estado,ambiente,cantidad,fechaEn,IDProducto)  values(?,?,?,?,?,?,?);";
                $ps=Conexion::conexionbd()->prepare($sql_ins);
                $ps->bindParam(1,$idpedido);
                $ps->bindParam(2,$identregamaterial);
                $ps->bindParam(3,$estado);
                $ps->bindParam(4,$ambiente);
                $ps->bindParam(5,$cantidad);
                $ps->bindParam(6,$fecha);
                $ps->bindParam(7,$idproducto);
           
    
                if($ps->execute()){
                  $res=1;
                }else{
                    $res=0;
                }
            } catch (Exception $e) {
                echo "Error al insertar 2";
            }
    
            return $res;
         }    

         public function ma($idproducto,$idpedido,$material){
            $usuarios=null;
            try{
                $sql2="select IDProducto from tb_entregamaterial where IDProducto=? and IDPedido=? and ID=?" ;
               $dep=Conexion::conexionbd()->prepare($sql2);
               $dep->bindParam(1,$idproducto);
               $dep->bindParam(2,$idpedido);
               $dep->bindParam(3,$material);
        

               $dep->execute();
    
               
    
               while($f = $dep->fetch()){
    
                $usuarios[]=$f;
    
    
               }
    
      
            }catch(Exception $e){
               echo"Error en la consulta".$e;
            }
           
            return $usuarios;
    
        }

         public function revision($idpedido,$estado){
            $usuarios=null;
            try{
                $sql2="select * from tb_procesos where idpedido=? and estado=?" ;
               $dep=Conexion::conexionbd()->prepare($sql2);
               $dep->bindParam(1,$idpedido);
               $dep->bindParam(2,$estado);
        

               $dep->execute();
    
               
    
               while($f = $dep->fetch()){
    
                $usuarios[]=$f;
    
    
               }
    
      
            }catch(Exception $e){
               echo"Error en la consulta".$e;
            }
           
            return $usuarios;
    
        }

        public function Uno($criterio){
            $usuarios=null;
            try{
                $sql2="select o.ID,o.idpedido,o.idoperario from tb_pedidooperario as o
                INNER JOIN tb_pedidos as p on (o.idpedido = p.ID)
                where  o.idoperario=?; " ;
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

        public function cant($idpedido,$idproducto){
            $usuarios=null;
            try{
                $sql2="select pro.cantidad from tb_pedidosusu as pro
                inner join tb_producto as pe on (pro.IDProducto = pe.ID)
                where pro.IDPedido=? and pro.IDProducto=?;" ;
               $dep=Conexion::conexionbd()->prepare($sql2);
               $dep->bindParam(1,$idpedido);
               $dep->bindParam(2,$idproducto);
        

               $dep->execute();
    
               
    
               while($f = $dep->fetch()){
    
                $usuarios[]=$f;
    
    
               }
    
      
            }catch(Exception $e){
               echo"Error en la consulta".$e;
            }
           
            return $usuarios;
    
        }

        public function otro($criterio,$documento){
            $usuarios=null;
            try{
                $sql2="select pro.ID,pro.IDProducto,pro.IDPedido ,p.ID AS Entrega_material,pro.cantidad,pro.tamaño,pro.color,pro.logo,pe.imagen  from tb_pedidosusu as pro
                inner join tb_producto as pe on (pro.IDProducto = pe.ID)
                inner join tb_entregamaterial as p on (pe.ID = p.IDProducto)
                where pro.IDPedido=? and p.docReci=?;" ;
               $dep=Conexion::conexionbd()->prepare($sql2);
               $dep->bindParam(1,$criterio);
               $dep->bindParam(2,$documento);
        

               $dep->execute();
    
               
    
               while($f = $dep->fetch()){
    
                $usuarios[]=$f;
    
    
               }
    
      
            }catch(Exception $e){
               echo"Error en la consulta".$e;
            }
           
            return $usuarios;
    
        }

        public function select($criterio){
            $usuarios=null;
            try{
                $sql2="select o.ID,o.idpedido,o.idoperario,p.cantidad from TB_PEDIDOOPERARIO as o
                INNER JOIN tb_pedidosusu as p on (o.idpedido = p.ID)
                INNER JOIN tb_procesos as pro on (p.ID = pro.idpedido)
                where  o.idoperario=?  and pro.estado='EN PROCESO';" ;
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
        public function en($idpedido,$idproducto){
            $usuarios=null;
            try{
               $sql2="select cant from tb_procesos  where idpedido=? and  IDProducto=? " ;
               $dep=Conexion::conexionbd()->prepare($sql2);
               $dep->bindParam(1,$idpedido);
               $dep->bindParam(2,$idproducto);
        

               $dep->execute();
    
               
    
               while($f = $dep->fetch()){
    
                $usuarios[]=$f;
    
    
               }
    
      
            }catch(Exception $e){
               echo"Error en la consulta".$e;
            }
           
            return $usuarios;
    
        }
        


        public function material($criterio){
            $usuarios=null;
            try{
                $sql2="select * from tb_entregamaterial where docReci=? " ;
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


        public function cantidad($criterio){
            $usuarios=null;
            try{
               $sql2="select cantidad from tb_pedidosusu where ID=?;" ;
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

        public function estado($criterio,$dos){
            $usuarios=null;
            try{
               $sql2="select estado from tb_procesos WHERE idpedido=? and IDEntregaMaterial=? and estado='FINALIZADO';" ;
               $dep=Conexion::conexionbd()->prepare($sql2);
               $dep->bindParam(1,$criterio);
               $dep->bindParam(2,$dos);
                

               $dep->execute();
    
               
    
               while($f = $dep->fetch()){
    
                $usuarios[]=$f;
    
    
               }
    
      
            }catch(Exception $e){
               echo"Error en la consulta".$e;
            }
           
            return $usuarios;
    
        }



        public function ENPROCESO($criterio){
            $usuarios=null;
            try{
               $sql2="select  p.ID,p.idpedido,p.IDEntregaMaterial,p.estado,p.descrip,p.ambiente,p.cant,p.IDProducto from tb_procesos as p inner join tb_entregamaterial as e on (p.IDEntregaMaterial = e.ID) where p.estado='EN PROCESO' and e.docReci=?  ; " ;
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

        public function fueronprocesados($criterio){
            $procesados=null;
            try{
               $sql2="select r.ID,r.idpedido,r.idEntregaMaterial,r.estado,r.ambiente,r.cantidad,r.fechaEn from tb_registrosprocesos as r
               inner join tb_entregamaterial as e on (r.idEntregaMaterial = e.ID)
               inner join tb_usuarios as u on(e.docReci = u.docusu)
               where u.docusu=? and r.estado='EN PROCESO';" ;
               $dep=Conexion::conexionbd()->prepare($sql2);
               $dep->bindParam(1,$criterio);
        

               $dep->execute();
    
               
    
               while($f = $dep->fetch()){
    
                $procesados[]=$f;
    
    
               }
    
      
            }catch(Exception $e){
               echo"Error en la consulta".$e;
            }
           
            return $procesados;
    
        }

        public function finalizado($criterio){
            $usuarios=null;
            try{
               $sql2="select  p.ID,p.idpedido,p.IDEntregaMaterial,p.IDProducto,p.estado,p.descrip,p.ambiente,p.cant from tb_procesos as p inner join tb_entregamaterial as e on (p.IDEntregaMaterial = e.ID) where p.estado='FINALIZADO' and e.docReci=?  ; " ;
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

        
        public function actualizarr($id,$idpedido,$idoperario){
            $res=0;
            try {
                $sql_up="update tb_pedidooperario set idpedido=?,idoperario=? WHERE ID=?";
                $ps=Conexion::conexionbd()->prepare($sql_up);
                $ps->bindParam(3,$id);
                $ps->bindParam(1,$idpedido);
                $ps->bindParam(2,$idoperario);
                
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
        

        public function actualizar($idpedido,$identregamaterial,$estado,$ambiente,$cantidad,$fecha){
            $res=0;
            try {
                $sql_ins="update tb_procesos set IDEntregaMaterial=?,estado=?,ambiente=?,cant=cant+?,fechaEn=? where idpedido=?";
                $ps=Conexion::conexionbd()->prepare($sql_ins);
                $ps->bindParam(6,$idpedido);
                $ps->bindParam(1,$identregamaterial);
                $ps->bindParam(2,$estado);
                $ps->bindParam(3,$ambiente);
                $ps->bindParam(4,$cantidad);
                $ps->bindParam(5,$fecha);
                
                
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

        
         public function eliminar_uno($id){
            $res=0;
            try {
                $sql_de="delete from tb_registrosprocesos where idpedido=?";
                $ps=Conexion::conexionbd()->prepare($sql_de);
                $ps->bindParam(1,$id);
         
                
                if($ps->execute()){
                  $res=1;
                }else{
                    $res=0;
                }
            } catch (Exception $e) {
                echo "Error al eliminar pedido operario";
            }
    
            return $res;
             
         }

         public function eliminar_dos($id){
            $res=0;
            try {
                $sql_de="delete from tb_procesos where ID=?";
                $ps=Conexion::conexionbd()->prepare($sql_de);
                $ps->bindParam(1,$id);
         
                
                if($ps->execute()){
                  $res=1;
                }else{
                    $res=0;
                }
            } catch (Exception $e) {
                echo "Error al eliminar procesos";
            }
    
            return $res;
             
         }



    }





?>