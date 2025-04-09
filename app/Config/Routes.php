<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'HomeController::index');

$routes->group('admin', static function ($routes) {
    $routes->get('product', 'ProductController::index');

    $routes->get('category', 'CategoryController::index');
    $routes->get('category/create', 'CategoryController::create');
    $routes->post('category/save', 'CategoryController::save');
    $routes->get('category/edit/(:num)', 'CategoryController::edit/$1');
    $routes->post('category/update/(:num)', 'CategoryController::update/$1');
    $routes->delete('category/delete/(:num)', 'CategoryController::delete/$1');
});


