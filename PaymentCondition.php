<?php

interface PaymentCondition
{
    public function available([] $paymentMethods, InputParams $inputParams);
}