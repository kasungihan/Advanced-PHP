<?php

include 'Method.php';

class Paypal extends Method
{
    public function pay($amount)
    {
        return $amount . ' paid';
    }
}
