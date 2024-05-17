<?php

namespace MercadoPago\Resources;

use MercadoPago\Net\MPResource;
use MercadoPago\Serialization\Mapper;

/** Payment Refund class. */
class PaymentRefund extends MPResource
{
    /** Class mapper. */
    use Mapper;

    /** Refund ID. */
    public $id;

    /** ID of the refunded payment. */
    public $payment_id;

    /** Amount refunded. */
    public $amount;

    /** Adjustment amount. */
    public $adjustment_amount;

    /** Refund status. */
    public $status;

    /** Refund mode. */
    public $refund_mode;

    /** Date of creation. */
    public $date_created;

    /** Refund reason. */
    public $reason;

    /** Unique sequence number. */
    public $unique_sequence_number;

    /** Source of the refund. */
    public $source;

    /** Amount refunded to the payer. */
    public $amount_refunded_to_payer;

    /** Partition details. */
    public $partition_details;

    /** Labels. */
    public $labels;

    /** Additional data. */
    public $additional_data;

    /** Expiration date. */
    public $expiration_date;

    public $map = [
        "source" => "MercadoPago\Resources\Common\Source"
    ];

    /**
     * Method responsible for getting map of entities.
     */
    public function getMap(): array
    {
        return $this->map;
    }
}
