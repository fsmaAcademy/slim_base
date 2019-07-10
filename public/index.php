<?php

require "../bootstrap.php";

$app->get('/', 'app\controllers\HomeController:index');

$app->group('/admin', function() use($app) {
    $app->get('', 'app\controllers\AdminController:index');
    $app->get('/{id}', 'app\controllers\AdminController:index');
});

$app->run();