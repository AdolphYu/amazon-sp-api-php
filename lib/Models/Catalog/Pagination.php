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
class Pagination extends BaseInfo
{


    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'Pagination';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'nextToken' => 'string',
        'previousToken' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'nextToken' => null,
        'previousToken' => null,
    ];


    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'nextToken' => 'nextToken',
        'previousToken' => 'previousToken',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'nextToken' => 'setNextToken',
        'previousToken' => 'setPreviousToken',

    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'nextToken' => 'getNextToken',
        'previousToken' => 'getPreviousToken',

    ];

    /**
     * Gets .
     *
     * @return string
     */
    public function getNextToken()
    {

        return $this->container['nextToken'] ?? null;
    }

    /**
     * Sets .
     *
     * @param string $identifiers
     *
     * @return $this
     */
    public function setNextToken($nextToken)
    {

        $this->container['nextToken'] = $nextToken;

        return $this;
    }


    /**
     * Gets .
     *
     * @return string
     */
    public function getPreviousToken()
    {

        return $this->container['previousToken'] ?? null;
    }

    /**
     * Sets .
     *
     * @param string $identifiers
     *
     * @return $this
     */
    public function setPreviousToken($previousToken)
    {

        $this->container['previousToken'] = $previousToken;

        return $this;
    }


}
