<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Auth::login');
$routes->get('/login', 'Auth::login');
$routes->post('/auth/process', 'Auth::process');
$routes->get('/auth/logout', 'Auth::logout');
$routes->get('/todolist', 'todolistController');
$routes->get('/register', 'Auth::register');
$routes->post('/auth/register', 'Auth::registerProcess');
$routes->get('/todolist', 'todolistController::index');
$routes->post('/todolist/add', 'todolistController::add');
$routes->get('/todolist/complete/(:num)', 'todolistController::complete/$1');
$routes->get('/todolist/delete/(:num)', 'todolistController::delete/$1');