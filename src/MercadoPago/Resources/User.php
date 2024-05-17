<?php

namespace MercadoPago\Resources;

use MercadoPago\Net\MPResource;
use MercadoPago\Serialization\Mapper;

/** User class. */
class User extends MPResource
{
    /** Class mapper. */
    use Mapper;

    /** The user's ID. */
    public $id;

    /** The user's nickname. */
    public $nickname;

    /** The registration date and time. */
    public $registration_date;

    /** The user's first name. */
    public $first_name;

    /** The user's last name. */
    public $last_name;

    /** The user's gender. */
    public $gender;

    /** The country ID (e.g., "BR" for Brazil). */
    public $country_id;

    /** The user's email. */
    public $email;

    /** User identification data. */
    public $identification;

    /** User address data. */
    public $address;

    /** User phone data. */
    public $phone;

    /** User alternative phone data. */
    public $alternative_phone;

    /** The user type (e.g., "normal"). */
    public $user_type;

    /** User tags. */
    public $tags;

    /** User logo. */
    public $logo;

    /** User points. */
    public $points;

    /** The site ID (e.g., "MLB" for MercadoLibre Brazil). */
    public $site_id;

    /** User permalink. */
    public $permalink;

    /** Seller experience (e.g., "NEWBIE"). */
    public $seller_experience;

    /** User bill data. */
    public $bill_data;

    /** User seller reputation data. */
    public $seller_reputation;

    /** User buyer reputation data. */
    public $buyer_reputation;

    /** User status data. */
    public $status;

    /** Secure email. */
    public $secure_email;

    /** User company data. */
    public $company;

    /** User credit data. */
    public $credit;

    /** User context data. */
    public $context;

    /** User registration identifiers. */
    public $registration_identifiers;

    public $map = [
        "identification" => "MercadoPago\Resources\Common\Identification",
        "address" => "MercadoPago\Resources\User\Address",
        "phone" => "MercadoPago\Resources\User\Phone",
        "alternative_phone" => "MercadoPago\Resources\User\AlternativePhone",
        "bill_data" => "MercadoPago\Resources\User\BillData",
        "seller_reputation" => "MercadoPago\Resources\User\SellerReputation",
        "buyer_reputation" => "MercadoPago\Resources\User\BuyerReputation",
        "status" => "MercadoPago\Resources\User\Status",
        "company" => "MercadoPago\Resources\User\Company",
        "credit" => "MercadoPago\Resources\User\Credit",
        "context" => "MercadoPago\Resources\User\StaContextus",
    ];

    /**
     * Method responsible for getting map of entities.
     */
    public function getMap(): array
    {
        return $this->map;
    }
}
