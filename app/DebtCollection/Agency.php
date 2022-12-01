<?php

namespace App\DebtCollection;

class Agency implements Collector
{
    public function collect(int $ownedAmount): float
    {
        $guaranteed = $ownedAmount * 0.5;

        return mt_rand($guaranteed, $ownedAmount);
    }
}