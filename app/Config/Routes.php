<?php
 // Este archivo se utiliza para definir las rutas y configuraciones predeterminadas para una aplicación web.//

//Las rutas determinan cómo se deben manejar las solicitudes HTTP entrantes y qué controladores y métodos del controlador deben dirigirse.//
namespace Config;

$routes = Services::routes();

$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();

$routes->get('/', 'Home::index');
$routes->get('principal', 'Home::index'); //Esta línea define una ruta GET para la URL /principal que también llama al método index del controlador Home.//
$routes->get('quienes_somos', 'Home::quienes_somos');
$routes->get('acercade', 'Home::acerca_de');
$routes->get('catalogo', 'Home::catalogo');
$routes->get('compra', 'Home::compra');
$routes->get('registro', 'Home::registro');
$routes->get('login', 'Home::login');


$routes->get('/compra', 'compra_controller::create');
$routes->post('/enviar-forma', 'compra_controller::formValidation');

// Rutas del Registro de Usuario
$routes->get('/registro', 'usuario_controller::create');
$routes->post('/enviar-form', 'usuario_controller::formValidation');


// Rutas de Login
$routes->get('/login', 'Login_controller::index'); // Asegúrate de que el controlador sea 'Login_controller' con L mayúscula
$routes->post('/enviarlogin', 'Login_controller::auth'); // Ruta para enviar login por POST
$routes->get('/panel', 'Panel_controller::index', ['filter' => 'auth']);
$routes->get('/logout', 'Login_controller::logout'); // Asegúrate de que el controlador sea 'Login_controller'

// Additional Routing

if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}

