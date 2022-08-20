<?php

interface PaymentCondition
{
    public function filter([] $paymentMethods, InputParams $inputParams);
}