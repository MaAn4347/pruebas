<?php
namespace App\Controllers\Usuario;

use App\Controllers\BaseController;

class Index extends BaseController{
    public function index(){
            return $this->crear_vista('usuario/index',$this->cargar_datos());
        
    }//fin index
    public function loguear(){
        $email=$this->request->getPost('email');
        $password=$this->request->getPost('password');
        $tabla_usuarios=new \App\Models\Tabla_usuarios;
        $usuario=$tabla_usuarios->obtener_logueo_usuario($email,$password);
        if($usuario != NULL){
            $session=session();
            $session->set('is_sesion_iniciada',TRUE);
            $session->set('id_usuario',$usuario->id_usuario);
            $session->set('nombre_completo_usuasio',$usuario->nombre.' '.$usuario->ap_paterno.' '.$usuario->ap_materno);
            $session->set('email_usuario',$usuario->e_mail);
            return redirect()->to(route_to('inicio'));
        }else{
            mensaje("Datos incorrectos",'Por favor, verifica tus datos de acceso y vuelve a interntarlo','error','3500');
            return redirect()->to(route_to('index'));
        }
    }//fin loguear

    private function cargar_datos(){
        $datos=array();

        $datos['nombre_tab']='Inicio';
        $navegacion=array();
        /*$navegacion=array(
            array(
                'tarea'=> 'Nombre tarea',
                'href'=>'#'
            )
        );*/
        return $datos;
    }//end cargar_datos
    
    private function crear_vista($nombre_vista="", $contenido=array()){
        $contenido['menu']=crear_menu_panel();
        return view($nombre_vista,$contenido);
    }//end crear vista
}
