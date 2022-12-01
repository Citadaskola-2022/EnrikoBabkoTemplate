<?php

declare(strict_types=1);


use App\ServiceExpenses;
require __DIR__ . '/../bootstrap/app.php';

use Doctrine\Inflector\InflectorFactory;
use Ramsey\Uuid\Uuid;

$inflector = InflectorFactory::create()->build();

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

//echo '<pre>';
var_dump($_ENV['DB_ROOT']);
var_dump($_ENV['DB_PASSWORD']);

$name = 'apple';
printf(
    'vienskaitlis: %s, daudzskaitlis: %s',
    $name, $inflector->pluralize($name)
);
echo '<br>';

$name = 'Get out of my website';
printf(
    'title: %s, url: %s',
    $name, $inflector->urlize($name)
);
echo '<br>';

$uuid = Uuid::uuid4();

printf(
    "UUID: %s\nVersion: %d\n",
    $uuid->toString(),
    $uuid->getFields()->getVersion()
);

$transaction = new ServiceExpenses(30);

$transaction->process();

$coffee = new \App\Coffee\CoffeeWithMilk();

$coffee -> prepare(30);
$coffee -> prepare(40);
$coffee -> prepare(30);
$coffee -> prepare(30);

makeCoffee($coffee);

$coffee -> brew();

$iced = new \App\Coffee\IcedCoffee($coffee);
$iced->prepare(50);
$iced -> addIce(5);
$iced -> brew();

function makeCoffee(\App\Coffee\Coffee $coffee): void
{
    if($coffee instanceof \App\Coffee\CoffeeWithMilk)
    {
    $coffee->addMilk();
    }
}
