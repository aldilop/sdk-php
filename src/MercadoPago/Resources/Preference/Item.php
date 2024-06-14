<?php

namespace MercadoPago\Resources\Preference;

/** Item class. */
class Item
{
    /** Item code. */
    public $id;

    /** Item name. */
    public $title;

    /** Long item description. */
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
