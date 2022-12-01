<?php

namespace App;

class ServiceExpenses
{
    private float $amount;

    public function __construct($amount)
    {
        $this->amount = $amount;
    }

    public function process(): void
    {
        $this->prepareInvoice();

        $this->sendEmail();

        echo "Total amount for service expenses is {$this->amount}.";
        //Vai: printf("Total amount is %d.02 for the service, $this->amount");
    }

    private function prepareInvoice()
    {

    }

    private function sendEmail()
    {

    }

}
