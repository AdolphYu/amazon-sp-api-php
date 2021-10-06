<?php

namespace AdolphYu\AmazonSellingPartnerAPI\Models\APlusContent;

use AdolphYu\AmazonSellingPartnerAPI\Models\Common\BaseInfo;


class ContentMetadata extends BaseInfo
{


    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'ContentMetadata';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'name' => 'string',
        'marketplaceId' => 'string',
        'status' => 'string',
        'badgeSet' => ContentBadgeSet::class,
        'updateTime' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'name' => null,
        'marketplaceId' => null,
        'status' => null,
        'badgeSet' => null,
        'updateTime' => null,

    ];


    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'name' => 'name',
        'marketplaceId' => 'marketplaceId',
        'status' => 'status',
        'badgeSet' => 'badgeSet',
        'updateTime' => 'updateTime',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'contentReferenceKey' => 'setContentMetadata',
        'contentMetadata' => 'setContentMetadata',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'contentReferenceKey' => 'getContentReferenceKey',
        'contentMetadata' => 'getContentMetadata',
    ];



    public function getContentReferenceKey()
    {
        return $this->container['contentReferenceKey'] ?? null;
    }


    public function setContentReferenceKey($contentReferenceKey)
    {
        $this->container['contentReferenceKey'] = $contentReferenceKey;

        return $this;
    }


    public function getContentMetadata()
    {
        return $this->container['contentMetadata'] ?? null;
    }


    public function setContentMetadata($contentMetadata)
    {
        $this->container['contentMetadata'] = $contentMetadata;

        return $this;
    }


}
