<?php

namespace MercadoPago\Resources\User;

use MercadoPago\Serialization\Mapper;

/** BuyerReputation class. */
class BuyerReputation
{
    /** Class mapper. */
    use Mapper;

    /** The number of canceled transactions. */
    public $canceled_transactions;

    /** User tags associated with the buyer reputation. */
    public $tags;

    /** User transaction metrics and statistics. */
    public $transactions;

    public $map = [
        "transactions" => "MercadoPago\Resources\User\BuyerReputationTransactions",
    ];

    /**
     * Method responsible for getting map of entities.
     */
    public function getMap(): array
    {
        return $this->map;
    }
}
