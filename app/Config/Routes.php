<?php

use App\Controllers\PageController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// metodo get, nome da url, controller, classe do controller

$routes->get('/index', 'Home::testeClass');
$routes->get('/Page', [PageController::class, "indexClassePage"]);
// rota dinamica    
$routes->get('(:segment)', [PageController::class, "view"]);

