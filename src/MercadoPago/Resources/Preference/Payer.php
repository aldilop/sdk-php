<?php

namespace MercadoPago\Resources\Preference;

use MercadoPago\Serialization\Mapper;

/** Payer class. */
class Payer
{
    /** Class mapper. */
    use Mapper;

    /** Payer's name. */
    public $name;

    /** Payer's surname. */
    public $surname;

    /** Payer's email. */
    public $email;

    /** Payer's phone. */
    public $phone;

    /** Payer's identification. */
    public $identification;

    /** Payer's address. */
    public $address;

    /** Date of creation of the payer user. */
    public $date_created;

    /** Date of the last purchase. */
    public $last_purchase;

    private $map = [
        "identification" => "MercadoPago\Resources\Common\Identification",
        "phone" => "MercadoPago\Resources\Common\Phone",
        "address" => "MercadoPago\Resources\Common\Address",
    ];

    /**
     * Method responsible for getting map of entities.
     */
    public function getMap(): array
    {
        return $this->map;
    }
}
