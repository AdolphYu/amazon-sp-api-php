<?php

namespace AdolphYu\AmazonSellingPartnerAPI\Models\Catalog;

use AdolphYu\AmazonSellingPartnerAPI\Models\Common\BaseInfo;


class ItemSalesRank extends BaseInfo
{


    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'ItemSalesRank';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'title' => 'string',
        'link' => 'string',
        'value' => 'integer',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'title' => null,
        'link' => null,
        'value' => null,
    ];


    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'title' => 'title',
        'link' => 'link',
        'value' => 'value',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'title' => 'setTitle',
        'link' => 'setLink',
        'value' => 'setValue',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'title' => 'getTitle',
        'link' => 'getLink',
        'value' => 'getValue',
    ];



    public function getTitle()
    {
        return $this->container['title'] ?? null;
    }


    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }


    public function getLink()
    {
        return $this->container['link'] ?? null;
    }


    public function setLink($link)
    {
        $this->container['link'] = $link;

        return $this;
    }

    public function getValue()
    {
        return $this->container['value'] ?? null;
    }


    public function setValue($value)
    {
        $this->container['value'] = $value;

        return $this;
    }

}
