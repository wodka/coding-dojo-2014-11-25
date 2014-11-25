<?php

namespace CD;

class Simple {
    private $base;

    public function __construct($base=10)
    {
        $this->base = $base;
    }

    public function square($number)
    {
        return $this->base^$number;
    }
}

