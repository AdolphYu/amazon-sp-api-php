<?php
/**
 * ItemIdentifiersByMarketplace.
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


class ItemVendorDetailsByMarketplace extends BaseInfo
{

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'ItemVendorDetailsByMarketplace';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'marketplace_id' => 'string',
        'brandCode' => 'string',
        'categoryCode' => 'string',
        'manufacturerCode' => 'string',
        'manufacturerCodeParent' => 'string',
        'productGroup' => 'string',
        'replenishmentCategory' => 'string',
        'subcategoryCode' => 'string',

    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'marketplace_id' => null,
        'brandCode' => null,
        'categoryCode' => null,
        'manufacturerCode' => null,
        'manufacturerCodeParent' => null,
        'productGroup' => null,
        'replenishmentCategory' => null,
        'subcategoryCode' => null,
    ];


    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'marketplace_id' => 'marketplaceId',
        'brandCode' => 'brandCode',
        'categoryCode' => 'categoryCode',
        'manufacturerCode' => 'manufacturerCode',
        'manufacturerCodeParent' => 'manufacturerCodeParent',
        'productGroup' => 'productGroup',
        'replenishmentCategory' => 'replenishmentCategory',
        'subcategoryCode' => 'subcategoryCode',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'marketplace_id' => 'setMarketplaceId',
        'brandCode' => 'setBrandCode',
        'categoryCode' => 'setCategoryCode',
        'manufacturerCode' => 'setManufacturerCode',
        'manufacturerCodeParent' => 'setManufacturerCodeParent',
        'productGroup' => 'setProductGroup',
        'replenishmentCategory' => 'setReplenishmentCategory',
        'subcategoryCode' => 'setSubcategoryCode',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'marketplace_id' => 'getMarketplaceId',
        'brandCode' => 'getBrandCode',
        'categoryCode' => 'getCategoryCode',
        'manufacturerCode' => 'getManufacturerCode',
        'manufacturerCodeParent' => 'getManufacturerCodeParent',
        'productGroup' => 'getProductGroup',
        'replenishmentCategory' => 'getReplenishmentCategory',
        'subcategoryCode' => 'getSubcategoryCode',
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


    public function getBrandCode()
    {
        return $this->container['brandCode'] ?? null;
    }


    public function setBrandCode($brandCode)
    {
        $this->container['brandCode'] = $brandCode;

        return $this;
    }

    public function getCategoryCode()
    {
        return $this->container['categoryCode'] ?? null;
    }


    public function setCategoryCode($categoryCode)
    {
        $this->container['categoryCode'] = $categoryCode;

        return $this;
    }

    public function getManufacturerCode()
    {
        return $this->container['manufacturerCode'] ?? null;
    }


    public function setManufacturerCode($manufacturerCode)
    {
        $this->container['manufacturerCode'] = $manufacturerCode;

        return $this;
    }

    public function getManufacturerCodeParent()
    {
        return $this->container['manufacturerCodeParent'] ?? null;
    }


    public function setManufacturerCodeParent($manufacturerCode)
    {
        $this->container['manufacturerCodeParent'] = $manufacturerCode;

        return $this;
    }


    public function getProductGroup()
    {
        return $this->container['productGroup'] ?? null;
    }


    public function setProductGroup($productGroup)
    {
        $this->container['productGroup'] = $productGroup;

        return $this;
    }


    public function getReplenishmentCategory()
    {
        return $this->container['replenishmentCategory'] ?? null;
    }


    public function setReplenishmentCategory($replenishmentCategory)
    {
        $this->container['replenishmentCategory'] = $replenishmentCategory;

        return $this;
    }

    public function getSubcategoryCode()
    {
        return $this->container['subcategoryCode'] ?? null;
    }


    public function setSubcategoryCode($subcategoryCode)
    {
        $this->container['subcategoryCode'] = $subcategoryCode;

        return $this;
    }
    
}
