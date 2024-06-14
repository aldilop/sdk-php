<?php

namespace MercadoPago\Tests\Client\Integration\PreApprovalPlan;

use MercadoPago\Client\Common\RequestOptions;
use MercadoPago\Client\PreApprovalPlan\PreApprovalPlanClient;
use MercadoPago\Exceptions\MPApiException;
use MercadoPago\MercadoPagoConfig;
use MercadoPago\Net\MPSearchRequest;
use PHPUnit\Framework\TestCase;

/**
 * PreApprovalPlanClient integration tests.
 */
final class PreApprovalPlanClientITTest extends TestCase
{
    public static function setUpBeforeClass()
    {
        MercadoPagoConfig::setAccessToken(getenv("ACCESS_TOKEN"));
    }

    public function testCreateSuccess()
    {
        $client = new PreApprovalPlanClient();
        $plan = $client->create($this->createRequest());
        $this->assertNotNull($plan->id);
    }

    public function testCreateWithRequestOptionsFailure()
    {
        $this->expectException(MPApiException::class);
        $client = new PreApprovalPlanClient();
        $request = $this->createRequest();
        $request_options = new RequestOptions();
        $request_options->setAccessToken("invalid_access_token");
        $client->create($request, $request_options);
    }

    public function testGetSuccess()
    {
        $client = new PreApprovalPlanClient();
        $created_plan = $client->create($this->createRequest());
        $plan = $client->get($created_plan->id);
        $this->assertNotNull($plan->id);
        $this->assertNotNull($plan->init_point);
    }

    public function testGetWithRequestOptionsFailure()
    {
        $this->expectException(MPApiException::class);
        $client = new PreApprovalPlanClient();
        $created_plan = $client->create($this->createRequest());
        $request_options = new RequestOptions();
        $request_options->setAccessToken("invalid_access_token");
        $client->get($created_plan->id, $request_options);
    }

    public function testUpdateSuccess()
    {
        $client = new PreApprovalPlanClient();
        $created_plan = $client->create($this->createRequest());
        $plan = $client->update($created_plan->id, $this->updateRequest());
        $this->assertEquals("reason", $plan->reason);
    }

    public function testUpdateWithRequestOptionsFailure()
    {
        $this->expectException(MPApiException::class);
        $client = new PreApprovalPlanClient();
        $created_plan = $client->create($this->createRequest());
        $request_options = new RequestOptions();
        $request_options->setAccessToken("invalid_access_token");
        $client->update($created_plan->id, $this->updateRequest(), $request_options);
    }

    public function testSearchSuccess()
    {
        $client = new PreApprovalPlanClient();

        $request = $this->createRequest();
        $client->create($request);

        sleep(3);
        $search_request = new MPSearchRequest(1, 0, ["back_url" => "https://www.yoursite.com"]);
        $search_result = $client->search($search_request);
        $this->assertEquals(1, $search_result->paging->limit);
        $this->assertEquals(1, count($search_result->results));
        $this->assertNotNull($search_result->results[0]->id);
    }

    public function testSearchWithRequestOptionsFailure()
    {
        $this->expectException(MPApiException::class);
        $client = new PreApprovalPlanClient();
        $created_preapproval = $client->create($this->createRequest());
        $search_request = new MPSearchRequest(1, 0, ["id" => $created_preapproval->id]);
        $request_options = new RequestOptions();
        $request_options->setAccessToken("invalid_access_token");
        $client->search($search_request, $request_options);
    }

    private function createRequest(): array
    {
        $request = [
            "reason" => "Reason for the plan.",
            "auto_recurring" => array(
                "frequency" => 1,
                "frequency_type" => "months",
                "repetitions" => 12,
                "billing_day" => 10,
                "billing_day_proportional" => true,
                "free_trial" => array(
                    "frequency" => 1,
                    "frequency_type" => "months"
                ),
                "transaction_amount" => 10,
                "currency_id" => "BRL"
            ),
            "back_url" => "https://www.yoursite.com"
        ];
        return $request;
    }

    private function updateRequest(): array
    {
        $request = [
            "reason" => "reason",
        ];
        return $request;
    }
}
