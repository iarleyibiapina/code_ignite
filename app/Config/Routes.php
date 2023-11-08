<?php

use App\Controllers\NewsController;
use App\Controllers\PagesController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('news', [NewsController::class, 'index']);
$routes->get('news/new', [NewsController::class, 'new']);
$routes->post('news', [NewsController::class, 'create']);
$routes->get('news/(:segment)', [NewsController::class, 'show']);

$routes->get("pages", [PagesController::class, 'index']);
$routes->get("(:segment)", [PagesController::class, 'view']);

