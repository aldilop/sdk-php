<?php

namespace MercadoPago\Resources\User;

use MercadoPago\Serialization\Mapper;

/** Status class. */
class Status
{
    /** Class mapper. */
    use Mapper;

    /** User billing status data. */
    public $billing;

    /** User buy status data. */
    public $buy;

    /** Indicates whether the user's email has been confirmed (true/false). */
    public $confirmed_email;

    /** User shopping cart status data. */
    public $shopping_cart;

    /** Indicates whether immediate payment is enabled (true/false). */
    public $immediate_payment;

    /** User list status data. */
    public $list;

    /** Indicates the MercadoEnvios status. */
    public $mercadoenvios;

    /** Indicates the MercadoPago account type (e.g., "personal"). */
    public $mercadopago_account_type;

    /** Indicates whether MercadoPago credit card is accepted (true/false). */
    public $mercadopago_tc_accepted;

    /** Required action. */
    public $required_action;

    /** User sell status data. */
    public $sell;

    /** Site status (e.g., "active"). */
    public $site_status;

    /** User type. */
    public $user_type;

    public $map = [
        "billing" => "MercadoPago\Resources\User\StatusBilling",
        "buy" => "MercadoPago\Resources\User\StatusList",
        "shopping_cart" => "MercadoPago\Resources\User\StatusShoppingCart",
        "list" => "MercadoPago\Resources\User\StatusList",
        "sell" => "MercadoPago\Resources\User\StatusList",
    ];

    /**
     * Method responsible for getting map of entities.
     */
    public function getMap(): array
    {
        return $this->map;
    }
}
