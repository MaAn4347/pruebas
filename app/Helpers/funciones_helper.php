<?php

function mensaje($titulo="",$texto="",$tipo="warning", $tiempo=2000){

       $mensaje = array();
       $mensaje['titulo'] = $titulo;
       $mensaje['mensaje'] = $texto;
       $mensaje['tipo'] = $tipo;
       $mensaje['tiempo'] = $tiempo;
       session()->set('mensaje',$mensaje);
} //end of fuction mensaje

function mostrar_mensaje(){
         $session = session();
         $mensaje = $session->mensaje;
         $session->set('mensaje', NULL);

         if($mensaje == NULL){
             return "";
           } //end if no hay mensaje a mostrar
             else{
                       $tipo_mensaje = "";
                       $html = "";
                       switch ($mensaje['tipo']) {
                           case 'success':
                                $tipo_mensaje = 'toastr.success';
                           break;
                           case 'warning':
                                $tipo_mensaje = 'toastr.warning';
                           break;
                           case 'error':
                                $tipo_mensaje = 'toastr.error';
                           break;
                           case 'info':
                                $tipo_mensaje = 'toastr.info';
                           break;

                           default:
                              $tipo_mensaje = 'toastr.info';
                               break;
                       } //fin switch mensaje

                       $options = '
                       {
                           "closeButton": true,
                            "positionClass": "toast-top-center",
                            "progressBar": true,
                            "showMethod": "slideDown",
                            "hideMethod": "slideUp",
                            "timeOut": "'.$mensaje['tiempo'].'"
                       }
                       ';

                        $html = '
                        <script>
                                '.$tipo_mensaje.'(
                                   "'.$mensaje['mensaje'].'",
                                    "'.$mensaje['titulo'].'",
                                    '.$options.'

                            );
                        </script>

                        ';
                        return $html;

             }//end else no hay mensaje que mostrar
} //end of fuction mostarar mensaje
?>
