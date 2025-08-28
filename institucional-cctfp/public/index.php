<?php
echo "<h1>Página Institucional</h1>";
echo "<a href='http://moodle.test'>Ir al Campus Virtual</a>"; //duplicado
require __DIR__ . '/../vendor/autoload.php';

use InstitucionalCctp\Backend\Router;
use InstitucionalCctp\Backend\Controllers\HomeController;
use InstitucionalCctp\Backend\Controllers\CampusController;

// crear router
$router = new Router();

// definir las rutas
$router->get('/', [new HomeController(), 'index']);
$router->get('/campus', [new CampusController(), 'redirect']);

// ejecutar router
$router->run();


