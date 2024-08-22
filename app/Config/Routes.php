<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/cek-pesanan', 'Home::cek');

$routes->post('login', 'AuthController::login', ['as' => 'login']);
$routes->get('logout', 'AuthController::logout', ['as' => 'logout']);
$routes->post('order', 'TransaksiController::pesan', ['as' => 'pesan']);

$routes->group('admin', static function ($routes) {
    $routes->get('/', 'AdminController::index', ['as' => 'beranda']);
    $routes->group('setting', static function ($routes) {
        $routes->get('/', 'SettingController::index', ['as' => 'setting']);
        $routes->post('update', 'SettingController::ubah', ['as' => 'ubah']);
    });
    $routes->group('katalog', static function ($routes) {
        $routes->get('/', 'KatalogController::index', ['as' => 'tampil_katalog']);
        $routes->get('show', 'KatalogController::show', ['as' => 'tambah_katalog']);
        $routes->post('input', 'KatalogController::add', ['as' => 'input_katalog']);
        $routes->get('edit/(:num)', 'KatalogController::edit/$1', ['as' => 'edit_katalog']);
        $routes->post('update/(:num)', 'KatalogController::update/$1', ['as' => 'update_katalog']);
        $routes->delete('delete/(:num)', 'KatalogController::delete/$1', ['as' => 'hapus_katalog']);
    });
    $routes->group('transaksi', static function ($routes) {
        $routes->get('/', 'TransaksiController::index', ['as' => 'tampil_transaksi']);
        $routes->post('approved/(:num)', 'TransaksiController::terima/$1', ['as' => 'approved']);
        $routes->post('rejected/(:num)', 'TransaksiController::tolak/$1', ['as' => 'rejected']);
        $routes->delete('delete/(:num)', 'TransaksiController::hapus/$1', ['as' => 'delete']);
    });
    $routes->get('laporan', 'TransaksiController::laporan', ['as' => 'tampil_laporan']);
});
