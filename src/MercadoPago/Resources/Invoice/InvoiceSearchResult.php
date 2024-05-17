<?php

namespace MercadoPago\Resources\Invoice;

use MercadoPago\Serialization\Mapper;

/** InvoiceSearchResult class. */
class InvoiceSearchResult
{
    /** Class mapper. */
    use Mapper;

    /** The ID of the invoice. */
    public $id;

    /** The type of invoice. */
    public $type;

    /** The date and time when the invoice was created. */
    public $date_created;

    /** The date and time when the invoice was last modified. */
    public $last_modified;

    /** The preapproval ID associated with the invoice. */
    public $preapproval_id;

    /** The reason for the invoice. */
    public $reason;

    /** The external reference for the invoice. */
    public $external_reference;

    /** The currency ID. */
    public $currency_id;

    /** The transaction amount. */
    public $transaction_amount;

    /** The debit date and time for the invoice. */
    public $debit_date;

    /** The retry attempt count. */
    public $retry_attempt;

    /** Status of the invoice. */
    public $status;

    /** Summarized. */
    public $summarized;

    /** Payment info. */
    public $payment;

    public $map = [
        "payment" => "MercadoPago\Resources\Invoice\Payment",
    ];

    /**
     * Method responsible for getting map of entities.
     */
    public function getMap(): array
    {
        return $this->map;
    }
}
