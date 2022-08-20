<?php

class GooglePayCondition implements PaymentCondition
{
    public function filter([] $paymentMethods, InputParams $inputParams)
    {
        if ($inputParams['os'] != 'android' || $inputParams['country'] == 'IN') {
            $paymentMethodsFiltered = [];
            for ($i = 0; $i < count($paymentMethods); $i++) {
                if ($paymentMethods[$i]['name'] != 'GooglePay') {
                    array_push($paymentMethodsFiltered, $paymentMethods[$i]);
                }
            }
            return $paymentMethodsFiltered;
        }
        return $paymentMethods;
    }
}