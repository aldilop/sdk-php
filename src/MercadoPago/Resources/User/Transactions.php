<?php

namespace MercadoPago\Resources\User;

use MercadoPago\Serialization\Mapper;

/** Transactions class. */
class Transactions
{
    /** Class mapper. */
    use Mapper;

    /** The number of canceled transactions. */
    public $canceled;

    /** The number of completed transactions. */
    public $completed;

    /** The transaction period (e.g., "historic"). */
    public $period;

    /** User ratings and feedback statistics. */
    public $ratings;

    /** The total number of transactions. */
    public $total;

    public $map = [
        "ratings" => "MercadoPago\Resources\User\Ratings",
    ];

    /**
     * Method responsible for getting map of entities.
     */
    public function getMap(): array
    {
        return $this->map;
    }
}
