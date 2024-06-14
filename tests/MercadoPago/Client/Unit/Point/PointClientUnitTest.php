<?php

namespace MercadoPago\Tests\Client\Unit\Point;

use MercadoPago\Client\Point\PointClient;
use MercadoPago\Client\Point\PointDeviceOperatingModeRequest;
use MercadoPago\Client\Point\PointPaymentIntentListRequest;
use MercadoPago\MercadoPagoConfig;
use MercadoPago\Net\MPDefaultHttpClient;
use MercadoPago\Net\MPSearchRequest;
use MercadoPago\Tests\Client\Unit\Base\BaseClient;

/**
 * Point Client unit tests.
 */
final class PointClientUnitTest extends BaseClient
{
    const DEVICE_ID = "GERTEC_MP123__12345678";
    const STORE_ID = "12345678";
    const POS_ID = "12345678";

    public function testCreatePaymentIntentSuccess()
    {
        $filepath = '../../../../Resources/Mocks/Response/Point/payment_intent_base.json';
        $mock_http_request = $this->mockHttpRequest($filepath, 201);

        $http_client = new MPDefaultHttpClient($mock_http_request);
        MercadoPagoConfig::setHttpClient($http_client);

        $client = new PointClient();
        $request = $this->createRequest();
        $payment_intent = $client->createPaymentIntent(PointClientUnitTest::DEVICE_ID, $request);

        $this->assertEquals(201, $payment_intent->getResponse()->getStatusCode());
        $this->assertEquals("4561ads-das4das4-das4754-das456", $payment_intent->additional_info->external_reference);
        $this->assertTrue($payment_intent->additional_info->print_on_terminal);
        $this->assertEquals(100.0, $payment_intent->amount);
        $this->assertEquals("your payment intent description", $payment_intent->description);
        $this->assertEquals("GERTEC_MP35P__8701012051267123", $payment_intent->device_id);
        $this->assertEquals("3be5a9a0-570b-4650-9ec8-ceb699259111", $payment_intent->id);
        $this->assertEquals("credit_card", $payment_intent->payment->type);
        $this->assertEquals(1, $payment_intent->payment->installments);
        $this->assertEquals("seller", $payment_intent->payment->installments_cost);
        $this->assertEquals("card", $payment_intent->payment_mode);
    }

    public function testSearchPaymentIntentSuccess()
    {
        $filepath = '../../../../Resources/Mocks/Response/Point/payment_intent_search.json';
        $mock_http_request = $this->mockHttpRequest($filepath, 200);

        $http_client = new MPDefaultHttpClient($mock_http_request);
        MercadoPagoConfig::setHttpClient($http_client);

        $client = new PointClient();
        $payment_intent_id = "02150f68-01c5-46cd-906c-195960a17664";
        $payment_intent = $client->searchPaymentIntent($payment_intent_id);

        $this->assertEquals(200, $payment_intent->getResponse()->getStatusCode());
        $this->assertEquals("4561ads-das4das4-das4754-das456", $payment_intent->additional_info->external_reference);
        $this->assertTrue($payment_intent->additional_info->print_on_terminal);
        $this->assertEquals(100.0, $payment_intent->amount);
        $this->assertEquals("your payment intent description", $payment_intent->description);
        $this->assertEquals("GERTEC_MP35P__8701012051267123", $payment_intent->device_id);
        $this->assertEquals("02150f68-01c5-46cd-906c-195960a17664", $payment_intent->id);
        $this->assertEquals("credit_card", $payment_intent->payment->type);
        $this->assertEquals(1, $payment_intent->payment->installments);
        $this->assertEquals("seller", $payment_intent->payment->installments_cost);
        $this->assertEquals("card", $payment_intent->payment_mode);
        $this->assertEquals("ABANDONED", $payment_intent->state);
    }

    public function testCancelPaymentIntentSuccess()
    {
        $filepath = '../../../../Resources/Mocks/Response/Point/payment_intent_cancel.json';
        $mock_http_request = $this->mockHttpRequest($filepath, 200);

        $http_client = new MPDefaultHttpClient($mock_http_request);
        MercadoPagoConfig::setHttpClient($http_client);

        $client = new PointClient();
        $payment_intent_id = "3be5a9a0-570b-4650-9ec8-ceb699259111";
        $payment_intent = $client->cancelPaymentIntent(PointClientUnitTest::DEVICE_ID, $payment_intent_id);

        $this->assertEquals(200, $payment_intent->getResponse()->getStatusCode());
        $this->assertEquals("3be5a9a0-570b-4650-9ec8-ceb699259111", $payment_intent->id);
    }

