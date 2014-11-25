<?php

namespace CD\Model;

class Coach
{
    private $seats = 80;
    public function hasSeats($argument1)
    {
        return $this->seats>=$argument1;
    }
}
