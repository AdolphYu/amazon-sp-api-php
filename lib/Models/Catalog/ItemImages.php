<?php

namespace AdolphYu\AmazonSellingPartnerAPI\Models\Catalog;

use AdolphYu\AmazonSellingPartnerAPI\Models\Common\BaseList;




class ItemImages extends BaseList
{

    protected static $swaggerModelName = 'ItemImages';

    public function getSubClass()
    {
        return ItemImagesByMarketplace::class;
    }
}
