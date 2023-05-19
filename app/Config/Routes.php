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
//$routes->get('/', 'Home::index');

//INICIO

$routes->match(['get','post'],'/', 'HomeController::index', ['as' => 'inicio']);


//FORMULARIOS LOGIN
$routes->match(['get','post'],'login', 'AuthController::formularioLogin', ['as' => 'login']);
$routes->get('logout', 'AuthController::salir', ['as' => 'logout']);

//FORMULARIOS REGISTRO
$routes->match(['get','post'],'registrarse', 'AuthController::formularioRegistro', ['as' => 'formularioRegistro']);



//Al enviar Formulario Registro nos redirege aqui
//Controllador->funcion donde guardamos los datos
$routes->post('/guardado', 'AuthController::guardarRegistro', ['as' => 'guardar']);

//El Formulario de Logueo nos trae aqui y de aca vamos para la funcion CHECK
//Controlador->funcion donde verificamos la identidad del usuario desde el LOGIN
$routes->post('signin', 'AuthController::check', ['as' => 'controlUsuario']);




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

//$routes->match(['get','post'],'login', 'Autenticacion\LoginController::entrar', ['as' => 'signin']);
