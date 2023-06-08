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
$routes->get('loginPage', 'LoginController::index');
$routes->post('loginAction', 'LoginController::login');
$routes->get('index', 'Client\ClientController::index');
$routes->get('list-book', 'Client\ClientController::listBook');
$routes->get('chi-tiet-sach/(:num)', 'Client\ClientController::chiTietBook/$1');
$routes->get('carts/(:num)', 'Client\ClientController::listCart/$1');
$routes->get('addCart', 'Client\ClientController::addCartInfo');
$routes->get('deleteCart/(:num)','Client\ClientController::deleteCartInfo/$1');








// ,['filter'=> 'adminFilter']
$routes ->group('admin',function($routes){
    $routes->get('home', 'Admin\HomeController::index');
    $routes->get('logoutAction', 'LoginController::logout');
    $routes ->group('user', function($routes){
        $routes->get('list', 'Admin\UserController::listUser');
        $routes->get('list-api', 'Admin\UserController::listUserApi');
        $routes->get('add', 'Admin\UserController::addUser');
        $routes->post('create', 'Admin\UserController::createUser');
        $routes->get('delete/(:num)', 'Admin\UserController::deleteUser/$1');
        $routes->get('edit/(:num)', 'Admin\UserController::editUser/$1');
        $routes->post('update', 'Admin\UserController::updateUser');
        
    });
    $routes ->group('theloai', function($routes){
        $routes->get('list', 'Admin\TheLoaiController::listTL');
        $routes->get('add', 'Admin\TheLoaiController::addTL');
        $routes->post('create', 'Admin\TheLoaiController::createTL');
        $routes->get('delete/(:num)', 'Admin\TheLoaiController::deleteTL/$1');
        $routes->get('edit/(:num)', 'Admin\TheLoaiController::editTL/$1');
        $routes->post('update', 'Admin\TheLoaiController::updateTL');
    });
    $routes ->group('sach', function($routes){
        $routes->get('list', 'Admin\SachController::listSach');
        $routes->get('add', 'Admin\SachController::addSach');
        $routes->post('create', 'Admin\SachController::createSach');
        $routes->get('delete/(:num)', 'Admin\SachController::deleteSach/$1');
        $routes->get('edit/(:num)', 'Admin\SachController::editSach/$1');
        $routes->post('update', 'Admin\SachController::updateSach');
    });
});

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