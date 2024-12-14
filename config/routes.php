<?php
/** @var Core\Application $app */

$app->router->get('/', function () {
    return view('testView');
});
