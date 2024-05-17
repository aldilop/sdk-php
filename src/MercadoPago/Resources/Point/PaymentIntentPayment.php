<?php

namespace MercadoPago\Resources\Point;

/** PaymentIntentPayment class. */
class PaymentIntentPayment
{
    /** Number of installments for the payment. */
    public $installments;

    /** Cost of installments. */
    public $installments_cost;

    /** Type of the payment. */
    public $type;
}
