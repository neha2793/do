<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
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
$routes->get('/', 'Main::index');
$routes->get('/container1', 'Main::container1');
$routes->get('/slimecontainer', 'Main::slimecontainer');
$routes->get('/container2', 'Main::container2');
$routes->get('/container3', 'Main::container3');
$routes->get('/container4', 'Main::container4');
$routes->get('/container5', 'Main::container5');
$routes->get('/checkout', 'Main::checkout');
$routes->post('/checkout', 'Main::checkout');
$routes->get('/billing', 'Main::billing');
$routes->get('/order_rcvd', 'Main::order_rcvd');
$routes->get('/payment', 'Main::payment');
$routes->post('/payment', 'Main::payment');
$routes->get('/logout', 'Main::logout');
$routes->get('/login', 'Main::login');
$routes->post('/login', 'Main::login');
$routes->get('/signup', 'Main::signup');
$routes->get('/about', 'Main::about');
$routes->get('/contact', 'Main::contact');
$routes->get('/forget_password', 'Main::forget_password');
$routes->post('/forget_password', 'Main::forget_password');
$routes->get('/reset_password', 'Main::reset_password');
$routes->post('/contact', 'Main::contact');
$routes->post('/order_rcvd', 'Main::order_rcvd');
$routes->post('/reset_password', 'Main::reset_password');
$routes->get('/privacy_policy', 'Main::privacy_policy');
$routes->get('/term_of_use', 'Main::term_of_use');
$routes->post('/signup', 'Main::signup');
$routes->get('/create_nft', 'Main::create_nft');
$routes->get('/profile', 'Main::profile');
$routes->post('/update_view', 'Main::update_view');
$routes->get('/nft_billing', 'Main::nft_billing');
$routes->get('/update_ajax', 'Main::update_ajax');


//...

// $routes->match(['get', 'post'], 'register', 'User::register', ['filter' => 'noauth']);
// $routes->match(['get', 'post'], 'login', 'User::login', ['filter' => 'noauth']);
// $routes->get('dashboard', 'Dashboard::index', ['filter' => 'auth']);
// $routes->get('profile', 'User::profile', ['filter' => 'auth']);
// $routes->get('logout', 'User::logout');

//...


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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
