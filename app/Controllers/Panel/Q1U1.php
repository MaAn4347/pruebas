<?php
namespace App\Controllers\Panel;

use App\Controllers\BaseController;

class Q1U1 extends BaseController{
    public function index(){
            return $this->crear_vista('panel/q1u1',$this->cargar_datos());
        
    }//fin index

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
