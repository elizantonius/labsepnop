<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

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
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// $routes->get('/', 'Home::index');
$routes->get('/', 'Login::index');

//Umum
$routes->post('login', 'Login::index');
$routes->get('tahunakademik/getta', 'Tahunakademik::getTA');

//Mahasiswa(KRS)
$routes->get('krsmhs', 'KrsMhs::index');
$routes->post('krsmhs/addmahasiswa', 'KrsMhs::addmahasiswa');
$routes->get('krsmhs/ambildata', 'KrsMhs::ambildata');

//Matakuliah(DetailKrs)
$routes->resource('DtlKrs');
$routes->resource('DtlKrs/Matkulprak');
$routes->get('dtlkrs/ambildata', 'DtlKrs::ambildata');

//Praktikum
$routes->resource('JadwalPraktikum');
$routes->resource('JadwalPraktikum/addJadwal');
$routes->resource('ModulRest');
$routes->resource('ModulRest/addModul');

//Tahun Akademik
$routes->get('tahunakademik', 'Tahunakademik::index');
$routes->post('tahunakademik/addta', 'Tahunakademik::addta');

//User
$routes->get('user', 'Userss::index');
$routes->post('user/addusers', 'Userss::addusers');

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
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
