<?php

    require_once('modelo/Conexion.php');

    class todooperario{


        public function nuevo($idpedido,$idmate,$idoperario){
        
            $res=0;
            try {
                $sql_ins="insert into  tb_pedidooperario (idpedido,IDEntregaMaterial,idoperario)  value(?,?,?)";
                $ps=Conexion::conexionbd()->prepare($sql_ins);
                $ps->bindParam(1,$idpedido);
                $ps->bindParam(2,$idmate);
                $ps->bindParam(3,$idoperario);
           
    
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
        

         public function proceso($idpedido,$identregamaterial,$estado,$descripcion,$ambiente,$cantidad,$fecha){
        
            $res=0;
            try {
                $sql_ins="insert into  tb_procesos (idpedido, IDEntregaMaterial, estado, descrip, ambiente, cant, fechaEn)  value(?,?,?,?,?,?,?)";
                $ps=Conexion::conexionbd()->prepare($sql_ins);
                $ps->bindParam(1,$idpedido);
                $ps->bindParam(2,$identregamaterial);
                $ps->bindParam(3,$estado);
                $ps->bindParam(4,$descripcion);
                $ps->bindParam(5,$ambiente);
                $ps->bindParam(6,$cantidad);
                $ps->bindParam(7,$fecha);
           
    
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
        

         public function procesos($idpedido,$identregamaterial,$estado,$ambiente,$cantidad,$fecha){
        
            $res=0;
            try {
                $sql_ins="insert into  tb_registrosprocesos (idpedido, idEntregaMaterial, estado, ambiente, cantidad, fechaEn)  value(?,?,?,?,?,?)";
                $ps=Conexion::conexionbd()->prepare($sql_ins);
                $ps->bindParam(1,$idpedido);
                $ps->bindParam(2,$identregamaterial);
                $ps->bindParam(3,$estado);
                $ps->bindParam(4,$ambiente);
                $ps->bindParam(5,$cantidad);
                $ps->bindParam(6,$fecha);
           
    
                if($ps->execute()){
                  $res=1;
                }else{
                    $res=0;
                }
            } catch (Exception $e) {
                echo "Error al insertar2";
            }
    
            return $res;
         }    
        
        public function Uno($criterio){
            $usuarios=null;
            try{
                $sql2="select * from tb_pedidooperario where idoperario=? " ;
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

        public function en($criterio){
            $usuarios=null;
            try{
                $sql2="select cant from tb_procesos  where idpedido=? " ;
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
               $sql2="select  p.ID,p.idpedido,p.IDEntregaMaterial,p.estado,p.descrip,p.ambiente,p.cant from tb_procesos as p inner join tb_entregamaterial as e on (p.IDEntregaMaterial = e.ID) where p.estado='EN PROCESO' and e.docReci=?  ; " ;
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

        public function finalizado($criterio){
            $usuarios=null;
            try{
               $sql2="select  p.ID,p.idpedido,p.IDEntregaMaterial,p.estado,p.descrip,p.ambiente,p.cant from tb_procesos as p inner join tb_entregamaterial as e on (p.IDEntregaMaterial = e.ID) where p.estado='FINALIZADO' and e.docReci=?  ; " ;
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

        



    }





?>