<?php

namespace AdolphYu\AmazonSellingPartnerAPI\Models\Catalog;

use AdolphYu\AmazonSellingPartnerAPI\Models\Common\BaseList;



class ItemSalesRankList extends BaseList
{
    protected static $swaggerModelName = 'ItemSalesRankList';

    public function getSubClass()
    {
        return ItemSalesRank::class;
    }
}
