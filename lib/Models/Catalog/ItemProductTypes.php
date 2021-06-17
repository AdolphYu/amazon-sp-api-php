<?php

namespace AdolphYu\AmazonSellingPartnerAPI\Models\Catalog;

use AdolphYu\AmazonSellingPartnerAPI\Models\Common\BaseList;

class ItemProductTypes extends BaseList
{

    protected static $swaggerModelName = 'ItemProductTypes';

    public function getSubClass()
    {
        return ItemProductTypeByMarketplace::class;
    }
}
