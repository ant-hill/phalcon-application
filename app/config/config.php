<?php
// config variables
return array(
    'framework' => array(
        'routes' =>  include __DIR__ . '/route.php'
    ),
    'services' => include __DIR__ . '/services.php',
);