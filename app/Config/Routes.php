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
});

/**
 * Modulo de Paquetes
 */
$routes->group('paquetes', ['namespace' => 'App\Controllers'], function ($routes) {
    $routes->get('/', 'Paquetes::index', ['as' => 'paquetes']);
    $routes->post('agregar', 'Paquetes::agregar', ['as' => 'agregar_paquete']);
});

/**
 * Modulo de Tienda
 */
$routes->group('tienda', ['namespace' => 'App\Controllers'], function ($routes) {
    $routes->get('/', 'Tienda::index', ['as' => 'tienda_dashboard']);
    $routes->get('create', 'Clientes::create', ['as' => 'agregar_cliente']);
    $routes->post('create', 'Clientes::store', ['as' => 'store_cliente']);
});

/**
 * Modulo de Paquetes Online
 */
$routes->group('paquetes_online', ['namespace' => 'App\Controllers'], function ($routes) {
    $routes->get('/', 'Paquetes_online::index', ['as' => 'paquetes_online']);
    $routes->post('create', 'Paquetes_online::create', ['as' => 'agregar_paquetes_online']);
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
