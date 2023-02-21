<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'c_Autentikasi::index');
$routes->post('/', 'c_Autentikasi::login');
$routes->get('/logout', 'c_Autentikasi::logout');

$routes->get('/home', 'c_Home::index', ['filter' => 'auth']);
$routes->get('/info', 'c_Info::index', ['filter' => 'auth']);

$routes->group('/', ['filter' => 'auth'], function($routes)
{
    $routes->get('/mahasiswa', 'c_Mahasiswa::display');
    $routes->get('/mahasiswa/add', 'c_Mahasiswa::inputMahasiswa');
    $routes->post('/mahasiswa/add', 'c_Mahasiswa::addMahasiswa');
    $routes->get('/mahasiswa/detail/(:num)', 'c_Mahasiswa::detailMahasiswa/$1');
    $routes->get('/mahasiswa/delete/(:num)', 'c_Mahasiswa::deleteMahasiswa/$1');
    $routes->post('/mahasiswa/edit', 'c_Mahasiswa::editMahasiswa');
    $routes->post('/mahasiswa/search', 'c_Mahasiswa::searchMahasiswa');
});

$routes->group('/', ['filter' => 'auth'], function($routes){
    $routes->get('/pegawai/input', 'c_Pegawai::inputPegawai');
    $routes->post('/pegawai/input', 'c_Pegawai::tambahPegawai');
});

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file wi
 * thout
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
