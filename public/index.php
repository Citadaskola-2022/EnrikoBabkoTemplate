<?php

declare(strict_types=1);

require __DIR__ . '/../bootstrap/app.php';

$coffee = new \App\Coffee\CoffeeWithMilk();

$coffee -> prepare(30);
$coffee -> prepare(40);
$coffee -> prepare(30);
$coffee -> prepare(30);

makeCoffee($coffee);

$coffee -> brew();

$iced = new \App\Coffee\IcedCoffee($coffee);
$iced -> prepare(50);
$iced -> addIce(5);
$iced -> brew();

function makeCoffee(\App\Coffee\Coffee $coffee): void
{
    if($coffee instanceof \App\Coffee\CoffeeWithMilk)
    {
    $coffee->addMilk();
    }
}
