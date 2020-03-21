<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use GuzzleHttp\Client as Guzzle;

class PagSeguro extends Model
{
    public function generate()
    {
        $params = [
            'email' => config('pagseguro.email'),
            'token' => config('pagseguro.token'),
            'currency' => 'BRL',
            'itemId1' => '0001',
            'itemDescription1' => 'Notebook Prata',
            'itemAmount1' => '100.00',
            'itemQuantity1' => '1',
            'itemWeight1' => '1000',
            'reference' => 'REF1234',
            'senderName' => 'Jose Comprador',
            'senderAreaCode' => '11',
            'senderPhone' => '56713293',
            'senderEmail' => 'email@sandbox.pagseguro.com.br',
            'shippingType' => '1',
            'shippingAddressStreet' => 'Av. Brig. Faria Lima',
            'shippingAddressNumber' => '1384',
            'shippingAddressComplement' => '2o andar',
            'shippingAddressDistrict' => 'Jardim Paulistano',
            'shippingAddressPostalCode' => '01452002',
            'shippingAddressCity' => 'Sao Paulo',
            'shippingAddressState' => 'SP',
            'shippingAddressCountry' => 'BRA',
        ];

        $params = http_build_query($params);

        $guzzle = new Guzzle;
        $response = $guzzle->request('POST', config('pagseguro.url_checkout_sandbox'),[
            'query' => $params,
        ]);
        $body = $response->getBody();
        $contents = $body->getContents();

        $xml = simplexml_load_string($contents);
        $code = $xml->code;

        return $code;
    }
}
