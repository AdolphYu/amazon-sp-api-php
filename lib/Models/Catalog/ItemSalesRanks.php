<?php

namespace AdolphYu\AmazonSellingPartnerAPI\Models\Catalog;

use AdolphYu\AmazonSellingPartnerAPI\Models\Common\BaseList;




class ItemSalesRanks extends BaseList
{

    protected static $swaggerModelName = 'ItemSalesRanks';

    public function getSubClass()
    {
        return ItemSalesRanksByMarketplace::class;
    }
}
