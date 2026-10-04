<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Home and About
$routes->get('/', 'Pages::home');
$routes->get('/about', 'Pages::about');

// Customer Accounts
$routes->get('/customers', 'Customers::index');

// User Accounts
$routes->get('/users', 'Users::index');