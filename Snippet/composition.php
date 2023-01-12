<?php

$s = new Subscription(new braintreeGateway());

class Subscription {

    private Gateway $paymentGateway;

    public function __construct(Gateway $paymentGateway)
    {
        $this->paymentGateway = $paymentGateway;
    }

    public function create()
    {

    }

    public function cancel()
    {
        //API Request
        //Find stripe customer
        $this->paymentGateway->findCustomer();
        //Find Stripe customer subscriptions
        $this->paymentGateway->findCustomerSubscriptions();
        //Cancel in database
    }

    public function invoice()
    {

    }

    public function swap()
    {

    }
}

interface Gateway
{
    public function findCustomer();
    public function findCustomerSubscriptions();
}

class StripeGateway implements Gateway {
    public function findCustomer()
    {

    }

    public function findCustomerSubscriptions()
    {

    }
}

class braintreeGateway implements Gateway {

    public function findCustomer()
    {
        // TODO: Implement findCustomer() method.
    }

    public function findCustomerSubscriptions()
    {
        // TODO: Implement findCustomerSubscriptions() method.
    }
}