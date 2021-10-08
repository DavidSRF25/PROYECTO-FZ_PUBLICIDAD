<?php
   
   session_start();
   $usuarion= $_SESSION['usuario'];
   $fotito=$_SESSION['foto'];


   require_once('modelo/modeloPedido.php');
   require_once('modelo/modeloPedidoOperario.php');
   require_once('modelo/modeloBodega.php');


   $n= new todooperario();
   $pedido= new ModeloPedido();
   $b= new Modelobodega();


   $datos=$pedido->ConsultaTodos();
   $fin=$pedido->finalizados();
   $bodega=$b->entregados();
   $asignados=$pedido->pedidosasignados();
   $clientes=$pedido->PEDIDOS();

   $operarios=$pedido->operarios();


   if(isset($_POST['de'])){

      $criterio=$_POST['dato'];
      $detalles=$pedido->con($criterio);

   }
   
   if(isset($_POST['detalles'])){
      $dato=$_POST['Criterio'];
      $deta=$pedido->Uno($dato);
  }

  if(isset($_POST['enviar'])){
   
      $pedido=$_POST['idpedido'];
      $operario=$_POST['idoperario'];
      /*
      $material=$_POST['idma'];

      

      $materia=$b->entre($material);

      foreach($materia as $f){

         $id= $f[3];
      }*/

      
     /* if($operario == $id ){ */
         
         $existe=$b->observacion($pedido,$operario);

         if($existe){ 

            echo "<script type='text/javascript'>alert('Error, La entrega ya fue registada');self.location='pedido.php';</script>";

               
         }else{

            $resultado=$n->nuevo($pedido,$operario);

                  if($resultado > 0){

                     echo "<script type='text/javascript'>alert('Pedido Registrado');self.location='pedido.php';</script>";
                  }else{

                     echo "<script type='text/javascript'>alert('Erro Registro');self.location='pedido.php';</script>";
                  }

         }

      /*}else{

            echo "<script type='text/javascript'>alert('Error, no coincide el documento del operario en la entrega del material con el que estas ingresando.');self.location='pedido.php';</script>";
            
      }*/
}

   if(isset($_POST['actualizar'])){

      $idd=$_POST['ida'];
      $pedido=$_POST['idpedidoa'];
      $operario=$_POST['idoperarioa'];
      /*$material=$_POST['idmaa']; 

      
      $materia=$b->entre($material);

      foreach($materia as $f){

         $id= $f[3];
      }

      
      if($operario == $id ){ */
         
         $existe=$b->observacion($pedido,$operario);

         if($existe){ 

            echo "<script type='text/javascript'>alert('Error, La entrega ya fue registada');self.location='pedido.php';</script>";

               
         }else{

            $resultado=$n->actualizarr($idd,$pedido,$operario);

                  if($resultado > 0){

                     echo "<script type='text/javascript'>alert('Actualización exitosa');self.location='pedido.php';</script>";
                  }else{

                     echo "<script type='text/javascript'>alert('Error de actualización');self.location='pedido.php';</script>";
                  }

         }

     /*) }else{

            echo "<script type='text/javascript'>alert('Error, no coincide el documento del operario en la entrega del material con el que estas ingresando.');self.location='pedido.php';</script>";
            
      }
*/


   }
   
   require_once('vista/pedidos.php');
?>