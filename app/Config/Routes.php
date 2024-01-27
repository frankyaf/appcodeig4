<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/Articulos', 'Articulos::index');

//$routes->get('/Articulos/listaArticulosPortada', 'listaArticulos::index');
$routes->get('/(:num)','Home::complete/$1');

$routes->group('Articulos',['namespace' => 'App\Controllers\api'],function($routes){
    $routes->get('listaArticulosPortada','listaArticulos::index');
    $routes->get('listaArticulosPortada/(:num)','listaArticulos::show/$1');
    $routes->post('listaArticulos/create','listaArticulos::create');
});