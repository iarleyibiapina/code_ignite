<?php

use App\Controllers\NewsController;
use App\Controllers\PagesController;
use App\Controllers\PageController;
use App\Controllers\RegisterController;
use App\Controllers\LoginController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', function(){
    return view('index');
});

// metodo get, nome da url, controller, classe do controller

$routes->get('/main', 'Home::index');
$routes->get('/logout', 'Home::destroySession');
$routes->get('/Page', [PageController::class, "indexClassePage"]);
// // rota dinamica    

// $routes->get('/register', [RegisterController::class,'index'], ['as' => 'register']);
$routes->get('/register', [RegisterController::class,'index']);
$routes->post('/register', [RegisterController::class,'create']);

// utilizar rotas nomeadas com ['as' => 'register'].
$routes->get('/login', [LoginController::class,'index']);
$routes->post('/login', [LoginController::class,'loginProccess']);
// $routes->get('(:segment)', [PageController::class, "view"]);


$routes->get('news', [NewsController::class, 'index']);
$routes->get('news/new', [NewsController::class, 'new']);
$routes->post('news', [NewsController::class, 'create']);
$routes->get('news/(:segment)', [NewsController::class, 'show']);

$routes->get("pages", [PagesController::class, 'index']);
$routes->get("(:segment)", [PagesController::class, 'view']);
// metodo get, nome da url, controller, classe do controller

$routes->get('/index', 'Home::testeClass');
$routes->get('/Page', [PageController::class, "indexClassePage"]);
// // rota dinamica    



