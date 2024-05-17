<?php

namespace MercadoPago\Client\Common;

/** RequestOptions class. */
class RequestOptions
{
    private $access_token;
    private $connection_timeout;
    private $custom_headers;

    /**
     * RequestOptions constructor.
     * @param string|null $access_token access token to be used.
     * @param int|null $connection_timeout connection timeout to be used.
     * @param array|null $custom_headers custom headers to be used.
     */
    public function __construct(
        string $access_token = null,
        int $connection_timeout = null,
        array $custom_headers = null
    ) {
        $this->access_token = $access_token;
        $this->connection_timeout = $connection_timeout;
        $this->custom_headers = $custom_headers;
    }

    /**
     * Get access token.
     * @return string|null access token.
     */
    public function getAccessToken()
    {
        return $this->access_token;
    }

    /**
     * Set access token.
     * @param string $access_token access token to be set.
     * @return void access token.
     */
    public function setAccessToken(string $access_token)
    {
        $this->access_token = $access_token;
    }

    /**
     * Get connection timeout.
     * @return int|null connection timeout.
     */
    public function getConnectionTimeout()
    {
        return $this->connection_timeout;
    }

    /**
     * Set connection timeout.
     * @param int $connection_timeout connection timeout to be set.
     * @return void connection timeout.
     */
    public function setConnectionTimeout(int $connection_timeout)
    {
        $this->connection_timeout = $connection_timeout;
    }

    /**
     * Get custom headers.
     * @return array|null custom headers.
     */
    public function getCustomHeaders()
    {
        return $this->custom_headers;
    }

    /**
     * Set custom headers.
     * @param array $custom_headers custom headers to be set.
     * @return void custom headers.
     */
    public function setCustomHeaders(array $custom_headers)
    {
        $this->custom_headers = $custom_headers;
    }
}
