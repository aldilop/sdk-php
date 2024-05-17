<?php

namespace MercadoPago\Resources\User;

/** Address class. */
class Address
{
    /** The user's address. */
    public $address;

    /** The city where the user is located. */
    public $city;

    /** The state code where the user is located (e.g., "BR-SP" for São Paulo, Brazil). */
    public $state;

    /** The ZIP code of the user's location. */
    public $zip_code;
}