    public function testGetPaymentIntentListSuccess()
    {
        $filepath = '../../../../Resources/Mocks/Response/Point/payment_intent_list.json';
        $mock_http_request = $this->mockHttpRequest($filepath, 200);

        $http_client = new MPDefaultHttpClient($mock_http_request);
        MercadoPagoConfig::setHttpClient($http_client);

        $client = new PointClient();
        $list_request = $this->createPointPaymentIntentListRequest();
        $payment_intent = $client->getPaymentIntentList($list_request);

        $this->assertEquals(200, $payment_intent->getResponse()->getStatusCode());
        $this->assertEquals("3be5a9a0-570b-4650-9ec8-ceb699259111", $payment_intent->events[0]->payment_intent_id);
        $this->assertEquals("CANCELED", $payment_intent->events[0]->status);
        $this->assertEquals("2023-09-13T18:22:30Z", $payment_intent->events[0]->created_on);
        $this->assertEquals("02150f68-01c5-46cd-906c-195960a17664", $payment_intent->events[1]->payment_intent_id);
        $this->assertEquals("ABANDONED", $payment_intent->events[1]->status);
        $this->assertEquals("2023-09-13T15:45:13Z", $payment_intent->events[1]->created_on);
        $this->assertEquals("08bebbe6-dfbf-48a7-be06-45c56343ec19", $payment_intent->events[2]->payment_intent_id);
        $this->assertEquals("CANCELED", $payment_intent->events[2]->status);
        $this->assertEquals("2023-09-12T20:53:49Z", $payment_intent->events[2]->created_on);
        $this->assertEquals("a8f71a94-37da-439c-afe8-ff1c7f7af2be", $payment_intent->events[3]->payment_intent_id);
        $this->assertEquals("CANCELED", $payment_intent->events[3]->status);
        $this->assertEquals("2023-09-12T20:39:33Z", $payment_intent->events[3]->created_on);
    }

    public function testGetPaymentIntentStatusSuccess()
    {
        $filepath = '../../../../Resources/Mocks/Response/Point/payment_intent_status.json';
        $mock_http_request = $this->mockHttpRequest($filepath, 200);

        $http_client = new MPDefaultHttpClient($mock_http_request);
        MercadoPagoConfig::setHttpClient($http_client);

        $client = new PointClient();
        $payment_intent_id = "3be5a9a0-570b-4650-9ec8-ceb699259111";
        $payment_intent = $client->getPaymentIntentStatus($payment_intent_id);

        $this->assertEquals(200, $payment_intent->getResponse()->getStatusCode());
        $this->assertEquals("CANCELED", $payment_intent->status);
        $this->assertEquals("2023-09-13T18:22:30Z", $payment_intent->created_on);
    }

    public function testGetDevicesSuccess()
    {
        $filepath = '../../../../Resources/Mocks/Response/Point/devices_list.json';
        $mock_http_request = $this->mockHttpRequest($filepath, 200);

        $http_client = new MPDefaultHttpClient($mock_http_request);
        MercadoPagoConfig::setHttpClient($http_client);

        $client = new PointClient();
        $request = $this->createGetDevicesRequest();
        $devices = $client->getDevices($request);

        $this->assertEquals(200, $devices->getResponse()->getStatusCode());
        $this->assertEquals("GERTEC_MP35P__8701012051267123", $devices->devices[0]->id);
        $this->assertEquals(48094361, $devices->devices[0]->pos_id);
        $this->assertEquals(47685573, $devices->devices[0]->store_id);
        $this->assertEquals("", $devices->devices[0]->external_pos_id);
        $this->assertEquals("PDV", $devices->devices[0]->operating_mode);
        $this->assertEquals(1, $devices->paging->total);
        $this->assertEquals(50, $devices->paging->limit);
        $this->assertEquals(0, $devices->paging->offset);
    }

    public function testChangeDeviceOperationgModeSuccess()
    {
        $filepath = '../../../../Resources/Mocks/Response/Point/devices_operating_mode.json';
        $mock_http_request = $this->mockHttpRequest($filepath, 200);

        $http_client = new MPDefaultHttpClient($mock_http_request);
        MercadoPagoConfig::setHttpClient($http_client);

        $client = new PointClient();
        $payment_intent_id = "3be5a9a0-570b-4650-9ec8-ceb699259111";
        $request = $this->createOperatingModeRequest();
        $device_updated = $client->changeDeviceOperatingMode($payment_intent_id, $request);

        $this->assertEquals(200, $device_updated->getResponse()->getStatusCode());
        $this->assertEquals("PDV", $device_updated->operating_mode);
    }

    private function createRequest(): array
    {
        $request = [
          "amount" => 100,
          "description" => "your payment intent description",
          "payment" => array(
            "installments" => 1,
            "type" => "credit_card",
            "installments_cost" => "seller"
          ),
          "additional_info" => array(
            "external_reference" => "4561ads-das4das4-das4754-das456",
            "print_on_terminal" => true
          )
        ];
        return $request;
    }

    private function createPointPaymentIntentListRequest(): PointPaymentIntentListRequest
    {
        $request = new PointPaymentIntentListRequest();
        $request->start_date = "2023-09-01";
        $request->end_date = "2023-09-30";
        return $request;
    }

    private function createGetDevicesRequest(): MPSearchRequest
    {
        $limit = 50;
        $offset = 0;
        $filters = array(
          "store_id" => PointClientUnitTest::STORE_ID,
          "pos_id" => PointClientUnitTest::POS_ID
        );
        $request = new MPSearchRequest($limit, $offset, $filters);
        return $request;
    }

    private function createOperatingModeRequest(): PointDeviceOperatingModeRequest
    {
        $request = new PointDeviceOperatingModeRequest();
        $request->operating_mode = "PDV";
        return $request;
    }
}
