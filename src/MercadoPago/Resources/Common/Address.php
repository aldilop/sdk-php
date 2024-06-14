<?php

namespace MercadoPago\Resources\Common;

use MercadoPago\Serialization\Mapper;

/** Address class. */
class Address
{
    /** Class mapper. */
    use Mapper;

    /** Addess ID. */
    public $id;

    /** Zip code. */
    public $zip_code;

    /** Street name. */
    public $street_name;

    /** Street number. */
    public $street_number;

    /** City. */
    public $city;

    private $map = [
        "city" => "MercadoPago\Resources\Common\City"
    ];

    /**
     * Method responsible for getting map of entities.
     */
    public function getMap(): array
    {
        return $this->map;
    }
}
