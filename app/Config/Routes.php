<?php

namespace Config;

// Create a new instance of our RouteCollection class.
use function Aws\filter;

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


$routes->setDefaultNamespace('');
$routes->setDefaultController('App/Controllers/Frontend/Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(false);

// Try again now.Okey not work

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
//$routes->get('{locale}', 'Home::index');
//$routes->add('/', 'Home::index');

/*
* --------------------------------------------------------------------
 * ANASAYFA ROUTE
* --------------------------------------------------------------------
*/
$routes->get('', 'App\Controllers\Frontend\Home::index', ['as' => 'home_page']);


$routes->match(['get', 'post'], '/register', 'App\Controllers\Frontend\Home::register', ['as' => 'kayit_ol_as']);

$routes->get('verify/(:segment)', 'App\Controllers\Frontend\Home::verify/$1', ['as' => 'verify_as']);


$routes->group('login', ['namespace' => 'App\Controllers\Frontend'], function ($routes) {
    $routes->match(['get', 'post'], '/', 'Home::login', ['as' => 'login_as']);
//    $routes->get('mail', 'Home::mail', ['as' => 'mail_as']);
});


/*
* --------------------------------------------------------------------
 * PANEL ANASAYFA ROUTE
* --------------------------------------------------------------------
*/


/*
* --------------------------------------------------------------------
 * PANEL ROUTE
* --------------------------------------------------------------------
*/
$routes->group('api', ['namespace' => 'App\Controllers\Api'], function ($routes) {
    $routes->get('user_email/(:segment)/user_key/(:segment)/user_pass/(:segment)', 'Home::login/$1/$2/$3');
});

$routes->group('panel', ['namespace' => 'App\Controllers\Backend'], function ($routes) {
    $routes->get('anasayfa', 'Home::index', ['as' => 'admin_index']);
    $routes->post('image/upload', 'Home::imageUpload', ['as' => 'image_upload']);


    $routes->get('logout', 'Home::logout', ['as' => 'admin_logout']);

    $routes->match(['get', 'post'], 'duyurular', 'duyurular::index', ['as' => 'admin_duyurular']);
    $routes->match(['get', 'post'], 'duyuru-ekle', 'duyurular::duyuruEkle', ['as' => 'admin_duyuru_ekle']);

    $routes->match(['get', 'post'], 'sosyal-medya', 'SosyalMedya::index', ['as' => 'sosyal_medya']);
});


/*
* --------------------------------------------------------------------
 * FRONTEND
* --------------------------------------------------------------------
*/

$routes->get('/', 'App\Controllers\Frontend\Home::index');



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
