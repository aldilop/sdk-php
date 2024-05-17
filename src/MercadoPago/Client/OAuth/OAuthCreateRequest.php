<?php

namespace MercadoPago\Client\OAuth;

/** OAuthCreateRequest class. */
class OAuthCreateRequest
{
    /** Client secret. */
    public $client_secret;

    /** Client ID. */
    public $client_id;

    /** Grant type. */
    public $grant_type = "authorization_code";

    /** Code. */
    public $code;

    /** Redirect URI. */
    public $redirect_uri;
}
