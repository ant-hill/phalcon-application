<?php

use Anthill\Phalcon\KernelModule\Mvc\Micro as MicroMvc;

$loader = require __DIR__ . '/../app/autoload.php';

$kernel = new AppKernel('dev');
$app = new MicroMvc($kernel);
/**
 * Handle the request
 */
$app->handle();
