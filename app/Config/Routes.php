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

$routes->get('/index', 'Home::testeClass');
$routes->get('/Page', [PageController::class, "indexClassePage"]);
// // rota dinamica    

// $routes->get('/register', [RegisterController::class,'index'], ['as' => 'register']);
$routes->get('/register', [RegisterController::class,'index']);
$routes->post('/register', [RegisterController::class,'create']);

$routes->get('/login', [LoginController::class,'index']);
// $routes->get('/login', [LoginController::class,'index']);
// $routes->get('(:segment)', [PageController::class, "view"]);

/*
index
create
show
edit
update
delete
*/

// $routes->get('/To_do_Registro', [ToDoController::class,'']);
// $routes->post();
// $routes->put();
// $routes->delete();

$routes->resource('/To_Do', ['controller' => 'ToDoController']);

$routes->get("pages", [PagesController::class, 'index']);
// $routes->get("(:segment)", [PagesController::class, 'view']);
// metodo get, nome da url, controller, classe do controller

$routes->get('/index', 'Home::testeClass');
$routes->get('/Page', [PageController::class, "indexClassePage"]);
// // rota dinamica    



