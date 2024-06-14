<?php

namespace MercadoPago\Resources\Payment;

use MercadoPago\Serialization\Mapper;

/** PaymentMethod class. */
class PaymentMethodRules
{
    /** Class mapper. */
    use Mapper;

    /** Payment discounts. */
    public $discounts;

    /** Payment fine. */
    public $fine;

    /** Payment interest. */
    public $interest;

    private $map = [
        "discounts" => "MercadoPago\Resources\Payment\PaymentDiscounts",
        "fine" => "MercadoPago\Resources\Payment\PaymentFee",
        "interest" => "MercadoPago\Resources\Payment\PaymentFee",
    ];

    /**
     * Method responsible for getting map of entities.
     */
    public function getMap(): array
    {
        return $this->map;
    }
}
