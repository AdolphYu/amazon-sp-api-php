<?php


namespace AdolphYu\AmazonSellingPartnerAPI\Models\Catalog;

use AdolphYu\AmazonSellingPartnerAPI\Models\Common\BaseInfo;


class ItemSummaryByMarketplace extends BaseInfo
{

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'ItemSummaryByMarketplace';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'marketplace_id' => 'string',
        'brandName' => 'string',
        'browseNode' => 'string',
        'colorName' => 'string',
        'itemName' => 'string',
        'manufacturer' => 'string',
        'modelNumber' => 'string',
        'sizeName' => 'string',
        'styleName' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'marketplace_id' => null,
        'brandName' => null,
        'browseNode' => null,
        'colorName' => null,
        'itemName' => null,
        'manufacturer' => null,
        'modelNumber' => null,
        'sizeName' => null,
        'styleName' => null,
    ];


    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'marketplace_id' => 'marketplaceId',
        'brandName' => 'brandName',
        'browseNode' => 'browseNode',
        'colorName' => 'colorName',
        'itemName' => 'itemName',
        'manufacturer' => 'manufacturer',
        'modelNumber' => 'modelNumber',
        'sizeName' => 'sizeName',
        'styleName' => 'styleName',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'marketplace_id' => 'setMarketplaceId',
        'brandName' => 'setBrandName',
        'browseNode' => 'setBrowseNode',
        'colorName' => 'setColorName',
        'itemName' => 'setItemName',
        'manufacturer' => 'setManufacturer',
        'modelNumber' => 'setModelNumber',
        'sizeName' => 'setSizeName',
        'styleName' => 'setStyleName',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'marketplace_id' => 'getMarketplaceId',
        'brandName' => 'getBrandName',
        'browseNode' => 'getBrowseNode',
        'colorName' => 'getColorName',
        'itemName' => 'getItemName',
        'manufacturer' => 'getManufacturer',
        'modelNumber' => 'getModelNumber',
        'sizeName' => 'getSizeName',
        'styleName' => 'getStyleName',
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


    public function getBrandName()
    {
        return $this->container['brandName'] ?? null;
    }


    public function setBrandName($brandName)
    {
        $this->container['brandName'] = $brandName;

        return $this;
    }

    public function getBrowseNode()
    {
        return $this->container['browseNode'] ?? null;
    }


    public function setBrowseNode($browseNode)
    {
        $this->container['browseNode'] = $browseNode;
        return $this;
    }

    public function getColorName()
    {
        return $this->container['colorName'] ?? null;
    }


    public function setColorName($colorName)
    {
        $this->container['colorName'] = $colorName;
        return $this;
    }

    public function getItemName()
    {
        return $this->container['itemName'] ?? null;
    }


    public function setItemName($itemName)
    {
        $this->container['itemName'] = $itemName;
        return $this;
    }

    public function getManufacturer()
    {
        return $this->container['manufacturer'] ?? null;
    }


    public function setManufacturer($manufacturer)
    {
        $this->container['manufacturer'] = $manufacturer;
        return $this;
    }

    public function getModelNumber()
    {
        return $this->container['modelNumber'] ?? null;
    }


    public function setModelNumber($modelNumber)
    {
        $this->container['modelNumber'] = $modelNumber;
        return $this;
    }

    public function getSizeName()
    {
        return $this->container['sizeName'] ?? null;
    }


    public function setSizeName($sizeName)
    {
        $this->container['sizeName'] = $sizeName;
        return $this;
    }

    public function getStyleName()
    {
        return $this->container['styleName'] ?? null;
    }


    public function setStyleName($styleName)
    {
        $this->container['styleName'] = $styleName;
        return $this;
    }

}
