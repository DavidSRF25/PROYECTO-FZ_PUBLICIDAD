<?php 


require_once("modelo/Conexion.php");

  class Modelomicuenta{



    public function Miusuypass($doc){
        $usupass=null;
        try{
           $sql2="  select * from tb_usuarios where  docusu=?";
           $usu=Conexion::conexionbd()->prepare($sql2);
           $usu->bindParam(1,$doc);
           $usu->execute();

           

           while($f = $usu->fetch()){

            $usupass[]=$f;


           }

  
        }catch(Exception $e){
           echo"Error en la consulta".$e;
        }
        
       
        return $usupass;

    }

    public function Misdatos($doc){
        $datosm=null;
        try{
           $sql2="  select * from tb_Personal where  doc=?";
           $usu=Conexion::conexionbd()->prepare($sql2);
           $usu->bindParam(1,$doc);
           $usu->execute();

           

           while($f = $usu->fetch()){

            $datosm[]=$f;


           }

  
        }catch(Exception $e){
           echo"Error en la consulta".$e;
        }
        
       
        return $datosm;

    }

    public function actualizarUsu($documento,$nombre,$password,$rol,$foto){
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
          echo "Error al actualizar".$e;
      }

      return $res;
       
   }

   public function actualizarmisdatos($doc, $nom, $ape, $correo, $celular, $sexo, $direccion, $fechanaci){
      $res=0;
      try {
          $sql_ins="update tb_Personal set  nom=?, ape=?, correo=?, celular=?, sexo=?, direccion=?, fechanaci=?  WHERE doc=?";
          $ps=Conexion::conexionbd()->prepare($sql_ins);
          $ps->bindParam(8,$doc);
          $ps->bindParam(1,$nom);
          $ps->bindParam(2,$ape);
          $ps->bindParam(3,$correo);
          $ps->bindParam(4,$celular);
          $ps->bindParam(5, $sexo);
          $ps->bindParam(6,$direccion);
          $ps->bindParam(7, $fechanaci);
       
          
          if($ps->execute()){
            $res=1;
          }else{
              $res=0;
          }
      } catch (Exception $e) {
          echo "Error al actualizar".$e;
      }

      return $res;
       
   }














 }





?> 