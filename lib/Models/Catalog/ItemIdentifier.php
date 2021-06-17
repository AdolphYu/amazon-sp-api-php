<?php

namespace AdolphYu\AmazonSellingPartnerAPI\Models\Catalog;

use AdolphYu\AmazonSellingPartnerAPI\Models\Common\BaseInfo;


/**
 * RelationshipType Class Doc Comment.
 *
 * @description Specific variations of the item.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class ItemIdentifier extends BaseInfo
{


    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'ItemIdentifier';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'identifier_type' => 'string',
        'identifier' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'identifier_type' => null,
        'identifier' => null,
        ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'identifier_type' => 'identifierType',
        'identifier' => 'identifier',
        ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'identifier_type' => 'setIdentifierType',
        'identifier' => 'setIdentifier',
        ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'identifier_type' => 'getIdentifierType',
        'identifier' => 'getIdentifier',
        ];


    /**
     * Gets identifier_type.
     *
     * @return string
     */
    public function getIdentifierType()
    {
        return $this->container['identifier_type'] ?? null;
    }

    /**
     * Sets identifier_type.
     *
     * @param string $color the color variation of the item
     *
     * @return $this
     */
    public function setIdentifierType($identifier_type)
    {
        $this->container['identifier_type'] = $identifier_type;

        return $this;
    }

    /**
     * Gets identifier_type.
     *
     * @return string
     */
    public function getIdentifier()
    {
        return $this->container['identifier'] ?? null;
    }

    /**
     * Sets identifier_type.
     *
     * @param string $color the color variation of the item
     *
     * @return $this
     */
    public function setIdentifier($identifier)
    {
        $this->container['identifier'] = $identifier;

        return $this;
    }


}
