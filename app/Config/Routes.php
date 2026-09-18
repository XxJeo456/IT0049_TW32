<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Pages::landing');

$routes->get('/about', 'Pages::about');

$routes->get('/customers', 'Pages::customers');

$routes->get('/users', 'Pages::users');