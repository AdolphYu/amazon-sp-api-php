<?php


namespace AdolphYu\AmazonSellingPartnerAPI\Models\Catalog;

use AdolphYu\AmazonSellingPartnerAPI\Models\Common\BaseInfo;


class ItemVariationsByMarketplace extends BaseInfo
{

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'ItemVariationsByMarketplace';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'marketplace_id' => 'string',
        'asins' => 'array',
        'variationType' => 'string',

    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'marketplace_id' => null,
        'asins' => null,
        'variationType' => null,

    ];


    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'marketplace_id' => 'marketplaceId',
        'asins' => 'asins',
        'variationType' => 'variationType',

    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'marketplace_id' => 'setMarketplaceId',
        'asins' => 'setAsins',
        'variationType' => 'setVariationType',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'marketplace_id' => 'getMarketplaceId',
        'asins' => 'getAsins',
        'variationType' => 'getVariationType',

    ];

    /**
     * Gets marketplaceId.
     *
     * @return string
     */
    public function getMarketplaceId()
    {
        return $this->container['marketplace_id'] ?? null;
    }

    /**
     * Sets marketplace_id.
     *
     * @param string $color the color variation of the item
     *
     * @return $this
     */
    public function setMarketplaceId($marketplace_id)
    {
        $this->container['marketplace_id'] = $marketplace_id;

        return $this;
    }

    public function getAsins()
    {
        return $this->container['asins'] ?? null;
    }

    public function setAsins($asins)
    {
        $this->container['asins'] = $asins;
        return $this;
    }

    public function getVariationType()
    {
        return $this->container['variationType'] ?? null;
    }

    public function setVariationType($variationType)
    {
        $this->container['variationType'] = $variationType;
        return $this;
    }



}
