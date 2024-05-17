<?php

namespace MercadoPago\Resources;

use MercadoPago\Net\MPResource;

/** OAuth class. */
class OAuth extends MPResource
{
    /** Access token. */
    public $access_token;

    /** Token type. */
    public $token_type;

    /** Expires in. */
    public $expires_in;

    /** Scope. */
    public $scope;

    /** User ID. */
    public $user_id;

    /** Refresh token. */
    public $refresh_token;

    /** Public key. */
    public $public_key;

    /** Live mode. */
    public $live_mode;
}
