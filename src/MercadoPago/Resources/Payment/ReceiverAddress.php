<?php

namespace MercadoPago\Resources\Payment;

use MercadoPago\Resources\Common\Address;

/** ReceiverAddress class. */
class ReceiverAddress extends Address
{
    /** Street name. */
    public $street_name;

    /** Apartment. */
    public $apartment;

    /** City. */
    public $city_name;

    /** Floor. */
    public $floor;
}
