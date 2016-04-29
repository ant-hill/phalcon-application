<?php
/**
 * Local variables
 * @var AppKernel $this
 */

return [
    [
        'type' => 'array',
        'resource' => [
            'welcome' => [
                'path' => '/welcome',
                'methods' => ['GET','POST'],
                'handler' => '\\Acme\\DemoModule\\Controllers\\Greetings::index'
            ],
            'greetings' => [
                'path' => '/greetings',
                'methods' => ['GET','POST'],
                'handler' => '\\Acme\\DemoModule\\Controllers\\Greetings::greeting'
            ]
        ],
    ],
    [
        'type' => 'annotations',
        'resource' => __DIR__.'/../../src/Acme/DemoModule/Controllers'
    ],

] + include __DIR__ . '/route.php';
