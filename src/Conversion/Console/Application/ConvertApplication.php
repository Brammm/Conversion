<?php

namespace Conversion\Console\Application;

use Symfony\Component\Console\Application;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class ConvertApplication extends Application
{
    /** @var ContainerInterface */
    private $container;

    public function __construct(ContainerInterface $container, $name = 'UNKNOWN', $version = 'UNKNOWN')
    {
        $this->container = $container;
        parent::__construct($name, $version);
    }


    protected function getCommandName(InputInterface $input)
    {
        return 'convert';
    }

    protected function getDefaultCommands()
    {
        $defaultCommands = parent::getDefaultCommands();

        $defaultCommands[] = $this->container->get('conversion.command');

        return $defaultCommands;
    }

    public function getDefinition()
    {
        $inputDefinition = parent::getDefinition();
        $inputDefinition->setArguments();

        return $inputDefinition;
    }

}