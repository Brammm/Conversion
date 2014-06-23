<?php

namespace Conversion\Console\Command;

use Conversion\Converter\Converter;
use Conversion\Unit\UnitRegistry;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ConvertCommand extends Command
{
    /** @var Converter */
    private $converter;

    public function __construct(Converter $converter)
    {
        $this->converter = $converter;

        parent::__construct();
    }

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
        $converted = $this->converter
            ->from($input->getArgument('unitFrom'))
            ->to($input->getArgument('unitTo'))
            ->convert($input->getArgument('value'));

        $output->writeln(sprintf(
            '%.2f %s is %.2f %s',
            $input->getArgument('value'),
            $input->getArgument('unitFrom'),
            $converted,
            $input->getArgument('unitTo')
        ));
    }
} 