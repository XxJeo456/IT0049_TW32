<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Pages::landing');

$routes->get('/about', 'Pages::about');

$routes->get('/customers', 'Customer::customers');

$routes->get('/users', 'User::users');