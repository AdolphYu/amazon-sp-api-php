<?php

namespace AdolphYu\AmazonSellingPartnerAPI\Models\Catalog;

use AdolphYu\AmazonSellingPartnerAPI\Models\Common\BaseInfo;


class ItemImage extends BaseInfo
{


    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'ItemImage';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'variant' => 'string',
        'link' => 'string',
        'height' => 'integer',
        'width' => 'integer',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'variant' => null,
        'link' => null,
        'height' => null,
        'width' => null,
    ];


    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'variant' => 'variant',
        'link' => 'link',
        'height' => 'height',
        'width' => 'width',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'variant' => 'setVariant',
        'link' => 'setLink',
        'height' => 'setHeight',
        'width' => 'setWidth',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'variant' => 'getVariant',
        'link' => 'getLink',
        'height' => 'getHeight',
        'width' => 'getWidth',
    ];



    public function getVariant()
    {
        return $this->container['variant'] ?? null;
    }


    public function setVariant($variant)
    {
        $this->container['variant'] = $variant;

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

    public function getHeight()
    {
        return $this->container['height'] ?? null;
    }


    public function setHeight($link)
    {
        $this->container['height'] = $link;

        return $this;
    }

    public function getWidth()
    {
        return $this->container['width'] ?? null;
    }


    public function setWidth($width)
    {
        $this->container['width'] = $width;

        return $this;
    }

}
