<?php
/**
 * FbaInboundEligibilityApi.
 *
 * @author   Adolph
 */

/**
 * Selling Partner API for FBA Inbound Eligibilty
 *
 * With the FBA Inbound Eligibility API, you can build applications that let sellers get eligibility previews for items before shipping them to Amazon's fulfillment centers. With this API you can find out if an item is eligible for inbound shipment to Amazon's fulfillment centers in a specific marketplace. You can also find out if an item is eligible for using the manufacturer barcode for FBA inventory tracking. Sellers can use this information to inform their decisions about which items to ship Amazon's fulfillment centers.
 *
 * OpenAPI spec version: v0
 */

namespace AdolphYu\AmazonSellingPartnerAPI\Api;

use AdolphYu\AmazonSellingPartnerAPI\Configuration;
use AdolphYu\AmazonSellingPartnerAPI\HeaderSelector;
use AdolphYu\AmazonSellingPartnerAPI\Helpers\SellingPartnerApiRequest;
use AdolphYu\AmazonSellingPartnerAPI\Models\FbaInboundEligibility\GetItemEligibilityPreviewResponse;
use AdolphYu\AmazonSellingPartnerAPI\Models\Orders\GetOrdersResponse;
use AdolphYu\AmazonSellingPartnerAPI\Models\ProductFees\GetMyFeesEstimateResponse;
use AdolphYu\AmazonSellingPartnerAPI\ObjectSerializer;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;

/**
 * FeesApi Class Doc Comment.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class FbaInboundEligibilityApi
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
     * Operation getItemEligibilityPreview.
     *
     * @param string $marketplace_ids
     * @param string $asin
     * @param enum $program
     * @throws \AdolphYu\AmazonSellingPartnerAPI\ApiException on non-2xx response
     * @return GetItemEligibilityPreviewResponse
     */
    public function getItemEligibilityPreview($marketplace_ids,$asin,$program)
    {
        list($response,$status,$headers) = $this->getItemEligibilityPreviewWithHttpInfo($marketplace_ids,$asin,$program);
        $response->status = $status;
        $response->headers = $headers;
        return $response;
    }

    /**
     *
     * @param $marketplace_ids
     * @param $asin
     * @param $program
     * @throws \AdolphYu\AmazonSellingPartnerAPI\ApiException
     * @return array
     */
    public function getItemEligibilityPreviewWithHttpInfo($marketplace_ids,$asin,$program)
    {
        $request = $this->getItemEligibilityPreviewRequest($marketplace_ids,$asin,$program);

        return $this->sendRequest($request, GetItemEligibilityPreviewResponse::class);
    }

    /**
     * @param $marketplace_ids
     * @param $asin
     * @param $program
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getItemEligibilityPreviewRequest($marketplace_ids,$asin,$program)
    {
        // verify the required parameter 'marketplace_ids' is set
        if (null === $marketplace_ids || (is_array($marketplace_ids) && 0 === count($marketplace_ids))) {
            throw new \InvalidArgumentException('Missing the required parameter $marketplace_ids when calling getOrders');
        }

        $resourcePath = '/fba/inbound/v1/eligibility/itemPreview';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // query params
        if (is_array($marketplace_ids)) {
            $marketplace_ids = ObjectSerializer::serializeCollection($marketplace_ids, 'csv', true);
        }
        if (null !== $marketplace_ids) {
            $queryParams['marketplaceIds'] = ObjectSerializer::toQueryValue($marketplace_ids);
        }
        // query params
        if (null !== $asin) {
            $queryParams['asin'] = ObjectSerializer::toQueryValue($asin);
        }
        if (null !== $program) {
            $queryParams['program'] = ObjectSerializer::toQueryValue($program);
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'GET', $httpBody);
    }


}
