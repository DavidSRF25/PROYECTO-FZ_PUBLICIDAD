<?php

    require_once('modelo/Conexion.php');




    
  class ModeloCarrito{

    public function InsertarPedido($Idproducto,$cantidad,$valorunidad,$valortotal,$tamaño,$color,$logo,$fechacompra){

        $res=0;

        try {
             
            $sql_ins="insert into tb_Pedidosusu  values(?,?,?,?,?,?,?,?,now())";
            $ps=Conexion::conexionbd()->prepare($sql_ins);
            $ps->bindParam(1,$id);
            $ps->bindParam(2,$Idproducto);
            $ps->bindParam(3,$cantidad,);
            $ps->bindParam(4,$valorunidad);
            $ps->bindParam(5,$valortotal);
            $ps->bindParam(6,$tamaño);
            $ps->bindParam(7,$color);
            $ps->bindParam(8,$logo);
          

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








  }




    

?>