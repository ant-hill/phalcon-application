<?php
// services declaration
return array(
    'router' => array(
        'className' => \Phalcon\Mvc\Router\Annotations::class,
        'arguments' => array(
            array(
                'type' => 'parameter',
                'value' => false
            )
        ),
        'calls' => array(
            array(
                'method' => 'setUriSource',
                'arguments' => array(
                    array(
                        'type' => 'parameter',
                        'value' => \Phalcon\Mvc\Router::URI_SOURCE_SERVER_REQUEST_URI
                    )
                )
            )
        ),
        'shared' => true
    ),
    'annotations' => array(
        'className' => \Phalcon\Annotations\Adapter\Memory::class,
        'shared' => true
    ),
    'view' => array(
        'className' => \Phalcon\Mvc\View::class,
        'shared' => true
    ),
    'route_resolver' => array(
        'className' => \Anthill\Phalcon\KernelModule\Router\RouterResolver::class,
        'arguments' => array(
            array(
                'type' => 'service',
                'name' => 'router'
            )
        ),
        'shared' => true
    ),

    'dispatcher' => array(
        'className' => \Phalcon\Mvc\Dispatcher::class,
        'calls' => array(
            array(
                'method' => 'setEventsManager',
                'arguments' => array(
                    array(
                        'type' => 'service',
                        'name' => 'eventsManager'
                    )
                )
            )
        ),
        'shared' => true
    ),
    'eventsManager' => array(
        'className' => \Phalcon\Events\Manager::class,
        'shared' => true
    ),
    'response' => array(
        'className' => \Phalcon\Http\Response::class,
    ),
    'request' => array(
        'className' => \Phalcon\Http\Request::class,
    )
);