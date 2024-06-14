<?php

namespace MercadoPago\Resources\PreApproval;

use MercadoPago\Serialization\Mapper;

/** PreApprovalListResult class. */
class PreApprovalListResult
{
    /** Class mapper. */
    use Mapper;

    /** Preapproval ID. */
    public $id;

    /** Payer ID. */
    public $payer_id;

    /** Payer email. */
    public $payer_email;

    /** Return URL. */
    public $back_url;

    /** Seller ID. */
    public $collector_id;

    /** Application ID. */
    public $application_id;

    /** Preapproval status. */
    public $status;

    /** Reason for the subscription. */
    public $reason;

    /** Preapproval reference value. */
    public $external_reference;

    /** Creation date. */
    public $date_created;

    /** Last modified date. */
    public $last_modified;

    /** The subscription's starting point. */
    public $init_point;

    /** The pre-approval plan ID. */
    public $preapproval_plan_id;

    /** The details of auto-recurring. */
    public $auto_recurring;

    /** The summarized subscription details. */
    public $summarized;

    /** The next payment date. */
    public $next_payment_date;

    /** The payment method ID. */
    public $payment_method_id;

    /** The credit card ID. */
    public $card_id;

    /** First invoice offset. */
    public $first_invoice_offset;

    /** Payer first name. */
    public $payer_first_name;

    /** Payer last name. */
    public $payer_last_name;

    public $map = [
        "auto_recurring" => "MercadoPago\Resources\PreApproval\AutoRecurring",
        "summarized" => "MercadoPago\Resources\PreApproval\Summarized",
    ];

    /**
     * Method responsible for getting map of entities.
     */
    public function getMap(): array
    {
        return $this->map;
    }
}
