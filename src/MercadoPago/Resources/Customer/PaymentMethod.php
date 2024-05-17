<?php

namespace MercadoPago\Resources\Customer;

/** Payment Method class. */
class PaymentMethod
{
    /** Id of the payment method. */
    public $id;

    /** Name of payment method. */
    public $name;

    /** Type of payment method. */
    public $payment_type_id;

    /** Thumbnail of payment method. */
    public $thumbnail;

    /** Thumbnail of payment method from a secure source. */
    public $secure_thumbnail;
}
