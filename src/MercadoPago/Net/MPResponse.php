<?php

namespace MercadoPago\Net;

/** MPResponse class. */
class MPResponse
{
    private $status_code;
    private $content;

    /**
     * MPResponse constructor.
     * @param int $status_code status code of the response.
     * @param array $content content of the response.
     */
    public function __construct(
        int $status_code,
        array $content
    ) {
        $this->status_code = $status_code;
        $this->content = $content;
    }

    /**
     * Get the status code of the response.
     * @return int status code of the response.
     */
    public function getStatusCode(): int
    {
        return $this->status_code;
    }

    /**
     * Get the content of the response.
     * @return array content of the response.
     */
    public function getContent(): array
    {
        return $this->content;
    }
}
