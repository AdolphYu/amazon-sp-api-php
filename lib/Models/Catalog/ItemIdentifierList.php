<?php

namespace AdolphYu\AmazonSellingPartnerAPI\Models\Catalog;

use AdolphYu\AmazonSellingPartnerAPI\Models\Common\BaseList;


/**
 * ItemIdentifierList Class Doc Comment.
 *

 * @description A list of variation relationship information, if applicable for the item.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class ItemIdentifierList extends BaseList
{
    protected static $swaggerModelName = 'ItemIdentifierList';

    public function getSubClass()
    {
        return ItemIdentifier::class;
    }
}
