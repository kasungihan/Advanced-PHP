<?php

include 'Method.php';

class Card extends Method
{
    public function pay($amount)
    {
        return $amount . ' paid';
    }
}
