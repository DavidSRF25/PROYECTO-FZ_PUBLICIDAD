<?php

    require_once('modelo/modeloClientes.php');


    $clientes= new ModeloCli();

    $todos= $clientes->ConsultaTodos();

       
   if(isset($_POST['detalles'])){
    $dato=$_POST['Criterio'];
    $detalle=$clientes->Uno($dato);
}






    require_once('vista/vistaDatos-clientes.php');
?>