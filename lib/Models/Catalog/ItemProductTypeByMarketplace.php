<?php


namespace AdolphYu\AmazonSellingPartnerAPI\Models\Catalog;

use AdolphYu\AmazonSellingPartnerAPI\Models\Common\BaseInfo;


class ItemProductTypeByMarketplace extends BaseInfo
{

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'ItemProductTypeByMarketplace';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'marketplace_id' => 'string',
        'productType' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'marketplace_id' => null,
        'productType' => null,
    ];


    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'marketplace_id' => 'marketplaceId',
        'productType' => 'productType',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'marketplace_id' => 'setMarketplaceId',
        'productType' => 'setProductType',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'marketplace_id' => 'getMarketplaceId',
        'productType' => 'getProductType',
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

    /**
     * Gets ProductType.
     *
     * @return string
     */
    public function getProductType()
    {
        return $this->container['productType'] ?? null;
    }

    /**
     * Sets ProductType.
     *
     * @param string $color the color variation of the item
     *
     * @return $this
     */
    public function setProductType($productType)
    {
        $this->container['productType'] = $productType;

        return $this;
    }
}
