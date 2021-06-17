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
class ItemSearchResults extends BaseInfo
{


    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'ItemSearchResults';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'numberOfResults' => 'integer',
        'pagination' => \AdolphYu\AmazonSellingPartnerAPI\Models\Catalog\Pagination::class,
        'refinements' => \AdolphYu\AmazonSellingPartnerAPI\Models\Catalog\Refinements::class,
        'items' => \AdolphYu\AmazonSellingPartnerAPI\Models\Catalog\ItemList::class,
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'numberOfResults' => null,
        'pagination' => null,
        'refinements' => null,
        'items' => null,
    ];


    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'numberOfResults' => 'numberOfResults',
        'pagination' => 'pagination',
        'refinements' => 'refinements',
        'items' => 'items',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'numberOfResults' => 'setNumberOfResults',
        'pagination' => 'setPagination',
        'refinements' => 'setRefinements',
        'items' => 'setItems',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'numberOfResults' => 'getNumberOfResults',
        'pagination' => 'getPagination',
        'refinements' => 'getRefinements',
        'items' => 'getItems',
    ];

    /**
     * Gets .
     *
     * @return string
     */
    public function getNumberOfResults()
    {

        return $this->container['numberOfResults'] ?? null;
    }

    /**
     * Sets .
     *
     * @param string $identifiers
     *
     * @return $this
     */
    public function setNumberOfResults($numberOfResults)
    {

        $this->container['numberOfResults'] = $numberOfResults;

        return $this;
    }

    /**
     * Gets .
     *
     * @return string
     */
    public function getPagination()
    {

        return $this->container['pagination'] ?? null;
    }

    /**
     * Sets .
     *
     * @param string $identifiers
     *
     * @return $this
     */
    public function setPagination($pagination)
    {

        $this->container['pagination'] = $pagination;

        return $this;
    }


    /**
     * Gets .
     *
     * @return string
     */
    public function getRefinements()
    {

        return $this->container['refinements'] ?? null;
    }

    /**
     * Sets .
     *
     * @param string $refinements
     *
     * @return $this
     */
    public function setRefinements($refinements)
    {

        $this->container['refinements'] = $refinements;

        return $this;
    }

    /**
     * Gets .
     *
     * @return string
     */
    public function getItems()
    {

        return $this->container['items'] ?? null;
    }

    /**
     * Sets .
     *
     * @param string $items
     *
     * @return $this
     */
    public function setItems($items)
    {

        $this->container['items'] = $items;

        return $this;
    }


}
