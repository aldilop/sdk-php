<?php

namespace MercadoPago\Tests\Client\Unit\Payment;

use MercadoPago\Client\Payment\PaymentClient;
use MercadoPago\MercadoPagoConfig;
use MercadoPago\Net\MPDefaultHttpClient;
use MercadoPago\Tests\Client\Unit\Base\BaseClient;

/**
 * Payment Client unit tests.
 */
final class PaymentClientUnitTest extends BaseClient
{
    public function testCreateSuccess()
    {
        $filepath = '../../../../Resources/Mocks/Response/Payment/payment_base.json';
        $mock_http_request = $this->mockHttpRequest($filepath, 201);

        $http_client = new MPDefaultHttpClient($mock_http_request);
        MercadoPagoConfig::setHttpClient($http_client);

        $client = new PaymentClient();
        $payment = $client->create($this->createRequest());
        $this->assertEquals(201, $payment->getResponse()->getStatusCode());
        $this->assertEquals(17014025134, $payment->id);
        $this->assertEquals("2022-01-10T10:10:10.000-00:00", $payment->date_created);
        $this->assertEquals("approved", $payment->status);
        $this->assertEquals("128185910", $payment->payer->id);
        $this->assertEquals("19119119100", $payment->payer->identification->number);
        $this->assertEquals("order_1631894348", $payment->metadata->order_number);
        $this->assertEquals("mercadopago_fee", $payment->fee_details[0]->type);
    }

    public function testGetSuccess()
    {
        $filepath = '../../../../Resources/Mocks/Response/Payment/payment_base.json';
        $mock_http_request = $this->mockHttpRequest($filepath, 200);

        $http_client = new MPDefaultHttpClient($mock_http_request);
        MercadoPagoConfig::setHttpClient($http_client);

        $client = new PaymentClient();
        $payment_id = 17014025134;
        $payment = $client->get($payment_id);
        $this->assertEquals(200, $payment->getResponse()->getStatusCode());
        $this->assertEquals(17014025134, $payment->id);
    }

    public function testCancelSuccess()
    {
        $filepath = '../../../../Resources/Mocks/Response/Payment/payment_cancelled.json';
        $mock_http_request = $this->mockHttpRequest($filepath, 200);

        $http_client = new MPDefaultHttpClient($mock_http_request);
        MercadoPagoConfig::setHttpClient($http_client);

        $client = new PaymentClient();
        $payment_id = 17014025134;
        $payment = $client->cancel($payment_id);
        $this->assertEquals(200, $payment->getResponse()->getStatusCode());
        $this->assertEquals(17014025134, $payment->id);
        $this->assertEquals("cancelled", $payment->status);
    }

    public function testCaptureSuccess()
    {
        $filepath = '../../../../Resources/Mocks/Response/Payment/payment_captured.json';
        $mock_http_request = $this->mockHttpRequest($filepath, 200);

        $http_client = new MPDefaultHttpClient($mock_http_request);
        MercadoPagoConfig::setHttpClient($http_client);

        $client = new PaymentClient();
        $payment_id = 17014025134;
        $payment = $client->capture($payment_id, 5);
        $this->assertEquals(200, $payment->getResponse()->getStatusCode());
        $this->assertEquals(17014025134, $payment->id);
        $this->assertTrue($payment->captured);
    }

    public function testSearchSuccess()
    {
        $filepath = '../../../../Resources/Mocks/Response/Payment/payment_search.json';
        $mock_http_request = $this->mockHttpRequest($filepath, 200);

        $http_client = new MPDefaultHttpClient($mock_http_request);
        MercadoPagoConfig::setHttpClient($http_client);

        $client = new PaymentClient();
        $search_request = new \MercadoPago\Net\MPSearchRequest(5, 0, []);
        $search_result = $client->search($search_request);
        $this->assertEquals(200, $search_result->getResponse()->getStatusCode());
        $this->assertEquals(5, $search_result->paging->limit);
        $this->assertEquals(0, $search_result->paging->offset);
        $this->assertEquals(102, $search_result->paging->total);
        $this->assertEquals(5, count($search_result->results));
        $this->assertEquals(1241012238, $search_result->results[0]->id);
    }

    private function createRequest(): array
    {
        $request = [
            "transaction_amount" => 100,
            "description" => "description",
            "payment_method_id" => "pix",
            "payer" => [
                "email" => "test_user_24634097@testuser.com",
            ]
        ];
        return $request;
    }
}
