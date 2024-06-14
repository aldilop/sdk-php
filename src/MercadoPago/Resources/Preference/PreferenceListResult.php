<?php

namespace MercadoPago\Resources\Preference;

use MercadoPago\Net\MPResource;

/** PreferePreferenceListResultnce class. */
class PreferenceListResult extends MPResource
{
    /** Preference ID. */
    public $id;

    /** List of items to be paid. */
    public $items;

    /** Client ID. */
    public $client_id;

    /** Reference you can synchronize with your payment system. */
    public $external_reference;

    /** True if a preference expires, false if not. */
    public $expires;

    /** Date when the preference will be active. */
    public $expiration_date_from;

    /** Date when the preference will be expired. */
    public $expiration_date_to;

    /** Collector ID. */
    public $collector_id;

    /** Origin of the payment. Default value: NONE. */
    public $marketplace;

    /** Operation type. */
    public $operation_type;

    /** Configures which processing modes to use. */
    public $processing_modes;

    /** Date of creation. */
    public $date_created;

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

    /** Shipping mode. */
    public $shipping_mode;

    /** Sponsor ID. */
    public $sponsor_id;

    /** Platform ID. */
    public $platform_id;

    /** Payer ID. */
    public $payer_id;

    /** Payer Email. */
    public $payer_email;

    /** Integrator ID. */
    public $integrator_id;

    /** Corporation ID. */
    public $corporation_id;

    /** Concept ID. */
    public $concept_id;
}
