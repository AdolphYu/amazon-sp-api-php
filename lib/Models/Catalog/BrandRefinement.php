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
class BrandRefinement extends BaseInfo
{


    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'BrandRefinement';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'numberOfResults' => 'integer',
        'brandName' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'numberOfResults' => null,
        'brandName' => null,
    ];


    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'numberOfResults' => 'numberOfResults',
        'brandName' => 'brandName',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'numberOfResults' => 'setNumberOfResults',
        'brandName' => 'setBrandName',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'numberOfResults' => 'getNumberOfResults',
        'brandName' => 'getBrandName',
    ];


    /**
     * Gets numberOfResults.
     *
     * @return string
     */
    public function getNumberOfResults()
    {
        return $this->container['numberOfResults'] ?? null;
    }

    /**
     * Sets numberOfResults.
     *
     * @param string $color the color variation of the item
     *
     * @return $this
     */
    public function setNumberOfResults($numberOfResults)
    {
        $this->container['numberOfResults'] = $numberOfResults;

        return $this;
    }

    /**
     * Gets brandName_type.
     *
     * @return string
     */
    public function getBrandName()
    {
        return $this->container['brandName'] ?? null;
    }

    /**
     * Sets brandName_type.
     *
     * @param string $color the color variation of the item
     *
     * @return $this
     */
    public function setBrandName($brandName)
    {
        $this->container['brandName'] = $brandName;

        return $this;
    }


}
