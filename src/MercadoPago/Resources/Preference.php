<?php

namespace MercadoPago\Resources;

use MercadoPago\Net\MPResource;
use MercadoPago\Serialization\Mapper;

/** Preference class. */
class Preference extends MPResource
{
    /** Class mapper. */
    use Mapper;

    /** Preference ID. */
    public $id;

    /** List of items to be paid. */
    public $items;

    /** Payer information. */
    public $payer;

    /** Client ID. */
    public $client_id;

    /** Set up payment methods. */
    public $payment_methods;

    /** URLs to return to the sellers website. */
    public $back_urls;

    /** URLs to redirect to the sellers website. */
    public $redirect_urls;

    /** Shipments information. */
    public $shipments;

    /** URL where you'd like to receive a payment notification. */
    public $notification_url;

    /** How the payment will be specified in the card bill. */
    public $statement_descriptor;

    /** Reference you can synchronize with your payment system. */
    public $external_reference;

    /** True if a preference expires, false if not. */
    public $expires;

    /** Expiration date of cash payment. */
    public $date_of_expiration;

    /** Date when the preference will be active. */
    public $expiration_date_from;

    /** Date when the preference will be expired. */
    public $expiration_date_to;

    /** Collector ID. */
    public $collector_id;

    /** Origin of the payment. Default value: NONE. */
    public $marketplace;

    /** Marketplace's fee charged by application owner. */
    public $marketplace_fee;

    /** Additional info. */
    public $additional_info;

    /**
     * If specified, your buyers will be redirected back to your site immediately after completing the
     * purchase.
     */
    public $auto_return;

    /** Operation type. */
    public $operation_type;

    /** Differential pricing configuration for this preference. */
    public $differential_pricing;

    /** Configures which processing modes to use. */
    public $processing_modes;

    /**
     * When set to true, the payment can only be approved or rejected. Otherwise in_process status is
     * added.
     */
    public $binary_mode;

    /** Taxes for preferences. */
    public $taxes;

    /** Tracks to be executed during the users interaction in the Checkout flow. */
    public $tracks;

    /**
     * Data that can be attached to the preference to record additional attributes of the merchant.
     */
    public $metadata;

    /** Checkout URL from preference. */
    public $init_point;

    /** Sandbox checkout URL from preference. */
    public $sandbox_init_point;

    /** Date of creation. */
    public $date_created;

    /** Coupon code. */
    public $coupon_code;

    /** Coupon labels. */
    public $coupon_labels;

    /** internal metadata. */
    public $internal_metadata;

    /** Site ID. */
    public $site_id;

    /** Product ID. */
    public $product_id;

    /** Live mode. */
    public $live_mode;

    /** Last modified. */
    public $last_updated;

    /** Purpose. */
    public $purpose;

    /** Total amount. */
    public $total_amount;

    /** Headers. */
    public $headers;

    /** Created source. */
    public $created_source;

    /** Created by app. */
    public $created_by_app;

    public $map = [
        "items" => "MercadoPago\Resources\Preference\Item",
        "payer" => "MercadoPago\Resources\Preference\Payer",
        "payment_methods" => "MercadoPago\Resources\Preference\PaymentMethods",
        "back_urls" => "MercadoPago\Resources\Preference\BackUrls",
        "redirect_urls" => "MercadoPago\Resources\Preference\RedirectUrls",
        "shipments" => "MercadoPago\Resources\Preference\Shipments",
        "differential_pricing" => "MercadoPago\Resources\Preference\DifferentialPricing",
        "taxes" => "MercadoPago\Resources\Preference\Tax",
        "tracks" => "MercadoPago\Resources\Preference\Tracks",
    ];

    /**
     * Method responsible for getting map of entities.
     */
    public function getMap(): array
    {
        return $this->map;
    }
}
