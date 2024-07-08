<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/crawler', 'Crawler::index');
// $routed->get('/craw', 'Crawler::index');
// $routes->get('/crawler', 'Crawler::index');
