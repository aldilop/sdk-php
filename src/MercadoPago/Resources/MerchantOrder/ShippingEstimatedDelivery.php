<?php

namespace MercadoPago\Resources\MerchantOrder;

class ShippingEstimatedDelivery
{
    /** Estimated delivery date. */
    public $date;

    /** Estimated lower delivery time. */
    public $time_from;

    /** Estimated upper delivery time. */
    public $time_to;
}
