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
$routes->get('/', 'Home::index');

$routes->get('/siswa', 'Siswa::index', ['filter' => 'role:siswa']);
$routes->get('/siswa/index', 'Siswa::index', ['filter' => 'role:siswa']);

$routes->get('/guru', 'Guru::index', ['filter' => 'role:guru']);
$routes->get('/guru/index', 'Guru::index', ['filter' => 'role:guru']);

$routes->get('/admin', 'Admin::index', ['filter' => 'role:admin']);
$routes->get('/admin/index', 'Admin::index', ['filter' => 'role:admin']);

// Materi guru
$routes->get('/guru/tambah', 'Guru::tambah');
$routes->get('/guru/ubah/(:num)', 'Guru::ubah/$1');
$routes->delete('/guru/(:num)', 'Guru::hapus/$1');
$routes->get('/guru/(:any)', 'Guru::detail/$1');

// Tugas Guru
$routes->get('/tugas/tambah', 'Tugas::tambah');
$routes->get('/tugas/ubah/(:num)', 'Tugas::ubah/$1');
$routes->delete('/tugas/(:num)', 'Tugas::hapus/$1');
$routes->get('/tugas/(:any)', 'Tugas::detail/$1');

// Detail Tugas Jawab
$routes->get('/jawaban/(:any)', 'Jawaban::detail/$1');

// Materi Siswa
$routes->get('/siswamateri/(:any)', 'Siswa::detail/$1');
$routes->get('/siswatugas/(:any)', 'Siswatugas::detail/$1');

// Materi Siswa
$routes->get('/tugasjawab/tambah', 'Tugasjawab::tambah');
$routes->get('/tugasjawab/tambah/(:num)', 'Tugasjawab::tambah/$1');
$routes->get('/tugasjawab/ubah/(:num)', 'Tugasjawab::ubah/$1');
$routes->delete('/tugasjawab/(:num)', 'Tugasjawab::hapus/$1');
$routes->get('/tugasjawab/(:any)', 'Tugasjawab::detail/$1');

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
