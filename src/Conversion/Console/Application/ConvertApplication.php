<?php

namespace Conversion\Console\Application;

use Conversion\Console\Command\ConvertCommand;
use Symfony\Component\Console\Application;
use Symfony\Component\Console\Input\InputInterface;

class ConvertApplication extends Application
{
    protected function getCommandName(InputInterface $input)
    {
        return 'convert';
    }

    protected function getDefaultCommands()
    {
        $defaultCommands = parent::getDefaultCommands();

        $defaultCommands[] = new ConvertCommand();

        return $defaultCommands;
    }

    public function getDefinition()
    {
        $inputDefinition = parent::getDefinition();
        $inputDefinition->setArguments();

        return $inputDefinition;
    }


} 