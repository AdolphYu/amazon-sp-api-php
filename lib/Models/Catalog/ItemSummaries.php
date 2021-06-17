<?php

namespace AdolphYu\AmazonSellingPartnerAPI\Models\Catalog;

use AdolphYu\AmazonSellingPartnerAPI\Models\Common\BaseList;




class ItemSummaries extends BaseList
{

    protected static $swaggerModelName = 'ItemSummaries';

    public function getSubClass()
    {
        return ItemSummaryByMarketplace::class;
    }
}
