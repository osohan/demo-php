<?php

class PaymentTypeSelector
{
    private [] $paymentMethods;
    private [] $conditions;

    public function __construct([] $paymentMethods, [] $conditions)
    {
        $this->paymentMethods = $paymentMethods;
        $this->conditions = $conditions;
    }

    public function getButtons($productType, $amount, $lang, $countryCode, $userOs)
    {
        $result = $this->paymentMethods;
        $params = new InputParams($amount, $countryCode, $productType, $userOs);
        foreach ($this->conditions as &$condition) {
            $result = $condition->available($result, $params);
        }
    }
}