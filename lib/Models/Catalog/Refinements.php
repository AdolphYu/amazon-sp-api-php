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
class Refinements extends BaseInfo
{


    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'Refinements';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'brands' => \AdolphYu\AmazonSellingPartnerAPI\Models\Catalog\BrandRefinementList::class,
        'classifications' => \AdolphYu\AmazonSellingPartnerAPI\Models\Catalog\ClassificationRefinementList::class,
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'brands' => null,
        'classifications' => null,
    ];


    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'brands' => 'brands',
        'classifications' => 'classifications',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'brands' => 'setBrands',
        'classifications' => 'setClassifications',

    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'brands' => 'getBrands',
        'classifications' => 'getClassifications',
    ];

    /**
     * Gets .
     *
     * @return string
     */
    public function getBrands()
    {

        return $this->container['brands'] ?? null;
    }

    /**
     * Sets .
     *
     * @param string $identifiers
     *
     * @return $this
     */
    public function setBrands($brands)
    {

        $this->container['brands'] = $brands;

        return $this;
    }

    /**
     * Gets .
     *
     * @return string
     */
    public function getClassifications()
    {

        return $this->container['classifications'] ?? null;
    }

    /**
     * Sets .
     *
     * @param string $identifiers
     *
     * @return $this
     */
    public function setClassifications($classifications)
    {

        $this->container['classifications'] = $classifications;

        return $this;
    }
    



}
