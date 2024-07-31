<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->post('login', 'AuthController::login', ['as' => 'login']);
$routes->get('logout', 'AuthController::logout', ['as' => 'logout']);

$routes->group('admin', static function ($routes) {
    $routes->get('/', 'AdminController::index', ['as' => 'beranda']);
    $routes->get('setting', 'SettingController::index', ['as' => 'setting']);
    $routes->post('setting/update', 'SettingController::ubah', ['as' => 'ubah']);
    $routes->group('katalog', static function ($routes) {
        $routes->get('/', 'KatalogController::index', ['as' => 'tampil_katalog']);
        $routes->get('show', 'KatalogController::show', ['as' => 'tambah_katalog']);
        $routes->post('input', 'KatalogController::add', ['as' => 'input_katalog']);
        $routes->get('edit/(:num)', 'KatalogController::edit/$1', ['as' => 'edit_katalog']);
        $routes->post('update/(:num)', 'KatalogController::update/$1', ['as' => 'update_katalog']);
        $routes->delete('delete/(:num)', 'KatalogController::delete/$1', ['as' => 'hapus_katalog']);
    });
});
