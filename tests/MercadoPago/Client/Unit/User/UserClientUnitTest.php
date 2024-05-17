<?php

namespace MercadoPago\Tests\Client\Unit\User;

use MercadoPago\Client\User\UserClient;
use MercadoPago\MercadoPagoConfig;
use MercadoPago\Net\MPDefaultHttpClient;
use MercadoPago\Tests\Client\Unit\Base\BaseClient;

/**
 * UserClientUnitTest Client unit tests.
 */
final class UserClientUnitTest extends BaseClient
{
    public function testGetSuccess()
    {
        $filepath = '../../../../Resources/Mocks/Response/User/user_base.json';
        $mock_http_request = $this->mockHttpRequest($filepath, 200);

        $http_client = new MPDefaultHttpClient($mock_http_request);
        MercadoPagoConfig::setHttpClient($http_client);

        $client = new UserClient();
        $user = $client->get();

        $this->assertEquals(200, $user->getResponse()->getStatusCode());
        $this->assertEquals(1160535239, $user->id);
        $this->assertEquals("TETE2893135", $user->nickname);
        $this->assertEquals("2022-07-14T08:05:06.000-04:00", $user->registration_date);
        $this->assertEquals("Test", $user->first_name);
        $this->assertEquals("Test", $user->last_name);
        $this->assertEquals("BR", $user->country_id);
        $this->assertEquals("test_user_5001277@testuser.com", $user->email);
        $this->assertEquals("CPF", $user->identification->type);
        $this->assertEquals("15635614680", $user->identification->number);
        $this->assertEquals("Test Address 123", $user->address->address);
        $this->assertEquals("01", $user->phone->area_code);
        $this->assertEquals("normal", $user->user_type);
        $this->assertEquals("historic", $user->seller_reputation->transactions->period);
        $this->assertEquals("365 days", $user->seller_reputation->metrics->sales->period);
    }
}
