<?php

class ExternalWalletUnavailableCondition implements PaymentCondition
{
    public function available([] $paymentMethods, InputParams $inputParams)
    {
        if ($inputParams['productType'] == 'walletTopUp') {
            $paymentMethodsFiltered = [];
            for ($i = 0; $i < count($paymentMethods); $i++) {
                if ($paymentMethods[$i]['name'] != 'InternalWallet') {
                    array_push($paymentMethodsFiltered, $paymentMethods[$i]);
                }
            }
            return $paymentMethodsFiltered;
        }
        return $paymentMethods;
    }
}