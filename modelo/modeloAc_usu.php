<?php

    require_once('Conexion.php');

    class Actualizarusuario{


        public function Uno($criterio){
            $usuario=null;
            try{
               $sql2="select * from tb_usuarios where docusu=? " ;
               $dep=Conexion::conexionbd()->prepare($sql2);
               $dep->bindParam(1,$criterio);
        

               $dep->execute();
    
               
    
               while($f = $dep->fetch()){
    
                $usuario[]=$f;
    
    
               }
    
      
            }catch(Exception $e){
               echo"Error en la consulta".$e;
            }
           
            return $usuario;
    
        }

        public function dos($criterio){
            $usuario=null;
            try{
               $sql2="select * from tb_personal where doc=? " ;
               $dep=Conexion::conexionbd()->prepare($sql2);
               $dep->bindParam(1,$criterio);
        

               $dep->execute();
    
               
    
               while($f = $dep->fetch()){
    
                $usuario[]=$f;
    
    
               }
    
      
            }catch(Exception $e){
               echo"Error en la consulta".$e;
            }
           
            return $usuario;
    
        }

        public function actualizar($documento,$nombre,$password,$rol,$foto){
            $res=0;
            try {
                $sql_ins="update tb_usuarios set nombreusu=?, Pass=?, rol=?, foto=?  WHERE docusu=?";
                $ps=Conexion::conexionbd()->prepare($sql_ins);
                $ps->bindParam(5,$documento);
                $ps->bindParam(1,$nombre);
                $ps->bindParam(2,$password);
                $ps->bindParam(3,$rol);
                $ps->bindParam(4,$foto);
             
                
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


         public function actu_personal($documento,$nombre,$apellido,$correo,$celular,$sexo,$direccion,$fecha){
            $res=0;
            try {
                $sql_ins="UPDATE tb_personal set nom=?,ape=?,correo=?,celular=?,sexo=?,direccion=?,fechanaci=? WHERE doc=?;";
                $ps=Conexion::conexionbd()->prepare($sql_ins);
                $ps->bindParam(8,$documento);
                $ps->bindParam(1,$nombre);
                $ps->bindParam(2,$apellido);
                $ps->bindParam(3,$correo);
                $ps->bindParam(4,$celular);
                $ps->bindParam(5,$sexo);
                $ps->bindParam(6,$direccion);
                $ps->bindParam(7,$fecha);
                
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