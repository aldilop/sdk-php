<?php

namespace MercadoPago\Client\OAuth;

/** OAuthRefreshRequest class. */
class OAuthRefreshRequest
{
    /** Client secret. */
    public $client_secret;

    /** Client ID. */
    public $client_id;

    /** Grant type. */
    public $grant_type = "refresh_token";

    /** Refresh token. */
    public $refresh_token;
}
