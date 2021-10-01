<?php

    require_once('modelo/Conexion.php');




    
  class ModeloCarrito{

    public function InsertarPedido($Idproducto,$idpedido,$cantidad,$valorunidad,$valortotal,$tamaño,$color,$logo,$fechacompra){

        $res=0;

        try {
             
            $sql_ins="insert into tb_Pedidosusu  values(?,?,?,?,?,?,?,?,?,CURDATE())";
            $ps=Conexion::conexionbd()->prepare($sql_ins);
            $ps->bindParam(1,$id);
            $ps->bindParam(2,$Idproducto);
            $ps->bindParam(3,$idpedido);
            $ps->bindParam(4,$cantidad,);
            $ps->bindParam(5,$valorunidad);
            $ps->bindParam(6,$valortotal);
            $ps->bindParam(7,$tamaño);
            $ps->bindParam(8,$color);
            $ps->bindParam(9,$logo);
          

            if($ps->execute()){

                $res=1;


            }else{
                $res=0;
            }

        } catch (Exception $e) {
            echo "Error al insertar  el pedido"."-".$e;
            return $res;
        }




    }

    public function Uno(){
        $usuarios=null;
        try{
           $sql2=("select ID FROM tb_Pedidos ORDER BY ID DESC LIMIT 1; ");
           $dep=Conexion::conexionbd()->prepare($sql2);
           
    

           $dep->execute();

           

           while($f = $dep->fetch()){

            $usuarios[]=$f;


           }

  
        }catch(Exception $e){
           echo"Error en la consulta".$e;
        }
       
        return $usuarios;

    }

    public function InsertarentbPedido($doccli,$total,$fechacomp){

        $ros=0;

        try {
             
            $sql_ins="insert into tb_pedidos values(?,?,?,CURDATE())";
            $pr=Conexion::conexionbd()->prepare($sql_ins);
            $pr->bindParam(1,$id);
            $pr->bindParam(2,$doccli);
           
              $pr->bindParam(3,$total);
          
          

            if($pr->execute()){

                $ros=1;


            }else{
                $ros=0;
            }

        } catch (Exception $e) {
            echo "Error al insertar  el pedido"."-".$e;
            return $ros;
        }




    }







  }




    

?>