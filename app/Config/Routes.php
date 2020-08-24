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
$routes->setDefaultController('Pages');
$routes->setDefaultMethod('showme');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions NewsPagination::index 
 * --------------------------------------------------------------------
 */

 
// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Pages::showme');
$routes->get('/index/form', 'Form::index');

$routes->get('/Send',"Mailer::StartTrialSend");
$routes->get('/news',"Pages::news");

$routes->get('/news/admin/create',"Admin\NewsController::create");
$routes->get('/news/admin/update',"Admin\NewsController::update");
$routes->get('/news/admin/delete',"Admin\NewsController::delete");

$routes->get('/news/admin',"Admin\AdminPanel::admin");
$routes->get('/news/admin/login',"Admin\Authentication::login");
$routes->get('/news/admin/logout','Admin\Authentication::logout');

$routes->match(['get', 'post'], 'news/create', 'Admin\NewsController::create');
$routes->get('news/(:segment)', 'News::view/$1');
$routes->get('news', 'News::index');
$routes->get('(:any)', 'Pages::view/$1');

$routes->match(['get', 'post'], 'news/update', 'Admin\NewsController::update');
$routes->get('news/(:segment)', 'News::view/$1');
$routes->get('news', 'News::index');
$routes->get('(:any)', 'Pages::view/$1');

$routes->match(['get', 'post'], 'news/delete', 'Admin\NewsController::delete');
$routes->get('news/(:segment)', 'News::view/$1');
$routes->get('news', 'News::index');
$routes->get('(:any)', 'Pages::view/$1');

$routes->match(['get', 'post'], '/login', 'Admin\Authentication::login');
$routes->get('authentication/(:segment)', 'Admin\Authentication::view/$1');
$routes->get('authentication', 'Authentication::index');
$routes->get('(:any)', 'Pages::view/$1');

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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
