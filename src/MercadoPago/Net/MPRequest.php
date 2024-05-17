<?php

namespace MercadoPago\Net;

/** MPRequest class. */
class MPRequest
{
    private $uri;
    private $method;
    private $payload;
    private $headers;
    private $connection_timeout;

    /**
     * MPRequest constructor.
     * @param string $uri path to be requested.
     * @param string $method method to be used.
     * @param string $payload payload to be sent.
     * @param array $headers headers to be sent.
     * @param int $connection_timeout connection timeout to be sent.
     */
    public function __construct(
        string $uri,
        string $method,
        string $payload = null,
        array $headers = null,
        int $connection_timeout = null
    ) {
        $this->uri = $uri;
        $this->method = $method;
        $this->payload = $payload;
        $this->headers = $headers;
        $this->connection_timeout = $connection_timeout;
    }

    /**
     * Get method.
     * @return string method.
     */
    public function getMethod(): string
    {
        return $this->method;
    }

    /**
     * Get uri.
     * @return string uri.
     */
    public function getUri(): string
    {
        return $this->uri;
    }

    /**
     * Get headers.
     * @return array headers.
     */
    public function getHeaders()
    {
        return $this->headers;
    }

    /**
     * Get payload.
     * @return string payload.
     */
    public function getPayload()
    {
        return $this->payload;
    }

    /**
     * Get connection timeout.
     * @return int connection timeout.
     */
    public function getConnectionTimeout()
    {
        return $this->connection_timeout;
    }
}
