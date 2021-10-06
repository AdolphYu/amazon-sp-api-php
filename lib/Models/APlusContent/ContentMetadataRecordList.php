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

namespace AdolphYu\AmazonSellingPartnerAPI\Models\APlusContent;

use AdolphYu\AmazonSellingPartnerAPI\Models\Common\BaseList;
use AdolphYu\AmazonSellingPartnerAPI\Models\Common\Error;

class ContentMetadataRecordList extends BaseList
{
    protected static $swaggerModelName = 'ContentMetadataRecordList';

    public function getSubClass()
    {
        return Error::class;
    }
}
