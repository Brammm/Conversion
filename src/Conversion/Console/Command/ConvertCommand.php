<?php

namespace Conversion\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ConvertCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('convert')
            ->setDescription('Converts a value from one unit to another')
            ->addArgument(
                'value',
                InputArgument::REQUIRED,
                'Which value do you wish to convert?'
            )
            ->addArgument(
                'unitFrom',
                InputArgument::REQUIRED,
                'Which unit do you wish to convert from?'
            )
            ->addArgument(
                'unitTo',
                InputArgument::REQUIRED,
                'Which unit do you wish to convert to?'
            )
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $value    = $input->getArgument('value');
        $unitFrom = $input->getArgument('unitFrom');
        $unitTo   = $input->getArgument('unitTo');

        $output->writeln('test');
    }
} 