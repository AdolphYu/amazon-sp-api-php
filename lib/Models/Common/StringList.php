<?php
namespace AdolphYu\AmazonSellingPartnerAPI\Models\Common;
use AdolphYu\AmazonSellingPartnerAPI\Models\Catalog\BrandRefinement;


class StringList extends BaseList
{
    protected static $swaggerModelName = 'StringList';

    public function getSubClass()
    {
        return 'string';
    }
}
