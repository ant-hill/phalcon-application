<?php

namespace Acme\DemoModule\Controllers;


use Phalcon\Http\Response;

class GreetingsController
{
    /**
     * @Get("/")
     */
    public function helloAction(){
        return new Response('<h1>It\'s a main page</h1>');
    }

    public function indexAction(){
        return new Response('<h1>Welcome stranger!</h1>');
    }
    public function greetingAction(){
        return new Response('<h1>Greetings!</h1>');
    }
}