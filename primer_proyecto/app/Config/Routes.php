<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('principal', 'Home::index');
$routes->get('quienes_somos', 'Home::quienes_somos');
$routes->get('que_es', 'Home::que_es');
$routes->get('tiposdebonsai', 'Home::tiposdebonsai');
$routes->get('registrarse', 'Home::registrarse');
$routes->get('login', 'Home::login');

/*Rutas de registro de usuarios*/
$routes->get('/registrarse', 'UsuarioController::create');
$routes->post('/enviar-form', 'UsuarioController::formValidation');

/*Rutas de login*/
$routes->get('/login', 'LoginController');
$routes->post('/enviarlogin', 'LoginController::auth');
$routes->get('/panel', 'PanelController::index', ['filter' => 'auth']);
$routes->get('/logout', 'LoginController::logout');
