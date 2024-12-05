<?php

use CodeIgniter\Router\RouteCollection;

if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * @var RouteCollection $routes
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

$routes->get('/', 'Home::index');
$routes->get('berita', 'DetailBerita::index'); // Menampilkan daftar berita
$routes->get('berita/detail/(:num)', 'DetailBerita::index/$1'); // Menampilkan detail berita berdasarkan ID
$routes->get('contact', 'Contact::index');
$routes->post('contact/submit', 'Contact::submit');


if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
