<?php

namespace MercadoPago\Client\Point;

/** PointPaymentIntentListRequest class. */
class PointPaymentIntentListRequest
{
    /** Start date. */
    public $start_date;

    /** End date. */
    public $end_date;

    public function getParameters(): array
    {
        return [
            "startDate" => $this->start_date,
            "endDate" => $this->end_date,
        ];
    }
}
