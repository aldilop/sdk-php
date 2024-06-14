<?php

namespace MercadoPago\Net;

/** MPResource class. */
class MPResource
{
    private $response;

    public function setResponse(MPResponse $response)
    {
        $this->response = $response;
    }

    public function getResponse(): MPResponse
    {
        return $this->response;
    }
}
