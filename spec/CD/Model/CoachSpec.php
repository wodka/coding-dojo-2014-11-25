<?php

namespace spec\CD\Model;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CoachSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('CD\Model\Coach');
    }

    function it_has_seats(){
        $this->hasSeats(4)->shouldReturn(true);
    }
}
