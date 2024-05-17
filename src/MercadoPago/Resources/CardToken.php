<?php

namespace MercadoPago\Resources;

use MercadoPago\Net\MPResource;
use MercadoPago\Serialization\Mapper;

/** Card Token class. */
class CardToken extends MPResource
{
    /** Class mapper. */
    use Mapper;

    /** Id of the card. */
    public $id;

    /** Last four digits of card number. */
    public $last_four_digits;

    /** First six digit of card number. */
    public $first_six_digits;

    /** Card expiration year. */
    public $expiration_year;

    /** Card expiration month. */
    public $expiration_month;

    /** Creation date of card. */
    public $date_created;

    /** Last update of data from the card. */
    public $date_last_updated;

    /** Card's owner data. */
    public $cardholder;

    /** Card ID. */
    public $card_id;

    /** Current status of card. E.g. active. */
    public $status;

    /** Date token expires. */
    public $date_due;

    /** Flag indicating if Luhn validation is used. */
    public $luhn_validation;

    /** Flag indicating if this is a production card token. */
    public $live_mode;

    /** Require esc. */
    public $require_esc;

    /** Security code of the card. */
    public $card_number_length;

    /** Security code of the card. */
    public $security_code_length;


    private $map = [
        "cardholder" => "MercadoPago\Resources\Payment\Cardholder"
    ];

    /**
     * Method responsible for getting map of entities.
     */
    public function getMap(): array
    {
        return $this->map;
    }
}
