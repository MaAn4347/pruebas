<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Usuario\Index::index',['as'=>'index']);
$routes->post('/loguear_usuario', 'Usuario\Index::loguear',['as'=>'loguear_usuario']);

$routes->get('/inicio', 'Usuario\Inicio::index',['as'=>'inicio']);
$routes->get('/cerrar_sesion', 'Usuario\Logout::index',['as'=>'cerrar_sesion']);


////////////////////Routes para la unidad 1//////////////////////
$routes->get('/unidad1', 'Panel\Unidad1::index',['as'=>'unidad1']);
$routes->get('/u1tema1', 'Panel\U1Tema1::index',['as'=>'u1tema1']);
$routes->get('/u1tema2', 'Panel\U1Tema2::index',['as'=>'u1tema2']);
$routes->get('/u1tema3', 'Panel\U1Tema3::index',['as'=>'u1tema3']);
$routes->get('/u1tema4', 'Panel\U1Tema4::index',['as'=>'u1tema4']);
$routes->get('/u1tema5', 'Panel\U1Tema5::index',['as'=>'u1tema5']);
$routes->get('/u1tema6', 'Panel\U1Tema6::index',['as'=>'u1tema6']);
$routes->get('/u1tema7', 'Panel\U1Tema7::index',['as'=>'u1tema7']);
$routes->get('/u1tema8', 'Panel\U1Tema8::index',['as'=>'u1tema8']);
$routes->get('/q1u1', 'Panel\Q1U1::index',['as'=>'q1u1']);
$routes->get('/q2u1', 'Panel\Q2U1::index',['as'=>'q2u1']);
$routes->get('/q3u1', 'Panel\Q3U1::index',['as'=>'q3u1']);
$routes->get('/q4u1', 'Panel\Q4U1::index',['as'=>'q4u1']);
$routes->get('/q5u1', 'Panel\Q5U1::index',['as'=>'q5u1']);
$routes->get('/q6u1', 'Panel\Q6U1::index',['as'=>'q6u1']);
$routes->get('/q7u1', 'Panel\Q7U1::index',['as'=>'q7u1']);
$routes->get('/q8u1', 'Panel\Q8U1::index',['as'=>'q8u1']);


//////////////////Routes para la unidad 2//////////////////////////////////
$routes->get('/unidad2', 'Panel\Unidad2::index',['as'=>'unidad2']);
$routes->get('/u2tema1', 'Panel\U2Tema1::index',['as'=>'u2tema1']);
$routes->get('/u2tema2', 'Panel\U2Tema2::index',['as'=>'u2tema2']);
$routes->get('/u2tema3', 'Panel\U2Tema3::index',['as'=>'u2tema3']);
$routes->get('/u2tema4', 'Panel\U2Tema4::index',['as'=>'u2tema4']);
$routes->get('/u2tema5', 'Panel\U2Tema5::index',['as'=>'u2tema5']);
$routes->get('/u2tema6', 'Panel\U2Tema6::index',['as'=>'u2tema6']);
$routes->get('/u2tema7', 'Panel\U2Tema7::index',['as'=>'u2tema7']);
$routes->get('/u2tema8', 'Panel\U2Tema8::index',['as'=>'u2tema8']);
$routes->get('/u2tema9', 'Panel\U2Tema9::index',['as'=>'u2tema9']);
$routes->get('/q1u2', 'Panel\Q1U2::index',['as'=>'q1u2']);
$routes->get('/q2u2', 'Panel\Q2U2::index',['as'=>'q2u2']);
$routes->get('/q3u2', 'Panel\Q3U2::index',['as'=>'q3u2']);
$routes->get('/q4u2', 'Panel\Q4U2::index',['as'=>'q4u2']);
$routes->get('/q5u2', 'Panel\Q5U2::index',['as'=>'q5u2']);
$routes->get('/q6u2', 'Panel\Q6U2::index',['as'=>'q6u2']);
$routes->get('/q7u2', 'Panel\Q7U2::index',['as'=>'q7u2']);
$routes->get('/q8u2', 'Panel\Q8U2::index',['as'=>'q8u2']);
$routes->get('/q9u2', 'Panel\Q9U2::index',['as'=>'q9u2']);

$routes->get('/sp', 'Panel\SP::index',['as'=>'sp']);
/////////////////////////UNIDAD 3//////////////////////////////////

$routes->get('/unidad3', 'Panel\Unidad3::index',['as'=>'unidad3']);

$routes->get('/u3tema1', 'Panel\U3Tema1::index',['as'=>'u3tema1']);
$routes->get('/u3tema2', 'Panel\U3Tema2::index',['as'=>'u3tema2']);
$routes->get('/u3tema3', 'Panel\U3Tema3::index',['as'=>'u3tema3']);
$routes->get('/u3tema4', 'Panel\U3Tema4::index',['as'=>'u3tema4']);
$routes->get('/u3tema5', 'Panel\U3Tema5::index',['as'=>'u3tema5']);
$routes->get('/u3tema6', 'Panel\U3Tema6::index',['as'=>'u3tema6']);
$routes->get('/u3tema7', 'Panel\U3Tema7::index',['as'=>'u3tema7']);
$routes->get('/q1u3', 'Panel\Q1U3::index',['as'=>'q1u3']);
$routes->get('/q2u3', 'Panel\Q2U3::index',['as'=>'q2u3']);
$routes->get('/q3u3', 'Panel\Q3U3::index',['as'=>'q3u3']);
$routes->get('/q4u3', 'Panel\Q4U3::index',['as'=>'q4u3']);
$routes->get('/q5u3', 'Panel\Q5U3::index',['as'=>'q5u3']);
$routes->get('/q6u3', 'Panel\Q6U3::index',['as'=>'q6u3']);
$routes->get('/q7u3', 'Panel\Q7U3::index',['as'=>'q7u3']);

//////////JUEGOS////////////////////
$routes->get('/j1u1', 'Panel\J1U1::index',['as'=>'j1u1']);
$routes->get('/j2u1', 'Panel\J2U1::index',['as'=>'j2u1']);
$routes->get('/j3u1', 'Panel\J3U1::index',['as'=>'j3u1']);
$routes->get('/j4u1', 'Panel\J4U1::index',['as'=>'j4u1']);
$routes->get('/j5u1', 'Panel\J5U1::index',['as'=>'j5u1']);
$routes->get('/j6u1', 'Panel\J6U1::index',['as'=>'j6u1']);
$routes->get('/j7u1', 'Panel\J7U1::index',['as'=>'j7u1']);
$routes->get('/j8u1', 'Panel\J8U1::index',['as'=>'j8u1']);

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
