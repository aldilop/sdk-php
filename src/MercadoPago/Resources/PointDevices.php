<?php

namespace MercadoPago\Resources;

use MercadoPago\Net\MPResource;
use MercadoPago\Serialization\Mapper;

/** PointDevices class. */
class PointDevices extends MPResource
{
    /** Class mapper. */
    use Mapper;

    /** Search paging. */
    public $paging;

    /** Devices. */
    public $devices;

    private $map = [
        "paging" => "MercadoPago\Resources\Common\Paging",
        "devices" => "MercadoPago\Resources\Point\Device",
    ];

    /**
     * Method responsible for getting map of entities.
     */
    public function getMap(): array
    {
        return $this->map;
    }
}
