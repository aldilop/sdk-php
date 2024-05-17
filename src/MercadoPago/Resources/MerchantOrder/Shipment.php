<?php

namespace MercadoPago\Resources\MerchantOrder;

use MercadoPago\Serialization\Mapper;

class Shipment
{
    /** Class mapper. */
    use Mapper;

    /** Shipping ID. */
    public $id;

    /** Shipping type. */
    public $shipping_type;

    /** Shipping mode. */
    public $shipping_mode;

    /** Shipping picking type. */
    public $picking_type;

    /** Shipping status. */
    public $status;

    /** Shipping sub status. */
    public $shipping_substatus;

    /** Shipping items. */
    public $items;

    /** Date of creation. */
    public $date_created;

    /** Last modified date. */
    public $last_modified;

    /** First printed date. */
    public $date_first_printed;

    /** Shipping service ID. */
    public $service_id;

    /** Sender ID. */
    public $sender_id;

    /** Receiver ID. */
    public $receiver_id;

    /** Shipping address. */
    public $receiver_address;

    /** Shipping options. */
    public $shipping_option;

    private $map = [
      "receiver_address" => "MercadoPago\Resources\MerchantOrder\ReceiverAddress",
      "shipping_option" => "MercadoPago\Resources\MerchantOrder\ShippingOption",
    ];

    /**
     * Method responsible for getting map of entities.
     */
    public function getMap(): array
    {
        return $this->map;
    }
}
