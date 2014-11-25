<?php

namespace spec\CD;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class SimpleSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('CD\Simple');
    }

    function it_squares()
    {
        $this->square(1)->shouldReturn(10);
    }
}
