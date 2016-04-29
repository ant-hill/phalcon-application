<?php

$loader = require __DIR__ . '/../app/autoload.php';

$kernel = new AppKernel('dev');
$kernel->boot();
$kernel->registerRoutes();
$app = new \Phalcon\Mvc\Application($kernel->getDI());
/**
 * Handle the request
 */
$response = $app->handle();
$response->send();