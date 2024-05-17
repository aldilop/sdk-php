<?php

namespace MercadoPago\Resources\MerchantOrder;

class ShippingOption
{
    /** Shipping option ID. */
    public $id;

    /** Net cost absorbed by the receiver. */
    public $cost;

    /** Currency ID. */
    public $currency_id;

    /** Estimated delivery time information. */
    public $estimated_delivery;

    /** Net cost of the shipping. */
    public $list_cost;

    /** Option name. */
    public $name;

    /** Shipping method ID. */
    public $shipping_method_id;

    /** Shipping time information. */
    public $speed;

    private $map = [
      "estimated_delivery" => "MercadoPago\Resources\MerchantOrder\ShippingEstimatedDelivery",
      "speed" => "MercadoPago\Resources\MerchantOrder\ShippingSpeed",
    ];

    /**
     * Method responsible for getting map of entities.
     */
    public function getMap(): array
    {
        return $this->map;
    }
}
