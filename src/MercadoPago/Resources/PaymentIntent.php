<?php

namespace MercadoPago\Resources;

use MercadoPago\Net\MPResource;
use MercadoPago\Serialization\Mapper;

/** PaymentIntent class. */
class PaymentIntent extends MPResource
{
    /** Class mapper. */
    use Mapper;

    /** Additional info of the payment intent.*/
    public $additional_info;

    /** Amount of the payment intent.*/
    public $amount;

    /** Description of the payment intent.*/
    public $description;

    /** Device id for the payment intent.*/
    public $device_id;

    /** ID of the payment intent.*/
    public $id;

    /** Payment intent details.*/
    public $payment;

    /** Payment intent mode.*/
    public $payment_mode;

    /** State of the payment intent.*/
    public $state;

    public $map = [
        "additional_info" => "MercadoPago\Resources\Point\PaymentIntentAdditionalInfo",
        "payment" => "MercadoPago\Resources\Point\PaymentIntentPayment",
    ];

    /**
     * Method responsible for getting map of entities.
     */
    public function getMap(): array
    {
        return $this->map;
    }
}
