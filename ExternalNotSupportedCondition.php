<?php

class ExternalNotSupportedCondition implements PaymentCondition
{
    public function filter([] $paymentMethods, InputParams $inputParams)
    {
        if ($inputParams['productType'] == 'reward' && $inputParams['country'] == 'ES' && $inputParams['amount'] < 0.3) {
            $paymentMethodsFiltered = [];
            for ($i = 0; $i < count($paymentMethods); $i++) {
                if (!$paymentMethods[$i]['externalPayment']) {
                    array_push($paymentMethodsFiltered, $paymentMethods[$i]);
                }
            }
            return $paymentMethodsFiltered;
        }
        return $paymentMethods;
    }
}