<?php
/**
 * Local variables
 * @var \Phalcon\Mvc\Micro $app
 */

$app->get('/', function () use ($app) {
    echo '<h1>Hello World!</h1>';
});

/**
 * Not found handler
 */
$app->notFound(function () use ($app) {
    $app->response->setStatusCode(404, "Not Found")->sendHeaders();
// todo: add view in application
//    echo $app['view']->render('404');
    echo 'Not found';
});
