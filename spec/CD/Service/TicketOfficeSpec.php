<?php

namespace spec\CD\Service;

use CD\Model\Reservation;
use CD\Model\ReservationRequest;
use CD\Model\Train;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TicketOfficeSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('CD\Service\TicketOffice');
    }

    function it_can_reserve_ticket(
        ReservationRequest $request,
        Train $train
    ){
        $this->setTrain($train);

        $train->hasSeats(10)->willReturn(true);

        $request->getSeats()->willReturn(10);



        $this->request($request)->shouldReturnAnInstanceOf(new Reservation());
    }
}
