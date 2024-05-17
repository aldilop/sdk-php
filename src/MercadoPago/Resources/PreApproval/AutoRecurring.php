<?php

namespace MercadoPago\Resources\PreApproval;

/** AutoRecurring class. */
class AutoRecurring
{
    /** Currency ID. */
    public $currency_id;

    /** Recurring amount. */
    public $transaction_amount;

    /** Recurring frequency. */
    public $frequency;

    /** Recurring frequency type (days or months). */
    public $frequency_type;

    /** Recurring start date. */
    public $start_date;

    /** Recurring end date. */
    public $end_date;

    /** Indicates whether billing is proportional. */
    public $billing_day_proportional;

    /** Indicates whether there is a specific billing day. */
    public $has_billing_day;

    /** Free trial. */
    public $free_trial;
}
