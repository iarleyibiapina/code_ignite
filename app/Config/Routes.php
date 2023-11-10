<?php

use App\Controllers\NewsController;
use App\Controllers\PagesController;
use App\Controllers\PageController;
use App\Controllers\RegisterController;
use App\Controllers\LoginController;
use App\Controllers\ToDoController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

 // get,post, put, delete
$routes->get('/', function(){
    return view('index');
});

// $routes->get('/register', [RegisterController::class,'index'], ['as' => 'register']);
$routes->get('/register', [RegisterController::class,'index']);
$routes->post('/register', [RegisterController::class,'create']);

// utilizar rotas nomeadas com ['as' => 'register'].
$routes->get('/login', [LoginController::class,'index']);
$routes->post('/login', [LoginController::class,'loginProccess']);
// $routes->get('(:segment)', [PageController::class, "view"]);

/*
index
create
show
edit
update
delete
*/
// $routes->get();
// $routes->post();
// $routes->put();
// $routes->delete();

$routes->get('/main', 'Home::index');

$routes->resource('/To_Do', ['controller' => 'ToDoController']);

$routes->get('/logout', 'Home::destroySession');

