<?php

namespace MercadoPago\Resources;

use MercadoPago\Net\MPResource;
use MercadoPago\Serialization\Mapper;

/** PreApprovalPlan class. */
class PreApprovalPlan extends MPResource
{
    /** Class mapper. */
    use Mapper;

    /** Subscription ID. */
    public $id;

    /** Return URL. */
    public $back_url;

    /** Collector ID. */
    public $collector_id;

    /** Application ID. */
    public $application_id;

    /** Reason for the subscription. */
    public $reason;

    /** Subscription status. */
    public $status;

    /** Date of creation. */
    public $date_created;

    /** Date of last modification. */
    public $last_modified;

    /** Initial point. */
    public $init_point;

    /** Auto-recurring subscription details. */
    public $auto_recurring;

    /** Allowed payment methods. */
    public $payment_methods_allowed;


    public $map = [
        "auto_recurring" => "MercadoPago\Resources\PreApprovalPlan\AutoRecurring",
        "payment_methods_allowed" => "MercadoPago\Resources\PreApprovalPlan\PaymentMethodsAllowed",
    ];

    /**
     * Method responsible for getting map of entities.
     */
    public function getMap(): array
    {
        return $this->map;
    }
}
