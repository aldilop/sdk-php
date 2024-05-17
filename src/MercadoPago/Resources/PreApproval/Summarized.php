<?php

namespace MercadoPago\Resources\PreApproval;

/** Summarized class. */
class Summarized
{
    /** The number of quotas (or installments). */
    public $quotas;

    /** The quantity that has been charged. */
    public $charged_quantity;

    /** The quantity that is pending charge. */
    public $pending_charge_quantity;

    /** The amount that has been charged. */
    public $charged_amount;

    /** The amount that is pending charge. */
    public $pending_charge_amount;

    /** The date of the last charge. */
    public $last_charged_date;

    /** The amount of the last charge. */
    public $last_charged_amount;

    /** The semaphore status. */
    public $semaphore;
}
