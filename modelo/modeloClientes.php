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

    public function Insertarpersonal($doc,$nom,$ape,$correo,$celular,$sexo,$direccion,$fechanac){

        $res=0;

        try {
             
            $sql_ins="insert into tb_personal value(?,?,?,?,?,?,?,?)";
            $ps=Conexion::conexionbd()->prepare($sql_ins);
            $ps->bindParam(1,$doc);
            $ps->bindParam(2,$nom);
            $ps->bindParam(3,$ape);
            $ps->bindParam(4,$correo);
            $ps->bindParam(5,$celular);
            $ps->bindParam(6,$sexo);
            $ps->bindParam(7,$direccion);
            $ps->bindParam(8,$fechanac);

            if($ps->execute()){

                $res=1;


            }else{
                $res=0;
            }

        } catch (Exception $e) {
            echo "Error al insertar cliente";
            return $res;
        }




    }

 }

?>