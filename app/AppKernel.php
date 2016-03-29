<?php

class AppKernel extends \Anthill\Phalcon\KernelModule\Kernel
{

    const VERSION = '1.0.0-dev';

    /**
     * @return string
     */
    public function getVersion()
    {
        return static::VERSION;
    }

    /**
     * @return string
     */
    public function getRootDir()
    {
        return __DIR__;
    }

    /**
     * @return \Phalcon\Mvc\ModuleDefinitionInterface[]
     */
    public function registerModules()
    {
        return array();
    }

    public function registerConfiguration(\Phalcon\Config\Loader $loader)
    {
        return $loader::load(__DIR__ . '/config/config.php');
    }

    public function getName()
    {
        return 'Phalcon skeleton application';
    }
}