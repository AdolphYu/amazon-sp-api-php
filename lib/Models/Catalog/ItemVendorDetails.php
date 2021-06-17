<?php

namespace AdolphYu\AmazonSellingPartnerAPI\Models\Catalog;

use AdolphYu\AmazonSellingPartnerAPI\Models\Common\BaseList;




class ItemVendorDetails extends BaseList
{

    protected static $swaggerModelName = 'ItemVendorDetails';

    public function getSubClass()
    {
        return ItemVendorDetailsByMarketplace::class;
    }
}
