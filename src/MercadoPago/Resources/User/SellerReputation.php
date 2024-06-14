<?php

namespace MercadoPago\Resources\User;

use MercadoPago\Serialization\Mapper;

/** SellerReputation class. */
class SellerReputation
{
    /** Class mapper. */
    use Mapper;

    /** The seller's level ID (null in this case). */
    public $level_id;

    /** The power seller status (null in this case). */
    public $power_seller_status;

    /** User transaction metrics and statistics. */
    public $transactions;

    /** User transaction metrics. */
    public $metrics;

    public $map = [
        "transactions" => "MercadoPago\Resources\User\Transactions",
        "metrics" => "MercadoPago\Resources\User\Metrics",
    ];

    /**
     * Method responsible for getting map of entities.
     */
    public function getMap(): array
    {
        return $this->map;
    }
}
