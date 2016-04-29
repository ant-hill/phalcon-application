<?php

$config = include __DIR__ . '/config.php';
return array(
    'framework' => array(
        'routes' =>  include __DIR__ . '/route_prod.php'
    ),
) + $config;