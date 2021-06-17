<?php

namespace AdolphYu\AmazonSellingPartnerAPI\Models\Catalog;

use AdolphYu\AmazonSellingPartnerAPI\Models\Common\BaseList;




class ItemVariations extends BaseList
{

    protected static $swaggerModelName = 'ItemVariations';

    public function getSubClass()
    {
        return ItemVariationsByMarketplace::class;
    }
}
