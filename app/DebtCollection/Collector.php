<?php

namespace App\DebtCollection;

interface Collector
{
    public function collect(int $ownedAmount): float;
}