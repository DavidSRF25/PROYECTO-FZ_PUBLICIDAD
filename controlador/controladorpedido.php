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
   
   $clientes=$pedido->PEDIDOS();

   $operarios=$pedido->operarios();
   
   if(isset($_POST['detalles'])){
      $dato=$_POST['Criterio'];
      $deta=$pedido->Uno($dato);
  }

  if(isset($_POST['enviar'])){
   
      $pedido=$_POST['idpedido'];
      $operario=$_POST['idoperario'];
      $material=$_POST['idma'];

      $resultado=$n->nuevo($pedido,$material,$operario);

      if($resultado > 0){

         echo "<script type='text/javascript'>alert('Pedido Registrado');</script>";
      }else{

         echo "<script type='text/javascript'>alert('Erro Registro');</script>";
      }
}

   
   require_once('vista/pedidos.php');
?>