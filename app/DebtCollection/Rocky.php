<?php

namespace App\DebtCollection;

class Rocky implements Collector
{
    public function collect(int $ownedAmount): float
    {
        return $ownedAmount * 0.65;
    }
}