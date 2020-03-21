<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Rest\ApiContext;

class PayPal extends Model
{

    private $identify;
    private $apiContext;

    public function __construct()
    {
        $this->apiContext = new ApiContext(
            new OAuthTokenCredential(config('paypal.client_id'), config('paypal.secret_id'))
        );

        $this->apiContext->setConfig(config('paypal.settings'));

        $this->identify = bcrypt(uniqid(date('YmHis')));
    }

    public function generate()
    {
        $payer = new Payer();
        $payer->setPaymentMethod("paypal");

        $item1 = new Item();
        $item1->setName('Ground Coffee 40 oz')
            ->setCurrency('USD')
            ->setQuantity(1)
            ->setPrice(7.5);
        $item2 = new Item();
        $item2->setName('Granola bars')
            ->setCurrency('USD')
            ->setQuantity(5)
            ->setPrice(2);

        $itemList = new ItemList();
        $itemList->setItems(array($item1, $item2));

        $details = new Details();
        $details->setShipping(1.2)
            ->setTax(1.3)
            ->setSubtotal(17.50);

        $amount = new Amount();
        $amount->setCurrency("USD")
            ->setTotal(20)
            ->setDetails($details);

        $transaction = new Transaction();
        $transaction->setAmount($amount)
            ->setItemList($itemList)
            ->setDescription("Payment description")
            ->setInvoiceNumber($this->identify);

        $baseRoute = route('return.paypal');
        $redirectUrls = new RedirectUrls();
        $redirectUrls->setReturnUrl("{$baseRoute}?success=true")
            ->setCancelUrl("{$baseRoute}?success=false");

        $payment = new Payment();
        $payment->setIntent("order")
            ->setPayer($payer)
            ->setRedirectUrls($redirectUrls)
            ->setTransactions(array($transaction));

        $request = clone $payment;

        try {
            $payment->create($this->apiContext);
        } catch (Exception $ex) {
            exit(1);
        }

        $approvalUrl = $payment->getApprovalLink();

        return $payment;
    }
}
