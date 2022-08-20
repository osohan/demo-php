<?php

class InputParams
{
    public $amount;
    public $country;
    public $productType;
    public $os;

    public function __construct($amount, $countryCode, $productType, $userOs)
    {
        $this->amount = $amount;
        $this->country = $countryCode;
        $this->productType = $productType;
        $this->os = $userOs;
    }
}