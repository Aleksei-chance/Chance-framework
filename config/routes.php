<?php
/** @var Core\Application $app */

use App\Controllers\HomeController;
use App\Controllers\UserController;

$app->router->get('/', [HomeController::class, 'index']);
$app->router->get('/registration', [UserController::class, 'registration']);
$app->router->get('/login', [UserController::class, 'login']);
