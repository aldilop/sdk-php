<?php

namespace MercadoPago\Resources\User;

use MercadoPago\Serialization\Mapper;

/** Metrics class. */
class Metrics
{
    /** Class mapper. */
    use Mapper;

    /** User sales metrics for a specific period. */
    public $sales;

    /** User claims metrics for a specific period. */
    public $claims;

    /** User delayed handling time metrics for a specific period. */
    public $delayed_handling_time;

    /** User cancellations metrics for a specific period. */
    public $cancellations;

    public $map = [
        "sales" => "MercadoPago\Resources\User\Sales",
        "claims" => "MercadoPago\Resources\User\Claims",
        "delayed_handling_time" => "MercadoPago\Resources\User\DelayedHandlingTime",
        "cancellations" => "MercadoPago\Resources\User\Cancellations",
    ];

    /**
     * Method responsible for getting map of entities.
     */
    public function getMap(): array
    {
        return $this->map;
    }
}
