<?php

namespace MercadoPago\Resources\Preference;

use MercadoPago\Serialization\Mapper;

/** Shipments class. */
class Shipments
{
    /** Class mapper. */
    use Mapper;

    /** Shipment mode. */
    public $mode;

    /** The payer have the option to pick up the shipment in your store (mode:me2 only). */
    public $local_pickup;

    /** Dimensions of the shipment in cm x cm x cm, gr (mode:me2 only). */
    public $dimensions;

    /** Select default shipping method in checkout (mode:me2 only). */
    public $default_shipping_method;

    /** Offer a shipping method as free shipping (mode:me2 only). */
    public $free_methods;

    /** Shipment cost (mode:custom only). */
    public $cost;

    /** Free shipping for mode:custom. */
    public $free_shipping;

    /** Shipping address. */
    public $receiver_address;

    /** If use express shipment. */
    public $express_shipment;

    public $map = [
      "free_methods" => "MercadoPago\Resources\Preference\FreeMethod",
      "receiver_address" => "MercadoPago\Resources\Preference\ReceiverAddress",
    ];

    /**
     * Method responsible for getting map of entities.
     */
    public function getMap(): array
    {
        return $this->map;
    }
}
