<?php

namespace MercadoPago\Resources\MerchantOrder;

use MercadoPago\Serialization\Mapper;

class ReceiverAddress
{
    /** Class mapper. */
    use Mapper;

    /** Receiver address ID. */
    public $id;

    /** Street name and number of receiver address. */
    public $address_line;

    /** Apartment. */
    public $apartment;

    /** City information. */
    public $city;

    /** State information. */
    public $state;

    /** Country information. */
    public $country;

    /** Comment about receiver address. */
    public $comment;

    /** Contact information. */
    public $contact;

    /** Postal code. */
    public $zip_code;

    /** Street name. */
    public $street_name;

    /** Street number. */
    public $street_number;

    /** Floor. */
    public $floor;

    /** Phone. */
    public $phone;

    /** Latitude. */
    public $latitude;

    /** Longitude. */
    public $longitude;

    private $map = [
      "city" => "MercadoPago\Resources\MerchantOrder\ReceiverAddressCity",
      "state" => "MercadoPago\Resources\MerchantOrder\ReceiverAddressState",
      "country" => "MercadoPago\Resources\MerchantOrder\ReceiverAddressCountry",
    ];

    /**
     * Method responsible for getting map of entities.
     */
    public function getMap(): array
    {
        return $this->map;
    }
}
