<?php

namespace AdolphYu\AmazonSellingPartnerAPI\Models\Catalog;

use AdolphYu\AmazonSellingPartnerAPI\Models\Common\BaseList;




class ItemIdentifiers extends BaseList
{

    protected static $swaggerModelName = 'ItemIdentifiers';

    public function getSubClass()
    {
        return ItemIdentifiersByMarketplace::class;
    }
}
