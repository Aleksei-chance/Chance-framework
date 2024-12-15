<?php
/** @var Core\Application $app */

use App\Controllers\HomeController;

$app->router->get('/', [HomeController::class, 'index']);
