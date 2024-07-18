<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/crawler', 'Crawler::index');
// $routes->get('/craw', 'Craw::index');
// $routes->get('/crawler', 'Crawler::index');
