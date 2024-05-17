<?php

namespace MercadoPago\Resources\Preference;

use MercadoPago\Serialization\Mapper;

/** PaymentMethods class. */
class PaymentMethods
{
    /** Class mapper. */
    use Mapper;

    /** URL to return when the payment succeed. */
    public $default_payment_method_id;

    /** URL to return when the payment is pending. */
    public $installments;

    /** URL to return when the payment fail. */
    public $default_installments;

    /** Payment methods not allowed in payment process (except account_money). */
    public $excluded_payment_methods;

    /** Payment types not allowed in payment process. */
    public $excluded_payment_types;

    /** Default card ID. */
    public $default_card_id;

    private $map = [
        "excluded_payment_methods" => "MercadoPago\Resources\Preference\PaymentMethod",
        "excluded_payment_types" => "MercadoPago\Resources\Preference\PaymentType",
    ];

    /**
     * Method responsible for getting map of entities.
     */
    public function getMap(): array
    {
        return $this->map;
    }
}
