<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('hello', 'Home::hello');
$routes->get('helloworld', 'HelloWorld::index');

$routes->get('/', 'EmployeeController::index');
$routes->post('add', 'EmployeeController::add');
