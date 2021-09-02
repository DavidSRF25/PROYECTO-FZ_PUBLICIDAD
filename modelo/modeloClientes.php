<?php 

 require_once('Conexion.php');


 class ModeloCli{

    public function ConsultaTodos(){
        try{
            $sql="select p.doc,p.nom,p.ape,u.rol,p.correo,p.celular,p.sexo,p.direccion,p.fechanaci from tb_personal as p inner join tb_usuarios as u on p.doc=u.docusu  where u.rol='CLIENTE';"; 
            $conecta=Conexion::conexionbd()->prepare($sql); //preparar consulta
            $conecta->execute(); //ejecuta la consulta
            while($fila3=$conecta->fetch()){
                $clientes[]=$fila3;
            }
       }catch(Exception $e){
           echo "Error en la consulta: ".$e;
       }
      return $clientes;
    }


    public function Uno($criterio){
        $clientes=null;
        try{
           $sql2="select * from tb_personal where doc=?" ;
           $dep=Conexion::conexionbd()->prepare($sql2);
           $dep->bindParam(1,$criterio);
    

           $dep->execute();

           

           while($f = $dep->fetch()){

            $clientes[]=$f;


           }

  
        }catch(Exception $e){
           echo"Error en la consulta".$e;
        }
       
        return $clientes;

    }

 }

?>