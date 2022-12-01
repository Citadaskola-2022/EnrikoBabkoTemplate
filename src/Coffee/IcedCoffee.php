<?php

namespace App\Coffee;

//Classes can not inherit multiple classes, but they can inherit classes that inherit other classes.
class IcedCoffee
{
    private Coffee $coffee;
    private int $ice = 0;

    public function __construct(\App\Coffee\Coffee $coffee)
    {
        $this->coffee = $coffee;
    }

    public function addIce(int $pieces): void
    {
        $this->ice += $pieces;
    }

    public function prepare(int $volume)
    {
        $this->coffee->prepare($volume);
    }

    public function brew()
    {

    }
}