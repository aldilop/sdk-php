<?php

namespace MercadoPago\Resources;

use MercadoPago\Net\MPResource;
use MercadoPago\Serialization\Mapper;

class MerchantOrder extends MPResource
{
    /** Class mapper. */
    use Mapper;

    /** Order ID. */
    public $id;

    /** Payment preference identifier associated to the merchant order. */
    public $preference_id;

    /** Application ID. */
    public $application_id;

    /** Show the current merchant order state. */
    public $status;

    /** Country identifier that merchant order belongs to. */
    public $site_id;

    /** Payer information. */
    public $payer;

    /** Seller information. */
    public $collector;

    /** Sponsor ID. */
    public $sponsor_id;

    /** Amount paid in this order. */
    public $paid_amount;

    /** Amount refunded in this Order. */
    public $refunded_amount;

    /** Shipping fee. */
    public $shipping_cost;

    /** Date of creation. */
    public $date_created;

    /** Last modified date. */
    public $last_updated;

    /** If the Order is expired (true) or not (false). */
    public $cancelled;

    /** Payments information. */
    public $payments;

    /** Items information. */
    public $items;

    /** Shipments information. */
    public $shipments;

    /** URL where you'd like to receive a payment notification. */
    public $notification_url;

    /** Additional information. */
    public $additional_info;

    /** Reference you can synchronize with your payment system. */
    public $external_reference;

    /** Origin of the payment. */
    public $marketplace;

    /** Total amount of the order. */
    public $total_amount;

    /** Current merchant order status given the payments status. */
    public $order_status;

    /** If is test. */
    public $is_test;

    /** Payouts. */
    public $payouts;

    private $map = [
        "payer" => "MercadoPago\Resources\MerchantOrder\Payer",
        "collector" => "MercadoPago\Resources\MerchantOrder\Collector",
        "payments" => "MercadoPago\Resources\MerchantOrder\Payment",
        "items" => "MercadoPago\Resources\MerchantOrder\Item",
        "shipments" => "MercadoPago\Resources\MerchantOrder\Shipment",
    ];

    /**
     * Method responsible for getting map of entities.
     */
    public function getMap(): array
    {
        return $this->map;
    }
}
