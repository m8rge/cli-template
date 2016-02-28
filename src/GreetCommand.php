<?php

namespace m8rge;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class GreetCommand
{
    function __invoke(InputInterface $input, OutputInterface $output)
    {
        $name = $input->getArgument('name');
        $greeting = $input->getOption('greeting');
        $output->writeln("$greeting Hello, $name!");
    }
}