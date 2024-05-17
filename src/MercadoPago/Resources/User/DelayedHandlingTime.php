<?php

namespace MercadoPago\Resources\User;

/** DelayedHandlingTime class. */
class DelayedHandlingTime
{
    /** The delayed handling time period (e.g., "365 days"). */
    public $period;

    /** The delayed handling time rate (percentage). */
    public $rate;

    /** The delayed handling time value. */
    public $value;
}
