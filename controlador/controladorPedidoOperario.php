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
    $procesados=$entrega->fueronprocesados($doc);
    $select=$entrega->select($doc);
    
    if(isset($_POST['detalles'])){

        $criterio=$_POST['criterio'];
        $otros=$entrega->otro($criterio,$doc);
    }

    if(isset($_POST['eliminar'])){

        $criterio=$_POST['criterio'];
        $criterioo=$_POST['criterioo'];
        $resultado=$entrega->eliminar_uno($criterioo);
        $resultado_dos=$entrega->eliminar_dos($criterio);

        if($resultado > 0 && $resultado_dos > 0){ 

            echo '<script type="text/javascript">alert("Registro eliminado");self.location="pedidoOpe.php";</script>';

        }else{

            echo '<script type="text/javascript">alert("Error, no pudo ser eliminado");self.location="pedidoOpe.php";</script>';

        }

    }


    if(isset($_POST['enviar'])){

        $idpedido=$_POST['idpedido'];
        $idmaterial=$_POST['idmaterial'];
        $idproducto=$_POST['idproducto'];
        $estado=$_POST['estado'];
        $descripcion=$_POST['descripcion'];
        $ambiente=$_POST['ambiente'];
        $cantidad=$_POST['cantidad'];
        $fecha=$_POST['fecha'];

        

        
        $uno=$entrega->ma($idproducto,$idpedido,$idmaterial);

        if($uno){ 

            $can=$entrega->cant($idpedido,$idproducto);

            foreach($can as $f){

                $valor= $f[0];

            }
            

                if($cantidad < $valor){ 

                    $est=$entrega->estado($idpedido,$idmaterial);

                    if($est){ 

                        echo '<script type="text/javascript">alert("Error, el pedido ya fue finalizado");self.location="pedidoOpe.php";</script>';

                    }else{
                        
                        $existe=$entrega->revision($idpedido,$estado);

                        if($existe){ 
                        
                            echo '<script type="text/javascript">alert("Error, el registro ya se encuentra en proceso");self.location="pedidoOpe.php";</script>';

                            
                        }else{
                            
                        
                            
                                    $resultado=$entrega->proceso($idmaterial,$idpedido,$estado,$descripcion,$ambiente,$cantidad,$fecha,$idproducto);
                                    $resultadoo=$entrega->procesos($idpedido,$idmaterial,$estado,$ambiente,$cantidad,$fecha,$idproducto);

                                    if($resultado > 0 && $resultadoo > 0){

                                        echo '<script type="text/javascript">alert("Registro exitoso");self.location="pedidoOpe.php";</script>';
                                    }else{
                                        
                                        echo '<script type="text/javascript">alert("Error de registro 1");self.location="pedidoOpe.php";</script>';

                                    }
                        
                        }
                    }
                }else{

                    echo '<script type="text/javascript">alert("Error de cantidad");self.location="pedidoOpe.php";</script>';
                }
    }else{

        echo '<script type="text/javascript">alert("Error, el producto de la entrega del material no coincide con el ingresado");self.location="pedidoOpe.php";</script>';

    }


    }


    if(isset($_POST['actualizar'])){

        $pedido=$_POST['idpedidoo'];
        $material=$_POST['idmateriall'];
        $idproducto=$_POST['idproductoo'];
        $esta=$_POST['ingreso'];
        $ambi=$_POST['ambientee'];
        $cant=$_POST['cantidadd'];
        $fech=$_POST['fechaa'];

          
        $uno=$entrega->ma($idproducto,$pedido,$material);


        if($uno){ 



                $can=$entrega->cant($pedido,$idproducto);
                

                foreach($can as $f){

                    $valor= $f[0];

                }

                $verificacion=$entrega->en($pedido,$idproducto);

                foreach($verificacion as $f){

                    $veri= $f[0];
                }

                $total= $veri + $cant;

                if($cant <= $valor && $total <= $valor && $cant > 0){ 

                    $est=$entrega->estado($pedido,$material);

                    if($est){ 

                        echo '<script type="text/javascript">alert("Error, el pedido ya fue finalizado");self.location="pedidoOpe.php";</script>';

                    }else{
                
                

                if($esta == 'FINALIZADO'){ 

                        if($total == $valor ){ 

                            $resultado=$entrega->procesos($pedido,$material,$esta,$ambi,$cant,$fech,$idproducto);
                            $actualizacion=$entrega->actualizar($pedido,$material,$esta,$ambi,$cant,$fech);

                            if($resultado > 0 && $actualizacion > 0){

                                echo '<script type="text/javascript">alert("Registro exitoso");self.location="pedidoOpe.php";</script>';
                            }else{
                                
                                echo '<script type="text/javascript">alert("Error de registro");self.location="pedidoOpe.php";</script>';



                            }
                        
                        }else if($total > $valor){

                             echo '<script type="text/javascript">alert("Error, la cantidad producida es mayor a la del pedido");self.location="pedidoOpe.php";</script>';
                        
                        }else{

                            echo '<script type="text/javascript">alert("Error, la cantidad producida no puede ser menor a la del pedido por el estado se quiere registrar en el proceso");self.location="pedidoOpe.php";</script>';

                        }

                }else if($esta == 'EN PROCESO'){ 

                    if($total < $valor){

                        $resultado=$entrega->procesos($pedido,$material,$esta,$ambi,$cant,$fech,$idproducto);
                            $actualizacion=$entrega->actualizar($pedido,$material,$esta,$ambi,$cant,$fech);

                            if($resultado > 0 && $actualizacion > 0){

                                echo '<script type="text/javascript">alert("Registro exitoso");self.location="pedidoOpe.php";</script>';
                            }else{
                                
                                echo '<script type="text/javascript">alert("Error de registro");self.location="pedidoOpe.php";</script>';



                            }
                       
                    }else{

                        echo '<script type="text/javascript">alert("Error, la cantidad no puede ser mayor o igual a la del pedido por el estado que quieres registrar en el proceso.");self.location="pedidoOpe.php";</script>';

                    }
            
                
                }else{

                        echo '<script type="text/javascript">alert("Error, estado incorrecto");self.location="pedidoOpe.php";</script>';

                }

                
            }
        }else{

            echo '<script type="text/javascript">alert("Error, cantidad no permitida");self.location="pedidoOpe.php";</script>';
        }
    }else{

        echo '<script type="text/javascript">alert("Error, el producto de la entrega del material no coincide con el ingresado");self.location="pedidoOpe.php";</script>';

    }

    }


    require_once('vista/pedidoOperario.php');


?>