<?php

namespace MercadoPago\Resources\Customer;

use MercadoPago\Serialization\Mapper;

/** Customer class. */
class CustomerSearchResult
{
    /** Class mapper. */
    use Mapper;

    /** Id of the customer. */
    public $id;

    /** Email of the customer. */
    public $email;

    /** First name of the customer. */
    public $first_name;

    /** Last name of the customer. */
    public $last_name;

    /** Date registered. */
    public $date_registered;

    /** Description. */
    public $description;

    /** Date created. */
    public $date_created;

    /** Date Last_updated. */
    public $date_last_updated;

    /** Default card. */
    public $default_card;

    /** Default address. */
    public $default_address;

    /** Flag indicating if this is a record from production or test environment. */
    public $live_mode;

    /** Id of the user. */
    public $user_id;

    /** Id of the merchant. */
    public $merchant_id;

    /** Id of the client. */
    public $client_id;

    /** Status of the customer. */
    public $status;

    /** List cards of the customer. */
    public $cards;

    /** List addresses of the customer. */
    public $addresses;

    /** Phone of the customer. */
    public $phone;

    /** Identification of the customer. */
    public $identification;

    /** Address of the customer. */
    public $address;

    private $map = [
        "phone" => "MercadoPago\Resources\Common\Phone",
        "identification" => "MercadoPago\Resources\Common\Identification",
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
