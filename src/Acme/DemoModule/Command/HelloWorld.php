<?php

namespace Acme\DemoModule\Command;

use Anthill\Phalcon\KernelModule\Cli\Application;
use Phalcon\Di;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class HelloWorld
 * @package Acme\DemoModule\Command
 * @method Application getApplication
 */
class HelloWorld extends Command
{
    protected function configure()
    {
        $this
            ->setName('hello')
            ->setDescription('Print Hello, and count of registered services');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $di = $this->getApplication()->getDI();
        $output->writeln('Hello');
        $output->writeln(sprintf('I have %s registered services', count($di->getServices())));
    }


}