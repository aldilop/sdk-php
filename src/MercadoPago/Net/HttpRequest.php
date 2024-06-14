<?php

namespace MercadoPago\Net;

/**
 * Http request interface.
 */
interface HttpRequest
{
    /**
     * Set request options.
     * @param array $value options to be set.
     * @return void
     */
    public function setOptionArray(array $value);

    /**
     * Execute the request.
     * @return bool|string response from the request.
     */
    public function execute();

    /**
     * Get information about the request.
     * @param mixed $name name of the information to be retrieved.
     * @return mixed information retrieved.
     */
    public function getInfo($name);

    /**
     * Close the request.
     * @return void
     */
    public function close();

    /**
     * Return the error from the request.
     * @return string error from the request.
     */
    public function error(): string;
}
