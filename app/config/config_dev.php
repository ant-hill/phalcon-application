<?php

$config = include __DIR__ . '/config.php';
return array(
    'application'=> array(
        'route' => __DIR__.'/route_dev.php'
    )
) + $config;