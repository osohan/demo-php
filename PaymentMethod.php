<?php

class PaymentMethod
{
    private $id;
    private $paymentSystemId;
    private $name;
    private $commission;
    private $enabled;
    private $priority;
    private $externalPayment;

    private $availableInCountries;
    private $disabledInCountries;
}