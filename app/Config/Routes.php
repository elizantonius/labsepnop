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
$routes->get('/regis', 'Mendaftar::regis');

$routes->group('laboran', static function ($routes) {
    $routes->get('/', 'Admin\Laboran::index');
    $routes->get('read', 'Admin\Laboran::store');
    $routes->get('readbyid/(:any)', 'Admin\Laboran::get_by_id/$1');
    $routes->post('simpan', 'Admin\Laboran::post');
    $routes->put('ubah', 'Admin\Laboran::put');
    $routes->delete('hapus/(:any)', 'Admin\Laboran::delete/$1');
});

$routes->group('jurusan', static function ($routes) {
    $routes->get('/', 'Admin\Jurusan::index');
    $routes->get('read', 'Admin\Jurusan::store');
    $routes->get('readbyid/(:any)', 'Admin\Jurusan::get_by_id/$1');
    $routes->post('simpan', 'Admin\Jurusan::post');
    $routes->put('ubah', 'Admin\Jurusan::put');
    $routes->delete('hapus/(:any)', 'Admin\Jurusan::delete/$1');
});

$routes->group('matakuliah', static function ($routes) {
    $routes->get('/', 'Admin\Matakuliah::index');
    $routes->get('read', 'Admin\Matakuliah::store');
    $routes->get('readbyid/(:any)', 'Admin\Matakuliah::get_by_id/$1');
    $routes->post('simpan', 'Admin\Matakuliah::post');
    $routes->put('ubah', 'Admin\matakuliah::put');
    $routes->delete('hapus/(:any)', 'Admin\Matakuliah::delete/$1');
});

$routes->group('modul', static function ($routes) {
    $routes->get('/', 'Admin\Modul::index');
    $routes->get('read', 'Admin\Modul::store');
    $routes->get('readbyid/(:any)', 'Admin\Modul::get_by_id/$1');
    $routes->post('simpan', 'Admin\Modul::post');
    $routes->put('ubah', 'Admin\Modul::put');
    $routes->delete('hapus/(:any)', 'Admin\Modul::delete/$1');
});

$routes->group('ta', static function ($routes) {
    $routes->get('/', 'Admin\Ta::index');
    $routes->get('read', 'Admin\Ta::store');
    $routes->get('readbyid/(:any)', 'Admin\Ta::get_by_id/$1');
    $routes->post('simpan', 'Admin\Ta::post');
    $routes->put('ubah', 'Admin\Ta::put');
    $routes->delete('hapus/(:any)', 'Admin\Ta::delete/$1');
});

$routes->group('jadwal', static function ($routes) {
    $routes->get('/', 'Admin\Jadwal::index');
    $routes->get('read', 'Admin\Jadwal::store');
    $routes->get('readbyid/(:any)', 'Admin\Jadwal::get_by_id/$1');
    $routes->post('simpan', 'Admin\Jadwal::post');
    $routes->put('ubah', 'Admin\Jadwal::put');
    $routes->delete('hapus/(:any)', 'Admin\Jadwal::delete/$1');
});

//Umum
$routes->post('login', 'Login::index');
$routes->get('dashboard', 'Dashboard::dash');
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
$routes->resource('Modulrest/tabelmodul');
$routes->resource('Absen');
$routes->resource('Modullab');
$routes->resource('ModulRest/addModul');

//Tahun Akademik
$routes->get('tahunakademik', 'Tahunakademik::index');
$routes->post('tahunakademik/addta', 'Tahunakademik::addta');

//User
$routes->get('user', 'Userss::index');
$routes->post('user/addusers', 'Userss::addusers');

//Laboran
$routes->resource('Laboran/Dashboard');
$routes->resource('Laboran/Upmodul');
$routes->resource('Laboran/Upmodul/postmodul');
$routes->resource('Laboran/Opabsen');
$routes->resource('Laboran/Rekap');

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
