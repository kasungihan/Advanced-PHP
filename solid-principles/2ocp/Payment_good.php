<?php


interface GatewayInterface
{
    public function purchase(Order $order, array $data = []);
}

class PaypalGateway implements GatewayInterface
{
    public function purchase(Order $order, array $data = [])
    {
        $invoice = (new PaypalClient([]))->pay($order->total);
    }
}

class StripeGateway implements GatewayInterface
{
    public function purchase(Order $order, array $data = [])
    {
        $invoice = (new StripeClient([]))->pay($order->total);
    }
}


class Payment
{
    public function store(Request $request)
    {
        $gateway = $request->user()->get('defaultPaymentGateway');
        $invoice = $gateway->purchase($order, ['token', $request->getToken]);

        return $invoice;
    }
}
