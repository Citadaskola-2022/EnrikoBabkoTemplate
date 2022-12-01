<?php

declare(strict_types=1);

require __DIR__ . '/../bootstrap/app.php';

//Polymorphism

//Cilvēks, kas aizņēmis naudu
//aizdevēji (aģentūra, uzņēmums, banka) kas piedzen naudu no parādniekiem.

$collector = new \App\DebtCollection\Agency();
$collectedAmount = $collector->collect(100);
var_dump($collectedAmount);

$collector = new \App\DebtCollection\Rocky();
$collectedAmount = $collector->collect(100);
var_dump($collectedAmount);

$service = new App\DebtCollection\Service();
$collectedAmount = $service->collectDebt($collector);


