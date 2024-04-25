<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Auth::index');
$routes->get('/auth/getData', 'Auth::getData', ['filter' => 'auth']);
$routes->get('/auth/logout', 'Auth::logout', ['filter' => 'auth']);
$routes->get('/pages', 'Pages::index', ['filter' => 'auth']);
$routes->get('/pages/phSensor', 'Pages::phSensor');
$routes->get('/pages/tds', 'Pages::tds');
$routes->get('/pages/down', 'Pages::down');
$routes->get('/pages/up', 'Pages::up');
$routes->get('/pages/nutrisi', 'Pages::nutrisi');
$routes->get('/Penugasan', 'Penugasan::index');
$routes->get('/pages/tabel', 'Pages::tabel');
$routes->get('/pages/relayDown', 'Pages::relayDown');
$routes->get('/pages/relayUp', 'Pages::relayUp');
$routes->get('/pages/relayNutrisi', 'Pages::relayNutrisi');
$routes->get('/pages/kontrol', 'Pages::kontrol');
$routes->get('/pages/urlData/(:num)/(:num)/(:any)/(:any)/(:any)', 'Pages::urlData/$1/$2/$3/$4/$5');
$routes->setAutoRoute(true);
