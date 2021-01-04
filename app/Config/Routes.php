<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Auth');
$routes->setDefaultMethod('login');
$routes->setTranslateURIDashes(true);
$routes->set404Override();
$routes->setAutoRoute(true);
 
$routes->get('/', 'Auth::login');

$routes->get('auth/login', 'Auth::login');
$routes->post('auth/proses_login', 'Auth::proses_login');
 
$routes->get('auth/logout', 'Auth::logout');
 
$routes->get('auth/register', 'Auth::register');
$routes->post('auth/proses_register', 'Auth::proses_register');
 
$routes->get('dashboard', 'Dashboard::index');
 
$routes->get('category', 'Category::index');
$routes->get('category/create', 'Category::create');
$routes->post('category/store', 'Category::store');
$routes->get('category/edit/(:num)', 'Category::edit/$1');
$routes->post('category/update/(:num)', 'Category::update/$1');
$routes->get('category/delete/(:num)', 'Category::delete/$1');

$routes->get('prodi', 'Prodi::index');
$routes->get('prodi/create', 'Prodi::create');
$routes->post('prodi/store', 'Prodi::store');
$routes->get('prodi/edit/(:num)', 'Prodi::edit/$1');
$routes->post('prodi/update/(:num)', 'Prodi::update/$1');
$routes->get('prodi/delete/(:num)', 'Prodi::delete/$1');
 
$routes->get('matakuliah', 'Matakuliah::index');
$routes->get('matakuliah/create', 'Matakuliah::create');
$routes->post('matakuliah/store', 'Matakuliah::store');
$routes->get('matakuliah/edit/(:num)', 'Matakuliah::edit/$1');
$routes->post('matakuliah/update/(:num)', 'Matakuliah::update/$1');
$routes->get('matakuliah/delete/(:num)', 'Matakuliah::delete/$1');

$routes->get('transaction', 'Transaction::index');
$routes->get('transaction/import', 'Transaction::import');
$routes->post('transaction/proses_import', 'Transaction::proses_import');
$routes->get('transaction/export', 'Transaction::export');
 
/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');


/**
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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}