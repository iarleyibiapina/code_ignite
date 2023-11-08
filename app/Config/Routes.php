<?php

use App\Controllers\PageController;
use App\Controllers\RegisterController;
use App\Controllers\LoginController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// metodo get, nome da url, controller, classe do controller

$routes->get('/index', 'Home::testeClass');
$routes->get('/Page', [PageController::class, "indexClassePage"]);
// // rota dinamica    

// $routes->get('/register', [RegisterController::class,'index'], ['as' => 'register']);
$routes->get('/register', [RegisterController::class,'index']);
$routes->post('/register', [RegisterController::class,'create']);

$routes->get('/login', [LoginController::class,'index']);
// $routes->get('/login', [LoginController::class,'index']);
// $routes->get('(:segment)', [PageController::class, "view"]);

