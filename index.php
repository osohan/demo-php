<?php

$productType        = 'book';       // book | reward | walletRefill (пополнение внутреннего кошелька)
$amount             = 85.10;        // any float > 0
$lang               = 'en';         // only en | es | uk
$countryCode        = 'IN';         // any country code in ISO-3166 format
$userOs             = 'android';    // android | ios | windows

$paymentMethods = [];

$conditions = array(
    new PayPalCondition(),
    new ExternalNotSupportedCondition(),
    new ExternalWalletUnavailableCondition(),
    new GooglePayCondition(),
    new ApplePayCondition()
);

$paymentTypeSelector = new PaymentTypeSelector($paymentMethods, $conditions);
$paymentTypeSelector->getButtons($productType, $amount, $lang, $countryCode, $userOs);