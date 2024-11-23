<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//  Autenthikasi
$routes->get('/', 'AuthController::login');
$routes->get('/login', 'AuthController::login');
$routes->post('/auth/loginProcess', 'AuthController::loginProcess');
$routes->get('/auth/register', 'AuthController::register');
$routes->post('/auth/create', 'AuthController::create');
// Bikin postingan
$routes->get('/posts', 'PostController::index');
$routes->get('/post/create', 'PostController::create');
$routes->post('/post/store', 'PostController::store');
// Komentar postingan
$routes->get('/post/(:num)', 'PostController::show/$1'); // Menampilkan detail postingan
$routes->post('/comment', 'PostController::addComment'); // Menambahkan komentar
// Logout
$routes->get('/auth/logout', 'AuthController::logout');
// Marking postingan
$routes->get('/found-items', 'PostController::foundItems');
$routes->post('post/markAsFound/(:num)', 'PostController::markAsFound/$1');
$routes->get('posts/(:num)', 'PostController::show/$1');
// Pencarian
$routes->get('search', 'SearchController::search');

$routes->get('notifications', 'NotificationController::getNotifications');
$routes->post('notifications/markAllAsRead', 'NotificationController::markAllAsRead');




// $routes->get('/create_post', 'UserController::profile');
