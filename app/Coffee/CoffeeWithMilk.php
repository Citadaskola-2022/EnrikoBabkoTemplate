<?php

namespace App\Coffee;

class CoffeeWithMilk extends Coffee
{
    protected int $volume = 240;

    public function __construct(string $y = 'x')
    {
        parent::__construct(1);
        $this->volume = 250;
    }

    public function brew(): void
    {
        foreach($this->portions as $i => $portion)
        {
            echo sprintf('%s: adding %dml portion to coffee with milk' . PHP_EOL , $i, $portion);
        }
    }

    public function addMilk()
    {
        $this->portions['milk'] = 100;
    }
}

