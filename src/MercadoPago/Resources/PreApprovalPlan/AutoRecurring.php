<?php

namespace MercadoPago\Resources\PreApprovalPlan;

use MercadoPago\Serialization\Mapper;

/** AutoRecurring class. */
class AutoRecurring
{
    /** Class mapper. */
    use Mapper;

    /** Frequency. */
    public $frequency;

    /** Frequency type. */
    public $frequency_type;

    /** Transaction amount. */
    public $transaction_amount;

    /** Currency ID. */
    public $currency_id;

    /** Number of repetitions. */
    public $repetitions;

    /** Free trial details. */
    public $free_trial;

    /** Billing day. */
    public $billing_day;

    /** Billing day proportional. */
    public $billing_day_proportional;

    /** Transaction amount proportional. */
    public $transaction_amount_proportional;

    public $map = [
        "free_trial" => "MercadoPago\Resources\PreApprovalPlan\FreeTrial",
    ];

    /**
     * Method responsible for getting map of entities.
     */
    public function getMap(): array
    {
        return $this->map;
    }
}
