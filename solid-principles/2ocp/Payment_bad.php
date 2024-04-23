<?php


class Payment
{
    public function store(Request $request)
    {
        $gateway = $request->user()->get('defaultPaymentGateway');
        // violate the principle because every time add new gateway base code should be edit
        if ($gateway == 'PayPal') {
            $invoice = (new PaypalClient([]))->pay();
        } else {
            $invoice = (new StripeClient([]))->pay();
        }

        return $invoice;
    }
}
