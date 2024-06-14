<?php

namespace MercadoPago\Resources\MerchantOrder;

class Payment
{
    /** Payment ID. */
    public $id;

    /** Product cost. */
    public $transaction_amount;

    /** Total amount paid. */
    public $total_paid_amount;

    /** Shipping fee. */
    public $shipping_cost;

    /** ID of the currency used in payment. */
    public $currency_id;

    /** Payment status. */
    public $status;

    /** @deprecated deprecated since SDK version 3.0.4. */
    public $status_details;

    /** Gives more detailed information on the current state or rejection cause. */
    public $status_detail;

    /** Operation type. */
    public $operation_type;

    /** Approval date. */
    public $date_approved;

    /** Date of creation. */
    public $date_created;

    /** Last modified date. */
    public $last_modified;

    /** Amount refunded in this payment. */
    public $amount_refunded;
}
