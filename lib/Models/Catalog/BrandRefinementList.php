<?php
/**
 * ItemList.
 *
 * PHP version 5
 *
 * @author   Stefan Neuhaus / ClouSale
 */

/**
 * Selling Partner API for Catalog Items.
 *
 * The Selling Partner API for Catalog Items helps you programmatically retrieve item details for items in the catalog.
 *
 * OpenAPI spec version: v0
 */

namespace AdolphYu\AmazonSellingPartnerAPI\Models\Catalog;

use AdolphYu\AmazonSellingPartnerAPI\Models\Common\BaseList;

class BrandRefinementList extends BaseList
{
    protected static $swaggerModelName = 'BrandRefinementList';

    public function getSubClass()
    {
        return BrandRefinement::class;
    }
}
