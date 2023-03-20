<?php
function configurar_menu_panel(){
    $menu=array();
    $menu_item=array();
    $sub_menu_item=array();

    //Se empeiza la configuración
    //Dashboard
    $menu_item['is_active']=FALSE;
    $menu_item['href']=route_to('inicio');
    $menu_item['icon']='fa fa-home';
    $menu_item['texto']='Inicio';
    $menu_item['submenu']=array();
    $menu['inicio']=$menu_item;

  
    //Usuarios
    

    $menu_item=array();
    $menu_item['is_active']=FALSE;
    $menu_item['href']=route_to('acerca_de');
    $menu_item['icon']='fa fa-user';
    $menu_item['texto']='Acerca del software';
    $menu_item['submenu']=array();
    $menu['acerca_de']=$menu_item;

    $menu_item=array();
    $menu_item['is_active']=FALSE;
    $menu_item['href']=route_to('perfil');
    $menu_item['icon']='fa fa-user';
    $menu_item['texto']='Mi perfil';
    $menu_item['submenu']=array();
    $menu['perfil']=$menu_item;

    //Ejemplo submenu 2 niveles
    $menu_item=array();
    $menu_item['is_active']=FALSE;
    $menu_item['href']='#';
    $menu_item['icon']='fa fa-book';
    $menu_item['texto']='Unidades';
    $menu_item['submenu']=array();

        //submenu 1
        $sub_menu_item=array();
        $sub_menu_item['is_active']=FALSE;
        $sub_menu_item['href']=route_to('unidad1');
        $sub_menu_item['icon']='icono';
        $sub_menu_item['texto']='Unidad 1';
        $menu_item['submenu']['submenu_1']=$sub_menu_item;

        //submenu2
        $sub_menu_item=array();
        $sub_menu_item['is_active']=FALSE;
        $sub_menu_item['href']=route_to('unidad2');
        $sub_menu_item['icon']='icono';
        $sub_menu_item['texto']='Unidad 2';
        $menu_item['submenu']['submenu_2']=$sub_menu_item;

        $sub_menu_item=array();
        $sub_menu_item['is_active']=FALSE;
        $sub_menu_item['href']=route_to('unidad3');
        $sub_menu_item['icon']='icono';
        $sub_menu_item['texto']='Unidad 3';
        $menu_item['submenu']['submenu_3']=$sub_menu_item;

    $menu['submenu_ejemplo']=$menu_item;

    //Ejemplo submenu 3 niveles

    return $menu;
}

function activar_menu($menu=NULL, $tarea_actual=NULL){
    switch ($tarea_actual) {
        //dashboard
        case TAREA_INICIO:
            $menu['inicio']['is_active']=TRUE;
        break;
        //Usuarios
        case TAREA_CURSOS:
            $menu['cursos']['is_active']=TRUE;
        break;

        default:

        break;
    }//end switch tarea_actual
    return $menu;
}//end funcion activar_menu_item_panel


function crear_menu_panel()
{
    $html='';
    $menu=configurar_menu_panel();
    $menu=activar_menu($menu);


    foreach ($menu as $menu_item ) {
        if ($menu_item['href']!='#') {
            $html.='
            <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li><a href="'.$menu_item['href'].'">'.$menu_item['texto'].'</a>
                </li>
            </ul>
            </nav>
            ';
        }
        else {
            $html.='
            <nav id="nav-menu-container"
            <li class="menu-has-children">
                <a  href="" > '.$menu_item['texto'].'
                </a> </li>

            ';
            if(sizeof($menu_item['submenu'])>0){
                $html.='
                <ul>
                ';
                foreach ($menu_item['submenu'] as $sub_menu_item) {
                    if ($sub_menu_item['href']!='#') {
                        $html.='
                            <li class="menu-has-children">
                            <a href="'.$sub_menu_item['href'].'" >'.$sub_menu_item['texto'].'</a>
                            </a>
                            </li>

                        ';
                    }

                }//end foreach submenu
                $html.='
                    </ul>
                ';
            }//end inf existe los subniveles
            $html.='
                </ul>
            ';
        }//end else el menu_item no tiene submenu


    }//end foreach $menu
    return $html;
}//end crear_menu_panel
