<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Inicio');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Inicio::index');

$routes->group('login', ['namespace' => 'App\Controllers'], function ($routes) {
    $routes->get('/', 'Login::index', ['as' => 'login']);
    $routes->post('login', 'Login::login', ['as' => 'verify']);
    $routes->get('logout', 'Login::logout', ['as' => 'logout']);
});

/**
 * Modulo de Clientes
 */
$routes->group('clientes', ['namespace' => 'App\Controllers'], function ($routes) {
    $routes->get('/', 'Clientes::index', ['as' => 'clientes']);
    $routes->get('create', 'Clientes::create', ['as' => 'agregar_cliente']);
    $routes->post('create', 'Clientes::store', ['as' => 'store_cliente']);
    $routes->get('show/(:any)', 'Clientes::show/$1', ['as' => 'ver_cliente']);
    $routes->get('update', 'Clientes::update', ['as' => 'actualizar_cliente']);
});

/**
 * Modulo de Paquetes
 */
$routes->group('paquetes', ['namespace' => 'App\Controllers'], function ($routes) {
    $routes->get('/', 'Paquetes::index', ['as' => 'paquetes']);
    $routes->post('create', 'Paquetes::create', ['as' => 'agregar_paquete']);
    $routes->post('create', 'Paquetes::store', ['as' => 'store_paquete']);
    $routes->get('show/(:any)', 'Paquetes::show/$1', ['as' => 'ver_paquete']);
    $routes->get('update', 'Paquetes::update', ['as' => 'actualizar_paquete']);
});

/**
 * Modulo de Paquetes Normales
 */
$routes->group('paquetes_normales', ['namespace' => 'App\Controllers'], function ($routes) {
    $routes->get('/', 'Paquetes_normales::index', ['as' => 'paquetes_normales']);
    $routes->post('create', 'Paquetes_normales::create', ['as' => 'agregar_paquete_normal']);
    $routes->post('create', 'Paquetes::store', ['as' => 'store_paquete_normal']);
    $routes->get('show/(:any)', 'Paquetes::show/$1', ['as' => 'ver_paquete']);
    $routes->get('update', 'Paquetes::update', ['as' => 'actualizar_paquete']);
});

/**
 * Modulo de Tienda
 */
$routes->group('tienda', ['namespace' => 'App\Controllers'], function ($routes) {
    $routes->get('/', 'ApiTienda::index', ['as' => 'tienda_dashboard']);
    $routes->get('create', 'Clientes::create', ['as' => 'agregar_cliente']);
    $routes->post('create', 'Clientes::store', ['as' => 'store_cliente']);
});

/**
 * Modulo de Paquetes Online
 */
$routes->group('paquetes_online', ['namespace' => 'App\Controllers'], function ($routes) {
    $routes->get('/', 'Paquetes_online::index', ['as' => 'paquetes_online']);
    $routes->post('create', 'Paquetes_online::create', ['as' => 'agregar_paquetes_online']);
    $routes->get('show/(:any)', 'Paquetes_online::show/$1', ['as' => 'ver_orden_paquetes_online']);
});

/**
 * Modulo de Categorias
 */
$routes->group('categorias', ['namespace' => 'App\Controllers'], function ($routes) {
    $routes->get('/', 'Categorias::index', ['as' => 'categorias']);
    $routes->get('create', 'Categorias::create', ['as' => 'agregar_categoria']);
    $routes->post('create', 'Categorias::store', ['as' => 'store_categoria']);
    $routes->get('show/(:any)', 'Categorias::show/$1', ['as' => 'ver_categoria']);
    $routes->get('update', 'Categorias::update', ['as' => 'actualizar_categoria']);
});

/**
 * Modulo de Seguimiento
 */
$routes->group('seguimientos', ['namespace' => 'App\Controllers'], function ($routes) {
    $routes->get('/', 'Seguimientos::index', ['as' => 'categorias']);
    $routes->get('create', 'Seguimientos::create', ['as' => 'agregar_categoria']);
    $routes->post('create', 'Seguimientos::store', ['as' => 'store_categoria']);
    $routes->post('cargar_seguimiento', 'Seguimientos::cargar_seguimiento', ['as' => 'cargar_seguimiento']);
});
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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
