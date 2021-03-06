<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
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
//Frontend
$routes->get('/', 'Home::index');
$routes->get('/order', 'Home::order');

//Role
$routes->get('/admin/role', 'Role::index');
// $routes->post('/admin/role/save', 'Role::save');
//StatusMenu
$routes->get('/admin/status/menu', 'StatusMenu::index');
//StatusPesanan
$routes->get('/admin/status/pesanan', 'StatusPesanan::index');
//Meja
$routes->get('/admin/meja', 'Meja::index');
$routes->post('/admin/meja/save', 'Meja::save');
$routes->get('/admin/meja/edit/(:num)', 'Meja::editMeja/$1');
$routes->post('/admin/meja/update/(:num)', 'Meja::update/$1');
$routes->delete('/admin/meja/delete/(:num)', 'Meja::delete/$1');

//User
$routes->get('/login', 'Auth::index');
$routes->post('/login', 'Auth::login');
$routes->get('/logout', 'Auth::logout');
//role admin
$routes->get('/admin', 'User::index');
$routes->get('/admin/user', 'User::index');
$routes->get('/admin/user/register', 'User::register');
$routes->post('/admin/user/save', 'User::save');
$routes->get('/admin/user/edit/(:any)', 'User::editUser/$1');
$routes->post('/admin/user/update/(:num)', 'User::update/$1');
$routes->get('/admin/user/(:any)', 'User::detail/$1');
$routes->delete('/admin/user/delete/(:num)', 'User::delete/$1');
//role user
$routes->get('/user', 'User::index');
$routes->get('/user/changepassword/(:any)', 'User::changePassword/$1');
$routes->post('/user/update/change-password/(:num)', 'User::changes/$1');

//Kategori Menu
$routes->get('/admin/kategori', 'Kategori::index');
$routes->post('/admin/kategori/save', 'Kategori::save');
$routes->get('/admin/kategori/edit/(:num)', 'Kategori::editKategori/$1');
$routes->post('/admin/kategori/update/(:num)', 'Kategori::update/$1');
$routes->delete('/admin/kategori/delete/(:num)', 'Kategori::delete/$1');

//Menu
$routes->get('/admin/menu', 'Menu::index');
$routes->get('/admin/menu/create', 'Menu::createMenu');
$routes->get('/admin/menu/edit/(:segment)', 'Menu::editMenu/$1');
$routes->post('/admin/menu/save', 'Menu::save');
$routes->delete('/admin/menu/delete/(:num)', 'Menu::delete/$1');
$routes->get('/admin/menu/(:any)', 'Menu::detail/$1');

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
