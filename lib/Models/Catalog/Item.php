<?php
/**
 * Item.
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

use AdolphYu\AmazonSellingPartnerAPI\Models\Common\BaseInfo;
use ArrayAccess;
use AdolphYu\AmazonSellingPartnerAPI\Models\ModelInterface;
use AdolphYu\AmazonSellingPartnerAPI\ObjectSerializer;

/**
 * Item Class Doc Comment.
 *
 * @description An item in the Amazon catalog.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class Item extends BaseInfo
{


    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'Item';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'asin' => 'string',
        'attributes' => 'string',
        'identifiers' => \AdolphYu\AmazonSellingPartnerAPI\Models\Catalog\ItemIdentifiers::class,
        'images' => \AdolphYu\AmazonSellingPartnerAPI\Models\Catalog\ItemImages::class,
        'productTypes' => \AdolphYu\AmazonSellingPartnerAPI\Models\Catalog\ItemProductTypes::class,
        'ranks' => \AdolphYu\AmazonSellingPartnerAPI\Models\Catalog\ItemSalesRanks::class,
        'summaries' => \AdolphYu\AmazonSellingPartnerAPI\Models\Catalog\ItemSummaries::class,
        'variations' => \AdolphYu\AmazonSellingPartnerAPI\Models\Catalog\ItemVariations::class,
        'vendorDetails'=>\AdolphYu\AmazonSellingPartnerAPI\Models\Catalog\ItemVendorDetails::class,
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'asin' => null,
        'attributes' => null,
        'identifiers' => null,
        'images' => null,
        'productTypes' => null,
        'ranks' => null,
        'summaries' => null,
        'variations' => null,
        'vendorDetails' => null,
    ];


    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'asin' => 'asin',
        'attributes' => 'attributes',
        'identifiers' => 'identifiers',
        'images' => 'images',
        'productTypes' => 'productTypes',
        'ranks' => 'ranks',
        'summaries' => 'summaries',
        'variations' => 'variations',
        'vendorDetails' => 'vendorDetails',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'asin' => 'setAsin',
        'attributes' => 'setAttributes',
        'identifiers' => 'setIdentifiers',
        'images' => 'setImages',
        'productTypes' => 'setProductTypes',
        'ranks' => 'setRanks',
        'summaries' => 'setSummaries',
        'variations' => 'setVariations',
        'vendorDetails' => 'setVendorDetails',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'asin' => 'getAsin',
        'attributes' => 'getAttributes',
        'identifiers' => 'getIdentifiers',
        'images' => 'getImages',
        'productTypes' => 'getProductTypes',
        'ranks' => 'getRanks',
        'summaries' => 'getSummaries',
        'variations' => 'getVariations',
        'vendorDetails' => 'getVendorDetails',
    ];

    /**
     * Gets asin.
     *
     * @return string
     */
    public function getAsin()
    {

        return $this->container['asin'] ?? null;
    }

    /**
     * Sets asin.
     *
     * @param string $identifiers
     *
     * @return $this
     */
    public function setAsin($asin)
    {

        $this->container['asin'] = $asin;

        return $this;
    }

    /**
     * Gets attributes.
     *
     * @return string
     */
    public function getAttributes()
    {
        return $this->container['attributes'] ?? null;
    }

    /**
     * Sets attributes.
     *
     * @param ItemIdentifiers $attributes
     *
     * @return $this
     */
    public function setAttributes($attributes)
    {
        $this->container['attributes'] = $attributes;

        return $this;
    }

    /**
     * Gets identifiers.
     *
     * @return ItemIdentifiers
     */
    public function getIdentifiers()
    {
        return $this->container['identifiers'] ?? null;
    }

    /**
     * Sets identifiers.
     *
     * @param string $attributes
     *
     * @return $this
     */
    public function setIdentifiers($identifiers)
    {
        $this->container['identifiers'] = $identifiers;
        return $this;
    }

    public function getImages()
    {
        return $this->container['images'] ?? null;
    }

    public function setImages($images)
    {
        $this->container['images'] = $images;
        return $this;
    }

    public function getProductTypes()
    {
        return $this->container['productTypes'] ?? null;
    }

    public function setProductTypes($productTypes)
    {
        $this->container['productTypes'] = $productTypes;
        return $this;
    }


    public function getRanks()
    {
        return $this->container['ranks'] ?? null;
    }

    public function setRanks($ranks)
    {
        $this->container['ranks'] = $ranks;
        return $this;
    }

    public function getSummaries()
    {
        return $this->container['summaries'] ?? null;
    }

    public function setSummaries($summaries)
    {
        $this->container['summaries'] = $summaries;
        return $this;
    }

    public function getVariations()
    {
        return $this->container['variations'] ?? null;
    }

    public function setVariations($variations)
    {
        $this->container['variations'] = $variations;
        return $this;
    }

    public function getVendorDetails()
    {
        return $this->container['vendorDetails'] ?? null;
    }

    public function setVendorDetails($vendorDetails)
    {
        $this->container['vendorDetails'] = $vendorDetails;
        return $this;
    }

}
