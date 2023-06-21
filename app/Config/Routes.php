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

$routes->get('login', 'login::index');
$routes->get('signup', 'signup::index');
$routes->post('signup_form', 'signup::signup_form');
$routes->post('login_form', 'login::login_form');
$routes->get('demo', 'demo::index');
$routes->get('userpg', 'userpg::index');
$routes->post('userop', 'userpg::userop');
$routes->get('seller', 'seller::index');
$routes->post('sell', 'seller::sell');
$routes->get('buyer', 'buyer::index');
$routes->get('adminpg', 'adminpg::index');
$routes->get('admin_user', 'admin_user::index');
$routes->get('admin_car', 'admin_car::index');
$routes->post('seller_view', 'seller_view::index');
$routes->get('seller_view', 'seller_view::index');
$routes->get('admin_view', 'admin_view::index');
$routes->get('user_edit', 'user_edit::index');
$routes->post('edit', 'user_edit::edit');
$routes->get('user_remove', 'user_remove::index');
$routes->get('admin_delete', 'admin_delete::index');
$routes->get('admin_user_delete', 'admin_user_delete::index');
$routes->get('admin_car_delete', 'admin_car_delete::index');
$routes->get('buy', 'buyer::buy');
$routes->post('message', 'message::index');
$routes->post('seller_message', 'seller_message::index');
$routes->get('seller_message', 'seller_message::index');
$routes->get('logout', 'logout::index');
$routes->get('sold_view', 'sold_view::index');
$routes->get('emailcheck', 'signup::emailCheck');
$routes->post('reply', 'message::reply');
$routes->post('buyer_message', 'buyer_message::index');
$routes->get('buyer_message', 'buyer_message::index');

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
