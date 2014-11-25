<?php

namespace CD\Model;

class Coach
{
    private $seats = 80;
    public function hasSeats($argument1)
    {
        if(!is_int($argument1)){
            throw new \Exception();
        }

        return $this->seats>=$argument1;
    }
}
