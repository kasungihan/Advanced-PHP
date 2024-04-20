<?php


class SingleInvoice
{
   public function store(StoreInvoiceRequest $request, InvoiceService $service)
   {
      // validation here - can be able to move to validation locations

      // generate invoice number - seperate to new method getNextInvoiceNumber()

      // save and store invoice

      // insert invoice items to relationship

      // completed single responsibility principle
      $invoice = $service->storeNewInvoice(
         $request->invoice_date,
         $request->customer,
         $request->products,
         $request->price,
      );
   }
}

class InvoiceService
{
   public function storeNewInvoice(
      string $date,
      string $customer,
      string $produncts,
      string $price
   ): SingleInvoice {
      return Invoice::create([
         'invoice_no' => $this->getNextInvoiceNumber(),
         'invoice_date' => $date,
         'customer' => $customer
      ]);
   }

   private function getNextInvoiceNumber()
   {
      return Invoice::max('id') + 1;
   }
}
