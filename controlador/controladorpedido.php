<?php
   
   require_once('modelo/modeloPedido.php');



   $pedido= new ModeloPedido();


   $datos=$pedido->ConsultaTodos();
   $fin=$pedido->finalizados();
   

   
   if(isset($_POST['detalles'])){
      $dato=$_POST['Criterio'];
      $deta=$pedido->Uno($dato);
  }



   
   require_once('vista/pedidos.php');
?>