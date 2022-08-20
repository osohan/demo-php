<?php

class PayPalCondition implements PaymentCondition
{
    public function filter([] $paymentMethods, InputParams $inputParams)
    {
        if ($inputParams['country'] == 'es' && $inputParams['amount'] < 0.3) {
            $paymentMethodsFiltered = [];
            for ($i = 0; $i < count($paymentMethods); $i++) {
                if ($paymentMethods[$i]['name'] != 'PayPal') {
                    array_push($paymentMethodsFiltered, $paymentMethods[$i]);
                }
            }
            return $paymentMethodsFiltered;
        }
        return $paymentMethods;
    }
}