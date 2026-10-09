<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Pages::landing');

$routes->get('/about', 'Pages::about');

$routes->get('/customers', 'Customer::customers');

$routes->get('/users', 'User::users');

$routes->get('customers', 'Customer::customers');

$routes->get('customers/new', 'Customer::createForm');

$routes->post('customers/create', 'Customer::create');

$routes->get('customers/edit/(:num)', 'Customer::edit/$1');

$routes->post('customers/update/(:num)', 'Customer::update/$1');

$routes->get('users', 'User::users');

$routes->get('users/new', 'User::createForm');

$routes->post('users/create', 'User::create');

$routes->get('users/edit/(:num)', 'User::edit/$1');

$routes->post('users/update/(:num)', 'User::update/$1');
