<?php

namespace MercadoPago\Resources\MerchantOrder;

class Item
{
    /** Item code. */
    public $id;

    /** Item name. */
    public $title;

    /** Item description. */
    public $description;

    /** Image URL. */
    public $picture_url;

    /** Category of the item. */
    public $category_id;

    /** Item's quantity. */
    public $quantity;

    /** Unit price. */
    public $unit_price;

    /** Currency ID. ISO_4217 code. */
    public $currency_id;
}
