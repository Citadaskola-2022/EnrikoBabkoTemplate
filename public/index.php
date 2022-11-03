<?php

declare(strict_types=1);

use App\ServiceExpenses;
require __DIR__ . '/../bootstrap/app.php';

$transaction = new ServiceExpenses(30);

$transaction->process();