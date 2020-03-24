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
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use App\Cart;
use App\Pedido;
use PayPal\Api\PaymentExecution;

class PayPal extends Model
{
    private $apiContext;
    private $identify;
    private $cart;

    public function __construct(Cart $cart)
    {
        $this->apiContext = new ApiContext(
             new OAuthTokenCredential(config('paypal.client_id'), config('paypal.secret_id'))
        );

        $this->apiContext->setConfig(config('paypal.settings'));

        $this->identify = bcrypt(uniqid(date('YmdHis')));

        $this->cart = $cart;
    }

    public function generate()
    {
        $payment = new Payment();
        $payment->setIntent("order")
            ->setPayer($this->payer())
            ->setRedirectUrls($this->redirectUrls())
            ->setTransactions([$this->transaction()]);

        try {
            $payment->create($this->apiContext);

            $paymentId = $payment->getId();

            $approvalUrl = $payment->getApprovalLink();

            return [
                'status' => true,
                'url_paypal' => $approvalUrl,
                'identify'   => $this->identify,
                'payment_id' => $paymentId,
            ];

        } catch (Exception $e) {
            return [
                'status' => false,
                'message' => $e->getMessage(),
            ];
        }


    }

    public function payer()
    {
        $payer = new Payer();
        $payer->setPaymentMethod("paypal");

        return $payer;
    }

    public function itemList()
    {
        $itemList = new ItemList();
        $itemList->setItems($this->items());

        return $itemList;
    }

    public function items()
    {
        $items = [];

        $itemsCart = $this->cart->getItems(); //usa a função getItems da model Cart para selecionar os itens e enviar para pagamento

        foreach( $itemsCart as $itemCart) {
            $item = new Item();
            $item->setName($itemCart['item']->nome)
                 ->setCurrency('BRL')
                 ->setQuantity($itemCart['qtd'])
                 ->setPrice($itemCart['item']->preco);

            array_push($items,$item); //adiciona o item instanciado no foreach ao array
        }

        return $items;
    }

    public function details()
    {
        $details = new Details();
        $details->setTax($this->cart->subtotal()*0.05) //utiliza o método subtotal da model cart e aplica a taxa de 0,05%
                ->setSubtotal($this->cart->subtotal());

        return $details;
    }

    public function amount()
    {
        $amount = new Amount();
        $amount->setCurrency("BRL")
            ->setTotal($this->cart->total()) //utiliza o método total, que já possui o subtotal * a taxa
            ->setDetails($this->details());

        return $amount;
    }

    public function transaction()
    {
        $transaction = new Transaction();
        $transaction->setAmount($this->amount())
            ->setItemList($this->itemList())
            ->setDescription("Pagamento da Experiência BlendTour")
            ->setInvoiceNumber($this->identify);

        return $transaction;
    }

    public function redirectUrls()
    {
        $baseRoute = route('return.paypal');
        $redirectUrls = new RedirectUrls();
        $redirectUrls->setReturnUrl("{$baseRoute}?success=true")
                    ->setCancelUrl("{$baseRoute}?success=false");

        return $redirectUrls;
    }

    public function execute($paymentId, $token, $payerId)
    {
        $payment = Payment::get($paymentId, $this->apiContext);

        if ( $payment->getState() != 'approved') {
            $execution = new PaymentExecution();
            $execution->setPayerId($payerId);

            $result = $payment->execute($execution, $this->apiContext);

            return $result->getState();
        }

        return $payment->getState();
    }

}
