<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->setAutoRoute(true)  ;

// dashboard route
$routes->get('/', 'Dashboard::index');
$routes->get('/dashboard', 'Dashboard::index');

// categories route
$routes->get('/categories', 'Categories::index');
$routes->get('/categories/create', 'Categories::create');
$routes->post('/categories/save', 'Categories::save');
$routes->get('/categories/edit/(:any)', 'Categories::edit/$1');
$routes->post('/categories/update', 'Categories::update');
$routes->get('/categories/delete/(:any)', 'Categories::delete/$1');

// supply route
$routes->get('/supply', 'Supply::index');
$routes->get('/supply/create', 'Supply::create');
$routes->post('/supply/save', 'Supply::save');
$routes->get('/supply/edit/(:any)', 'Supply::edit/$1');
$routes->post('/supply/update', 'Supply::update');

// log route
$routes->get('/logs', 'Logs::index');

// user route
$routes->get('/users', 'Users::index');
$routes->get('/users/create', 'Users::create');
$routes->post('/users/save', 'Users::save');
$routes->get('/users/view/(:any)', 'Users::view/$1');
$routes->get('/users/edit/(:any)', 'Users::edit/$1');
$routes->get('/users/edit_password/(:any)', 'Users::edit_password/$1');
$routes->post('/users/update', 'Users::update');
$routes->post('/users/update_password', 'Users::update_password');


// $routes->post('/save', 'CrudFunction::save');
// $routes->get('/edit/(:any)', 'CrudFunction::edit/$1');
// $routes->post('/update', 'CrudFunction::update');
// $routes->get('/delete/(:any)', 'CrudFunction::delete/$1');


 
