<?php

namespace MercadoPago\Resources;

use MercadoPago\Net\MPResource;

/** PaymentIntentStatus class. */
class PaymentIntentStatus extends MPResource
{
    /** Status of payment intent. */
    public $status;

    /** Date created. */
    public $created_on;
}
