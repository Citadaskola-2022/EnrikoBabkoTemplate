<?php

declare(strict_types=1);

use App\ServiceExpenses;

spl_autoload_register(function ($class) {
    require_once __DIR__ . '/../' . lcfirst(str_replace('\\', '/', $class)) . '.php';
});

$transaction = new ServiceExpenses(30);

$transaction->process();