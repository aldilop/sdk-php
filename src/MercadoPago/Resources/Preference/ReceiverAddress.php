<?php

namespace MercadoPago\Resources\Preference;

use MercadoPago\Resources\Common\Address;

/** ReceiverAddress class. */
class ReceiverAddress extends Address
{
    /** Country. */
    public $country_name;

    /** State. */
    public $state_name;

    /** Floor. */
    public $floor;

    /** Apartment. */
    public $apartment;

    /** City name. */
    public $city_name;
}
