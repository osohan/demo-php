<?php

class ApplePayCondition implements PaymentCondition
{
    public function filter([] $paymentMethods, InputParams $inputParams)
    {
        if ($inputParams['os'] != 'ios') {
            $paymentMethodsFiltered = [];
            for ($i = 0; $i < count($paymentMethods); $i++) {
                if ($paymentMethods[$i]['name'] != 'ApplePay') {
                    array_push($paymentMethodsFiltered, $paymentMethods[$i]);
                }
            }
            return $paymentMethodsFiltered;
        }
        return $paymentMethods;
    }
}