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
class ClassificationRefinement extends BaseInfo
{


    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'ClassificationRefinement';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'numberOfResults' => 'integer',
        'displayName' => 'string',
        'classificationId' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'numberOfResults' => null,
        'displayName' => null,
        'classificationId' => null,
    ];


    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'numberOfResults' => 'numberOfResults',
        'displayName' => 'displayName',
        'classificationId' => 'classificationId',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'numberOfResults' => 'setNumberOfResults',
        'displayName' => 'setDisplayName',
        'classificationId' => 'setClassificationId',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'numberOfResults' => 'getNumberOfResults',
        'displayName' => 'getDisplayName',
        'classificationId' => 'getClassificationId',
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
     * Gets .
     *
     * @return string
     */
    public function getDisplayName()
    {
        return $this->container['displayName'] ?? null;
    }

    /**
     * Sets .
     *
     * @param string 
     *
     * @return $this
     */
    public function setDisplayName($displayName)
    {
        $this->container['displayName'] = $displayName;

        return $this;
    }

    /**
     * Gets .
     *
     * @return string
     */
    public function getClassificationId()
    {
        return $this->container['classificationId'] ?? null;
    }

    /**
     * Sets .
     *
     * @param string
     *
     * @return $this
     */
    public function setClassificationId($classificationId)
    {
        $this->container['classificationId'] = $classificationId;

        return $this;
    }
    


}
