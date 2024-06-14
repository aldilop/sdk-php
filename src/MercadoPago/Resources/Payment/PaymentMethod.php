<?php

namespace MercadoPago\Resources\Payment;

use MercadoPago\Serialization\Mapper;

/** PaymentMethod class. */
class PaymentMethod
{
    /** Class mapper. */
    use Mapper;

    /** Payment data. */
    public $data;

    /** ID. */
    public $id;

    /** Type. */
    public $type;

    /** Issuer ID. */
    public $issuer_id;

    private $map = [
        "data" => "MercadoPago\Resources\Payment\PaymentMethodData",
    ];

    /**
     * Method responsible for getting map of entities.
     */
    public function getMap(): array
    {
        return $this->map;
    }
}
