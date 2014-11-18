<?php

namespace spec\Hogan\SymfonyConsole\Command;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class HelloWorldCommandSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Hogan\SymfonyConsole\Command\HelloWorldCommand');
        $this->shouldHaveType('Symfony\Component\Console\Command\Command');
    }

    function it_should_output_hello_world_when_run(
        InputInterface $input,
        OutputInterface $output
    )
    {
        $output->writeln('Hello, world!')->shouldBeCalled();
        $this->run($input, $output);
    }
}
