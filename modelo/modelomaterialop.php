<?php 


    require_once('Conexion.php');


    class modelomaterialop{

        public function actualizar($id,$IDProveedor,$docentre,$docrec,$Descripcion,$cantidad,$fecha){
        
            $res=0;
            try {
                $sql_ins="update  tb_entregamaterial  set IDMaterial=?, docEntre=?, docReci=?, descrip=?, cant=?, fechaEn=? where ID=? ";
                $ps=Conexion::conexionbd()->prepare($sql_ins);
                $ps->bindParam(7,$id);
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
                echo "Error al actualizar";
            }
        
            return $res;
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
        
        
        public function operarios($criterio){
            $material=null;
            try{
               $sql2="select * from tb_usuarios
               where rol='CORTADOR' OR rol='ESTAMPADOR' or rol='COSTURERO' AND docusu != ?; " ;
               $dep=Conexion::conexionbd()->prepare($sql2);
               $dep->bindParam(1,$criterio);
        

               $dep->execute();
    
               
    
               while($f = $dep->fetch()){
    
                $material[]=$f;
    
    
               }
    
      
            }catch(Exception $e){
               echo"Error en la consulta".$e;
            }
           
            return $material;
    
        }

        
        public function Uno($criterio){
            $material=null;
            try{
               $sql2="select e.ID, e.IDMaterial, e.docEntre, e.docReci, e.descrip, e.cant, e.fechaEn,e.IDPedido,e.IDproducto from tb_entregamaterial as e
               inner join tb_personal as p on (e.docReci = p.doc)
               where p.doc=?; " ;
               $dep=Conexion::conexionbd()->prepare($sql2);
               $dep->bindParam(1,$criterio);
        

               $dep->execute();
    
               
    
               while($f = $dep->fetch()){
    
                $material[]=$f;
    
    
               }
    
      
            }catch(Exception $e){
               echo"Error en la consulta".$e;
            }
           
            return $material;
    
        }
        public function revision($idmaterial,$documento){
            $material=null;
            try{
               $sql2="select e.ID, e.IDMaterial, e.docEntre, e.docReci, e.descrip, e.cant, e.fechaEn from tb_entregamaterial as e
               inner join tb_personal as p on (e.docReci = p.doc)
               where IDMaterial=? and e.docEntre=?; " ;
               $dep=Conexion::conexionbd()->prepare($sql2);
               $dep->bindParam(1,$idmaterial);
               $dep->bindParam(2,$documento);
        

               $dep->execute();
    
               
    
               while($f = $dep->fetch()){
    
                $material[]=$f;
    
    
               }
    
      
            }catch(Exception $e){
               echo"Error en la consulta".$e;
            }
           
            return $material;
    
        }
        public function dos($criterio){
            $material=null;
            try{
               $sql2="select e.ID, e.IDMaterial, e.docEntre, e.docReci, e.descrip, e.cant, e.fechaEn from tb_entregamaterial as e
               inner join tb_personal as p on (e.docReci = p.doc)
               where e.docEntre=?; " ;
               $dep=Conexion::conexionbd()->prepare($sql2);
               $dep->bindParam(1,$criterio);
        

               $dep->execute();
    
               
    
               while($f = $dep->fetch()){
    
                $material[]=$f;
    
    
               }
    
      
            }catch(Exception $e){
               echo"Error en la consulta".$e;
            }
           
            return $material;
    
        }

        public function cantidad($criterio){
            $material=null;
            try{
               $sql2="select cant from tb_entregamaterial 
               where IDMaterial=?; " ;
               $dep=Conexion::conexionbd()->prepare($sql2);
               $dep->bindParam(1,$criterio);
        

               $dep->execute();
    
               
    
               while($f = $dep->fetch()){
    
                $material[]=$f;
    
    
               }
    
      
            }catch(Exception $e){
               echo"Error en la consulta".$e;
            }
           
            return $material;
    
        }

        public function ac($criterio){
            $material=null;
            try{
               $sql2="select * from tb_entregamaterial 
               where ID=?; " ;
               $dep=Conexion::conexionbd()->prepare($sql2);
               $dep->bindParam(1,$criterio);
        

               $dep->execute();
    
               
    
               while($f = $dep->fetch()){
    
                $material[]=$f;
    
    
               }
    
      
            }catch(Exception $e){
               echo"Error en la consulta".$e;
            }
           
            return $material;
    
        }

    }


?>