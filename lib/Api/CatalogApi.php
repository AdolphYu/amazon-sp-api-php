<?php
/**
 * CatalogApi.
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

namespace AdolphYu\AmazonSellingPartnerAPI\Api;

use AdolphYu\AmazonSellingPartnerAPI\ApiException;
use AdolphYu\AmazonSellingPartnerAPI\Configuration;
use AdolphYu\AmazonSellingPartnerAPI\HeaderSelector;
use AdolphYu\AmazonSellingPartnerAPI\Helpers\SellingPartnerApiRequest;
use AdolphYu\AmazonSellingPartnerAPI\Models\Catalog\Item;
use AdolphYu\AmazonSellingPartnerAPI\Models\Catalog\ItemSearchResults;
use AdolphYu\AmazonSellingPartnerAPI\ObjectSerializer;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Psr7\Request;
use InvalidArgumentException;

/**
 * CatalogApi Class Doc Comment.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class CatalogApi
{
    use SellingPartnerApiRequest;

    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    public function __construct(Configuration $config)
    {
        $this->client = new Client();
        $this->config = $config;
        $this->headerSelector = new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getCatalogItem.
     *
     * @param string $marketplace_id A marketplace identifier. Specifies the marketplace for the item. (required)
     * @param string $asin           The Amazon Standard Identification Number (ASIN) of the item. (required)
     *
     * @throws ApiException             on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AdolphYu\AmazonSellingPartnerAPI\Models\Catalog\Item
     */
    public function getCatalogItem($marketplace_id, $asin,$included_data=null,$locale=null)
    {
        list($response) = $this->getCatalogItemWithHttpInfo($marketplace_id, $asin,$included_data,$locale);

        return $response;
    }

    /**
     * Operation getCatalogItemWithHttpInfo.
     *
     * @param string $marketplace_id A marketplace identifier. Specifies the marketplace for the item. (required)
     * @param string $asin           The Amazon Standard Identification Number (ASIN) of the item. (required)
     *
     * @throws ApiException             on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return array of \AdolphYu\AmazonSellingPartnerAPI\Models\Catalog\GetCatalogItemResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getCatalogItemWithHttpInfo($marketplace_id, $asin,$included_data=null,$locale=null)
    {
        $request = $this->getCatalogItemRequest($marketplace_id, $asin,$included_data,$locale);

        return $this->sendRequest($request, Item::class);
    }

    /**
     * Operation getCatalogItemAsync.
     *
     * @param string $marketplace_id A marketplace identifier. Specifies the marketplace for the item. (required)
     * @param string $asin           The Amazon Standard Identification Number (ASIN) of the item. (required)
     *
     * @throws InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCatalogItemAsync($marketplace_id, $asin,$included_data=null,$locale=null)
    {
        return $this->getCatalogItemAsyncWithHttpInfo($marketplace_id, $asin,$included_data,$locale)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getCatalogItemAsyncWithHttpInfo.
     *
     * @param string $marketplace_id A marketplace identifier. Specifies the marketplace for the item. (required)
     * @param string $asin           The Amazon Standard Identification Number (ASIN) of the item. (required)
     *
     * @throws InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCatalogItemAsyncWithHttpInfo($marketplace_id, $asin,$included_data=null,$locale=null)
    {
        $request = $this->getCatalogItemRequest($marketplace_id, $asin,$included_data,$locale);

        return $this->sendRequestAsync($request, Item::class);
    }

    /**
     * Create request for operation 'getCatalogItem'.
     *
     * @param string $marketplace_id A marketplace identifier. Specifies the marketplace for the item. (required)
     * @param string $asin           The Amazon Standard Identification Number (ASIN) of the item. (required)
     *
     * @throws InvalidArgumentException
     *
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getCatalogItemRequest($marketplace_id, $asin,$included_data=null,$locale=null)
    {
        // verify the required parameter 'marketplace_id' is set
        if (null === $marketplace_id || (is_array($marketplace_id) && 0 === count($marketplace_id))) {
            throw new InvalidArgumentException('Missing the required parameter $marketplace_id when calling getCatalogItem');
        }
        // verify the required parameter 'asin' is set
        if (null === $asin || (is_array($asin) && 0 === count($asin))) {
            throw new InvalidArgumentException('Missing the required parameter $asin when calling getCatalogItem');
        }

        $resourcePath = '/catalog/2020-12-01/items/{asin}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if (null !== $marketplace_id) {
            $queryParams['marketplaceIds'] = ObjectSerializer::toQueryValue($marketplace_id);
        }

        // query params
        if (null !== $included_data) {
            $queryParams['includedData'] = ObjectSerializer::toQueryValue($included_data);
        }

        // query params
        if (null !== $locale) {
            $queryParams['locale'] = ObjectSerializer::toQueryValue($locale);
        }

        // path params
        if (null !== $asin) {
            $resourcePath = str_replace(
                '{'.'asin'.'}',
                ObjectSerializer::toPathValue($asin),
                $resourcePath
            );
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'GET', $httpBody);
    }

    /**
     * Operation searchCatalogItems.
     *
     * @param string $marketplace_id   A marketplace identifier. Specifies the marketplace for which items are returned. (required)
     * @param string $query            Keyword(s) to use to search for items in the catalog. Example: &#x27;harry potter books&#x27;. (optional)
     * @param string $query_context_id An identifier for the context within which the given search will be performed. A marketplace might provide mechanisms for constraining a search to a subset of potential items. For example, the retail marketplace allows queries to be constrained to a specific category. The QueryContextId parameter specifies such a subset. If it is omitted, the search will be performed using the default context for the marketplace, which will typically contain the largest set of items. (optional)
     * @param string $seller_sku       Used to identify an item in the given marketplace. SellerSKU is qualified by the seller&#x27;s SellerId, which is included with every operation that you submit. (optional)
     * @param string $upc              A 12-digit bar code used for retail packaging. (optional)
     * @param string $ean              A European article number that uniquely identifies the catalog item, manufacturer, and its attributes. (optional)
     * @param string $isbn             The unique commercial book identifier used to identify books internationally. (optional)
     * @param string $jan              A Japanese article number that uniquely identifies the product, manufacturer, and its attributes. (optional)
     *
     * @throws ApiException             on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AdolphYu\AmazonSellingPartnerAPI\Models\Catalog\ItemSearchResults
     */
    public function searchCatalogItems($keywords,$marketplaceIds, $includedData = null, $brandNames = null, $classificationIds = null, $pageSize = 20, $pageToken = null, $keywordsLocale = null, $locale = null)
    {
        list($response) = $this->searchCatalogItemsWithHttpInfo($keywords,$marketplaceIds, $includedData, $brandNames, $classificationIds, $pageSize, $pageToken, $keywordsLocale, $locale);

        return $response;
    }

    /**
     * Operation searchCatalogItemsWithHttpInfo.
     *
     * @param string $marketplace_id   A marketplace identifier. Specifies the marketplace for which items are returned. (required)
     * @param string $query            Keyword(s) to use to search for items in the catalog. Example: &#x27;harry potter books&#x27;. (optional)
     * @param string $query_context_id An identifier for the context within which the given search will be performed. A marketplace might provide mechanisms for constraining a search to a subset of potential items. For example, the retail marketplace allows queries to be constrained to a specific category. The QueryContextId parameter specifies such a subset. If it is omitted, the search will be performed using the default context for the marketplace, which will typically contain the largest set of items. (optional)
     * @param string $seller_sku       Used to identify an item in the given marketplace. SellerSKU is qualified by the seller&#x27;s SellerId, which is included with every operation that you submit. (optional)
     * @param string $upc              A 12-digit bar code used for retail packaging. (optional)
     * @param string $ean              A European article number that uniquely identifies the catalog item, manufacturer, and its attributes. (optional)
     * @param string $isbn             The unique commercial book identifier used to identify books internationally. (optional)
     * @param string $jan              A Japanese article number that uniquely identifies the product, manufacturer, and its attributes. (optional)
     *
     * @throws ApiException             on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return array of \AdolphYu\AmazonSellingPartnerAPI\Models\Catalog\ListCatalogItemsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function searchCatalogItemsWithHttpInfo($keywords,$marketplaceIds, $includedData = null, $brandNames = null, $classificationIds = null, $pageSize = 20, $pageToken = null, $keywordsLocale = null, $locale = null)
    {
        $request = $this->searchCatalogItemsRequest($keywords,$marketplaceIds, $includedData, $brandNames, $classificationIds, $pageSize, $pageToken, $keywordsLocale, $locale);

        return $this->sendRequest($request, ItemSearchResults::class);
    }

    /**
     * Operation searchCatalogItemsAsync.
     *
     * @param string $marketplace_id   A marketplace identifier. Specifies the marketplace for which items are returned. (required)
     * @param string $query            Keyword(s) to use to search for items in the catalog. Example: &#x27;harry potter books&#x27;. (optional)
     * @param string $query_context_id An identifier for the context within which the given search will be performed. A marketplace might provide mechanisms for constraining a search to a subset of potential items. For example, the retail marketplace allows queries to be constrained to a specific category. The QueryContextId parameter specifies such a subset. If it is omitted, the search will be performed using the default context for the marketplace, which will typically contain the largest set of items. (optional)
     * @param string $seller_sku       Used to identify an item in the given marketplace. SellerSKU is qualified by the seller&#x27;s SellerId, which is included with every operation that you submit. (optional)
     * @param string $upc              A 12-digit bar code used for retail packaging. (optional)
     * @param string $ean              A European article number that uniquely identifies the catalog item, manufacturer, and its attributes. (optional)
     * @param string $isbn             The unique commercial book identifier used to identify books internationally. (optional)
     * @param string $jan              A Japanese article number that uniquely identifies the product, manufacturer, and its attributes. (optional)
     *
     * @throws InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function searchCatalogItemsAsync($keywords,$marketplaceIds, $includedData = null, $brandNames = null, $classificationIds = null, $pageSize = 20, $pageToken = null, $keywordsLocale = null, $locale = null)
    {
        return $this->searchCatalogItemsAsyncWithHttpInfo($keywords,$marketplaceIds, $includedData, $brandNames, $classificationIds, $pageSize, $pageToken, $keywordsLocale, $locale)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation searchCatalogItemsAsyncWithHttpInfo.
     *
     * @param string $marketplace_id   A marketplace identifier. Specifies the marketplace for which items are returned. (required)
     * @param string $query            Keyword(s) to use to search for items in the catalog. Example: &#x27;harry potter books&#x27;. (optional)
     * @param string $query_context_id An identifier for the context within which the given search will be performed. A marketplace might provide mechanisms for constraining a search to a subset of potential items. For example, the retail marketplace allows queries to be constrained to a specific category. The QueryContextId parameter specifies such a subset. If it is omitted, the search will be performed using the default context for the marketplace, which will typically contain the largest set of items. (optional)
     * @param string $seller_sku       Used to identify an item in the given marketplace. SellerSKU is qualified by the seller&#x27;s SellerId, which is included with every operation that you submit. (optional)
     * @param string $upc              A 12-digit bar code used for retail packaging. (optional)
     * @param string $ean              A European article number that uniquely identifies the catalog item, manufacturer, and its attributes. (optional)
     * @param string $isbn             The unique commercial book identifier used to identify books internationally. (optional)
     * @param string $jan              A Japanese article number that uniquely identifies the product, manufacturer, and its attributes. (optional)
     *
     * @throws InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function searchCatalogItemsAsyncWithHttpInfo($keywords,$marketplaceIds, $includedData = null, $brandNames = null, $classificationIds = null, $pageSize = 20, $pageToken = null, $keywordsLocale = null, $locale = null)
    {
        $request = $this->searchCatalogItemsRequest($keywords,$marketplaceIds, $includedData, $brandNames, $classificationIds, $pageSize, $pageToken, $keywordsLocale, $locale);

        return $this->sendRequestAsync($request, ItemSearchResults::class);
    }

    /**
     * Create request for operation 'searchCatalogItems'.
     *
     * @param string $marketplace_id   A marketplace identifier. Specifies the marketplace for which items are returned. (required)
     * @param string $query            Keyword(s) to use to search for items in the catalog. Example: &#x27;harry potter books&#x27;. (optional)
     * @param string $query_context_id An identifier for the context within which the given search will be performed. A marketplace might provide mechanisms for constraining a search to a subset of potential items. For example, the retail marketplace allows queries to be constrained to a specific category. The QueryContextId parameter specifies such a subset. If it is omitted, the search will be performed using the default context for the marketplace, which will typically contain the largest set of items. (optional)
     * @param string $seller_sku       Used to identify an item in the given marketplace. SellerSKU is qualified by the seller&#x27;s SellerId, which is included with every operation that you submit. (optional)
     * @param string $upc              A 12-digit bar code used for retail packaging. (optional)
     * @param string $ean              A European article number that uniquely identifies the catalog item, manufacturer, and its attributes. (optional)
     * @param string $isbn             The unique commercial book identifier used to identify books internationally. (optional)
     * @param string $jan              A Japanese article number that uniquely identifies the product, manufacturer, and its attributes. (optional)
     *
     * @throws InvalidArgumentException
     *
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function searchCatalogItemsRequest($keywords,$marketplaceIds, $includedData = null, $brandNames = null, $classificationIds = null, $pageSize = 20, $pageToken = null, $keywordsLocale = null, $locale = null)
    {
        // verify the required parameter 'marketplace_id' is set
        if (null === $marketplaceIds || $keywords===null) {
            throw new InvalidArgumentException('Missing the required parameter $marketplaceIds and $keywords when calling searchCatalogItems');
        }

        $resourcePath = '/catalog/2020-12-01/items';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if (null !== $keywords) {
            $queryParams['keywords'] = ObjectSerializer::toQueryValue($keywords);
        }
        // query params
        if (null !== $marketplaceIds) {
            $queryParams['marketplaceIds'] = ObjectSerializer::toQueryValue($marketplaceIds);
        }

        // query params
        if (null !== $includedData) {
            $queryParams['includedData'] = ObjectSerializer::toQueryValue($includedData);
        }
        // query params
        if (null !== $brandNames) {
            $queryParams['brandNames'] = ObjectSerializer::toQueryValue($brandNames);
        }
        // query params
        if (null !== $classificationIds) {
            $queryParams['classificationIds'] = ObjectSerializer::toQueryValue($classificationIds);
        }
        // query params
        if (null !== $pageSize) {
            $queryParams['pageSize'] = ObjectSerializer::toQueryValue($pageSize);
        }
        // query params
        if (null !== $pageToken) {
            $queryParams['pageToken'] = ObjectSerializer::toQueryValue($pageToken);
        }
        // query params
        if (null !== $keywordsLocale) {
            $queryParams['keywordsLocale'] = ObjectSerializer::toQueryValue($keywordsLocale);
        }

        // query params
        if (null !== $locale) {
            $queryParams['locale'] = ObjectSerializer::toQueryValue($locale);
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'GET', $httpBody);
    }
}
