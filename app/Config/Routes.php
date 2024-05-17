<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/table', 'Home::table');
$routes->get('/pages/create', 'Home::create',  ['filter' => 'role:maker,admin']);
$routes->post('/pages/save', 'Home::save', ['filter' => 'role:maker,admin']);
$routes->delete('/pages/delete/(:num)', 'Home::delete/$1', ['filter' => 'role:approver,admin']);
$routes->get('/pages/edit/(:num)', 'Home::edit/$1', ['filter' => 'role:maker,admin']);
$routes->post('/pages/update/(:num)', 'Home::update/$1', ['filter' => 'role:maker,admin']);





