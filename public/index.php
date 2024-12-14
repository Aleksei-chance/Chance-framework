<?php

require_once __DIR__ . '/../config/config.php';
require_once ROOT . '/vendor/autoload.php';
require_once HELPERS . '/helpers.php';

use Core\Application;

$app = new Application();

dump($app);
$app->run();

