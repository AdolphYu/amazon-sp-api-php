<?php
/**
 * AuthorizationApi.
 *
 * @author   Stefan Neuhaus / ClouSale
 */



namespace AdolphYu\AmazonSellingPartnerAPI\Api;

use AdolphYu\AmazonSellingPartnerAPI\Configuration;
use AdolphYu\AmazonSellingPartnerAPI\HeaderSelector;
use AdolphYu\AmazonSellingPartnerAPI\Helpers\SellingPartnerApiRequest;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;



class BaseApi
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

}
