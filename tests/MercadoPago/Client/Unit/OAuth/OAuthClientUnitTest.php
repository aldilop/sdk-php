<?php

namespace MercadoPago\Tests\Client\Unit\OAuth;

use MercadoPago\Client\OAuth\OAuthClient;
use MercadoPago\Client\OAuth\OAuthCreateRequest;
use MercadoPago\Client\OAuth\OAuthRefreshRequest;
use MercadoPago\MercadoPagoConfig;
use MercadoPago\Net\MPDefaultHttpClient;
use MercadoPago\Tests\Client\Unit\Base\BaseClient;

/**
 * OAuthClient unit tests.
 */
final class OAuthClientUnitTest extends BaseClient
{
    public function testGetAuthorizationURLSuccess()
    {
        $client = new OAuthClient();
        $url = $client->getAuthorizationURL("app_id", "redirect_uri", "random_id");
        $expected = "https://auth.mercadopago.com?client_id=app_id&response_type=code&platform_id=mp&state=random_id&redirect_uri=redirect_uri";
        $this->assertEquals($expected, $url);
    }

    public function testCreateSuccess()
    {
        $filepath = '../../../../Resources/Mocks/Response/OAuth/oauth_base.json';
        $mock_http_request = $this->mockHttpRequest($filepath, 200);

        $http_client = new MPDefaultHttpClient($mock_http_request);
        MercadoPagoConfig::setHttpClient($http_client);

        $client = new OAuthClient();
        $oauth = $client->create($this->createRequest());
        $this->assertEquals(200, $oauth->getResponse()->getStatusCode());
        $this->assertEquals("APP_USR-367604750109681-091211-fbad3ab32ad4f89bf1c385141ba5626a-1160535239", $oauth->access_token);
        $this->assertEquals("Bearer", $oauth->token_type);
        $this->assertEquals(15552000, $oauth->expires_in);
        $this->assertEquals("offline_access read write", $oauth->scope);
        $this->assertEquals(1160535239, $oauth->user_id);
        $this->assertEquals("TG-6500883a5f70750001bc46d2-1160535239", $oauth->refresh_token);
        $this->assertEquals("APP_USR-2dfd505a-4b30-4403-878b-f8fb618e58b3", $oauth->public_key);
        $this->assertTrue($oauth->live_mode);
    }

    public function testRefreshSuccess()
    {
        $filepath = '../../../../Resources/Mocks/Response/OAuth/oauth_base.json';
        $mock_http_request = $this->mockHttpRequest($filepath, 200);

        $http_client = new MPDefaultHttpClient($mock_http_request);
        MercadoPagoConfig::setHttpClient($http_client);

        $client = new OAuthClient();
        $oauth = $client->refresh($this->refreshRequest());
        $this->assertEquals(200, $oauth->getResponse()->getStatusCode());
        $this->assertEquals("APP_USR-367604750109681-091211-fbad3ab32ad4f89bf1c385141ba5626a-1160535239", $oauth->access_token);
        $this->assertEquals("Bearer", $oauth->token_type);
        $this->assertEquals(15552000, $oauth->expires_in);
        $this->assertEquals("offline_access read write", $oauth->scope);
        $this->assertEquals(1160535239, $oauth->user_id);
        $this->assertEquals("TG-6500883a5f70750001bc46d2-1160535239", $oauth->refresh_token);
        $this->assertEquals("APP_USR-2dfd505a-4b30-4403-878b-f8fb618e58b3", $oauth->public_key);
        $this->assertTrue($oauth->live_mode);
    }

    private function createRequest(): OAuthCreateRequest
    {
        $request = new OAuthCreateRequest();
        $request->client_secret = "CLIENT_SECRET";
        $request->client_id = "CLIENT_ID";
        $request->code = "CODE";
        $request->redirect_uri = "REDIRECT_URI";
        return $request;
    }

    private function refreshRequest(): OAuthRefreshRequest
    {
        $request = new OAuthRefreshRequest();
        $request->client_secret = "CLIENT_SECRET";
        $request->client_id = "CLIENT_ID";
        $request->refresh_token = "REFRESH_TOKEN";
        return $request;
    }
}
