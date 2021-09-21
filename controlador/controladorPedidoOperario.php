<?php

session_start();//Iniciamos session
$usuarion= $_SESSION['usuario'];
 $ape=$_SESSION['apellido'];
 $oficio= $_SESSION['Oficio'];
 $fotito=$_SESSION['foto'];
 $doc=$_SESSION['doc'];
 $fech=$_SESSION['fecha'];
 $Correo=$_SESSION['correo'];
 $tel=$_SESSION['telefono'];
 $sex=$_SESSION['sexo'];
 $nombre=$_SESSION['nombre'];
    require_once('modelo/modeloPedidoOperario.php');

    $entrega= new todooperario();

    $datos=$entrega->Uno($doc);
    $proceso=$entrega->ENPROCESO($doc);
    $finalizado=$entrega->finalizado($doc);
    $material=$entrega->material($doc);


    if(isset($_POST['enviar'])){

        $idpedido=$_POST['idpedido'];
        $idmaterial=$_POST['idmaterial'];
        $estado=$_POST['estado'];
        $descripcion=$_POST['descripcion'];
        $ambiente=$_POST['ambiente'];
        $cantidad=$_POST['cantidad'];
        $fecha=$_POST['fecha'];

        

        $can=$entrega->cantidad($idpedido);

        foreach($can as $f){

            $valor= $f[0];

        }

        if($cantidad <= $valor){ 

            $est=$entrega->estado($idpedido,$idmaterial);

            if($est){ 

                echo '<script type="text/javascript">alert("Error, el pedido ya fue finalizado")</script>';

            }else{
                
                

                 $resultado=$entrega->proceso($idpedido,$idmaterial,$estado,$descripcion,$ambiente,$cantidad,$fecha);
                 $resultadoo=$entrega->procesos($idpedido,$idmaterial,$estado,$ambiente,$cantidad,$fecha);

                if($resultado > 0 && $resultadoo > 0){

                    echo '<script type="text/javascript">alert("Registro exitoso")</script>';
                }else{
                    
                    echo '<script type="text/javascript">alert("Error de registro")</script>';



                }
            }
        }else{

            echo '<script type="text/javascript">alert("Error de cantidad")</script>';
        }

    }


    if(isset($_POST['actualizar'])){

        $pedido=$_POST['idpedidoo'];
        $material=$_POST['idmateriall'];
        $esta=$_POST['ingreso'];
        $ambi=$_POST['ambientee'];
        $cant=$_POST['cantidadd'];
        $fech=$_POST['fechaa'];

   


        $can=$entrega->cantidad($pedido);
        

        foreach($can as $f){

            $valor= $f[0];

        }

        $verificacion=$entrega->en($pedido);

        foreach($verificacion as $f){

            $veri= $f[0];
        }

        $total= $veri + $cant;

        if($cant <= $valor && $total <= $valor){ 

            $est=$entrega->estado($pedido,$material);

            if($est){ 

                echo '<script type="text/javascript">alert("Error, el pedido ya fue finalizado")</script>';

            }else{
                
                

                 $resultado=$entrega->procesos($pedido,$material,$esta,$ambi,$cant,$fech);
                 $actualizacion=$entrega->actualizar($pedido,$material,$esta,$ambi,$cant,$fech);

                if($resultado > 0 && $actualizacion > 0){

                    echo '<script type="text/javascript">alert("Registro exitoso")</script>';
                }else{
                    
                    echo '<script type="text/javascript">alert("Error de registro")</script>';



                }
            }
        }else{

            echo '<script type="text/javascript">alert("Error de cantidad")</script>';
        }

    }


    require_once('vista/pedidoOperario.php');


?>