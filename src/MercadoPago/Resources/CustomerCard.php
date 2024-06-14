<?php

namespace MercadoPago\Resources;

use MercadoPago\Net\MPResource;
use MercadoPago\Serialization\Mapper;

/** Customer Card class. */
class CustomerCard extends MPResource
{
    /** Class mapper. */
    use Mapper;

    /** Id of the card. */
    public $id;

    /** Id of the customer. */
    public $customer_id;

    /** Month the card expires. */
    public $expiration_month;

    /** Year the card expires. */
    public $expiration_year;

    /** First six digits of the card. */
    public $first_six_digits;

    /** Last four digits of the card. */
    public $last_four_digits;

    /** Data related to the chosen payment method. */
    public $payment_method;

    /** Security code of the card. */
    public $security_code;

    /** Card issuer. */
    public $issuer;

    /** Data related to the holder of the card, usually the customer. */
    public  $cardholder;

    /** Creation date of the record. */
    public $date_created;

    /** Date the record was last updated. */
    public $date_last_updated;

    /** Id of the user. */
    public $user_id;

    /** Flag indicating if this is a record from production or test environment. */
    public $live_mode;

    /** Card number is. */
    public $card_number_id;

    private $map = [
        "payment_method" => "MercadoPago\Resources\Customer\PaymentMethod",
        "security_code" => "MercadoPago\Resources\Customer\SecurityCode",
        "issuer" => "MercadoPago\Resources\Customer\Issuer",
        "cardholder" => "MercadoPago\Resources\Customer\Cardholder",
    ];

    /**
     * Method responsible for getting map of entities.
     */
    public function getMap(): array
    {
        return $this->map;
    }
}
