<?php

namespace MercadoPago\Resources\User;

/** Company class. */
class Company
{
    /** The brand name of the company. */
    public $brand_name;

    /** The city tax ID of the company. */
    public $city_tax_id;

    /** The corporate name of the company. */
    public $corporate_name;

    /** The identification of the company. */
    public $identification;

    /** The state tax ID of the company. */
    public $state_tax_id;

    /** The customer type ID of the company (e.g., "CO"). */
    public $cust_type_id;

    /** The soft descriptor of the company. */
    public $soft_descriptor;
}
