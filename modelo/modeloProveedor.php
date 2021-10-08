<?php 

    require_once('Conexion.php');

    class modeloProveedor{

        public function ConsultaTodos(){
            $pedidosusu=null;
            try{
                $sql="select * from tb_proveedor"; 
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

        public function insertar($docu,$nombreusu,$direccion,$celular,$correo){
        
            $res=0;
            try {
                 $sql_ins="insert into tb_proveedor values (?,?,?,?,?)";
                $ps=Conexion::conexionbd()->prepare($sql_ins);
                $ps->bindParam(1,$docu);
                $ps->bindParam(2,$nombreusu);
                $ps->bindParam(3,$direccion);
                $ps->bindParam(4,$celular);
                $ps->bindParam(5,$correo);
    
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

        public function existe($documento){
            $persona=null;
            try{
               $sql2="select * from tb_proveedor where ID=? " ;
               $dep=Conexion::conexionbd()->prepare($sql2);
               $dep->bindParam(1,$documento);
              
               $dep->execute();
    
               
    
               while($f = $dep->fetch()){
    
                $persona[]=$f;
    
    
               }
    
      
            }catch(Exception $e){
               echo"Error en la consulta".$e;
            }
           
            return $persona;
    
        }

        public function actualizar($id,$nombre,$direccion,$celular,$correo){
            $res=0;
            try { 
                $sql_up="update tb_proveedor set Nombre=?, Direccion=?, Celular=?, Correo=? WHERE ID=?";
                $ps=Conexion::conexionbd()->prepare($sql_up);
                $ps->bindParam(5,$id);
                $ps->bindParam(1,$nombre);
                $ps->bindParam(2,$direccion);
                $ps->bindParam(3,$celular);
                $ps->bindParam(4,$correo);
               
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