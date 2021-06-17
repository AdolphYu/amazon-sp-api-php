<?php

namespace AdolphYu\AmazonSellingPartnerAPI\Models\Catalog;

use AdolphYu\AmazonSellingPartnerAPI\Models\Common\BaseList;



class ItemImageList extends BaseList
{
    protected static $swaggerModelName = 'ItemImageList';

    public function getSubClass()
    {
        return ItemImage::class;
    }
}
