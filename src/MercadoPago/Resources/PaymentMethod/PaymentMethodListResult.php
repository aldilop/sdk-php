<?php

namespace MercadoPago\Resources\PaymentMethod;

use MercadoPago\Serialization\Mapper;

/** PaymentMethodListResult class. */
class PaymentMethodListResult
{
    /** Class mapper. */
    use Mapper;

    /** Payment method ID. */
    public $id;

    /** Payment method name. */
    public $name;

    /** Payment method payment type ID. */
    public $payment_type_id;

    /** Payment method status. */
    public $status;

    /** Payment method secure thumbnail. */
    public $secure_thumbnail;

    /** Payment method thumbnail. */
    public $thumbnail;

    /** Payment method deferred capture. */
    public $deferred_capture;

    /** Payment method settings. */
    public $settings;

    /** Payment method min allowed amount. */
    public $min_allowed_amount;

    /** Payment method max allowed amount. */
    public $max_allowed_amount;

    /** Payment method accreditation time. */
    public $accreditation_time;

    /** Payment method financial institutions. */
    public $financial_institutions;

    /** Payment method processing modes. */
    public $processing_modes;

    /** Payment method additional info needed. */
    public $additional_info_needed;

    private $map = [
        "settings" => "MercadoPago\Resources\PaymentMethod\Settings",
        "financial_institutions" => "MercadoPago\Resources\PaymentMethod\FinancialInstitutions",
    ];

    /**
     * Method responsible for getting map of entities.
     */
    public function getMap(): array
    {
        return $this->map;
    }
}
