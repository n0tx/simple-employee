<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('hello', 'Home::hello');
$routes->get('helloworld', 'HelloWorld::index');

$routes->get('/', 'EmployeeController::index');
$routes->post('add', 'EmployeeController::add');
$routes->get('edit/(:num)', 'EmployeeController::edit/$1');
$routes->post('update', 'EmployeeController::update');
$routes->get('delete/(:num)', 'EmployeeController::delete/$1');
