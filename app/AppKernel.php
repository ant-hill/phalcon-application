<?php

use Anthill\Phalcon\KernelModule\ConfigLoader\LoaderFactoryInterface;

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

    public function getName()
    {
        return 'Phalcon skeleton application';
    }

    /**
     * @param LoaderFactoryInterface $loader
     * @return \Phalcon\Config
     * @throws \Anthill\Phalcon\KernelModule\ConfigLoader\Exceptions\LoaderException
     */
    public function registerConfiguration(LoaderFactoryInterface $loader)
    {
        return $loader->load($this->getRootDir() . '/config/config_' . $this->getEnvironment() . '.php');
    }

    /**
     * @return \Phalcon\Mvc\ModuleDefinitionInterface[]
     */
    public function registerModules()
    {
        return array();
    }
}