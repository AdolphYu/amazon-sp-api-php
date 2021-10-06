<?php
/**
 * AuthorizationApi.
 *
 * @author   Stefan Neuhaus / ClouSale
 */



namespace AdolphYu\AmazonSellingPartnerAPI\Api;


use AdolphYu\AmazonSellingPartnerAPI\ObjectSerializer;
use InvalidArgumentException;


class APlusContentApi extends BaseApi
{
    public function searchContentDocuments($marketplaceId, $pageToken=null)
    {
        $request = $this->searchContentDocumentsRequest($marketplaceId, $pageToken);
        return $this->send($request);
    }

    protected function searchContentDocumentsRequest($marketplaceId, $pageToken=null)
    {
        // verify the required parameter 'marketplace_id' is set
        if (null === $marketplaceId) {
            throw new InvalidArgumentException('Missing the required parameter $marketplaceId when calling APlusContentApi');
        }

        $resourcePath = '/aplus/2020-11-01/contentDocuments';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if (null !== $marketplaceId) {
            $queryParams['marketplaceId'] = ObjectSerializer::toQueryValue($marketplaceId);
        }
        // query params
        if (null !== $pageToken) {
            $queryParams['pageToken'] = ObjectSerializer::toQueryValue($pageToken);
        }


        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'GET', $httpBody);
    }

    public function createContentDocument($marketplaceId,$postContentDocumentRequest){
        $request = $this->createContentDocumentRequest($marketplaceId, $postContentDocumentRequest);
        return $this->send($request);
    }

    protected function createContentDocumentRequest($marketplaceId, $postContentDocumentRequest)
    {
        // verify the required parameter 'marketplace_id' is set
        if (null === $marketplaceId) {
            throw new InvalidArgumentException('Missing the required parameter $marketplaceId when calling APlusContentApi');
        }

        $resourcePath = '/aplus/2020-11-01/contentDocuments';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = $postContentDocumentRequest;
        $multipart = false;

        // query params
        if (null !== $marketplaceId) {
            $queryParams['marketplaceId'] = ObjectSerializer::toQueryValue($marketplaceId);
        }


        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'POST', $httpBody);
    }


    public function getContentDocument($contentReferenceKey,$marketplaceId,$includedDataSet){
        $request = $this->getContentDocumentRequest($contentReferenceKey,$marketplaceId, $includedDataSet);
        return $this->send($request);
    }

    protected function getContentDocumentRequest($contentReferenceKey,$marketplaceId, $includedDataSet)
    {
        // verify the required parameter 'marketplace_id' is set
        if (null === $marketplaceId) {
            throw new InvalidArgumentException('Missing the required parameter $marketplaceId when calling APlusContentApi');
        }

        $resourcePath = '/aplus/2020-11-01/contentDocuments/{contentReferenceKey}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if (null !== $marketplaceId) {
            $queryParams['marketplaceId'] = ObjectSerializer::toQueryValue($marketplaceId);
        }

        // query params
        if (null !== $includedDataSet) {
            $queryParams['includedDataSet'] = ObjectSerializer::toQueryValue($includedDataSet);
        }

        // path params
        if (null !== $contentReferenceKey) {
            $resourcePath = str_replace(
                '{'.'contentReferenceKey'.'}',
                ObjectSerializer::toPathValue($contentReferenceKey),
                $resourcePath
            );
        }
        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'GET', $httpBody);
    }

    public function updateContentDocument($contentReferenceKey,$marketplaceId,$postContentDocumentRequest){
        $request = $this->updateContentDocumentRequest($contentReferenceKey,$marketplaceId, $postContentDocumentRequest);
        return $this->send($request);
    }

    protected function updateContentDocumentRequest($contentReferenceKey,$marketplaceId, $postContentDocumentRequest)
    {
        // verify the required parameter 'marketplace_id' is set
        if (null === $marketplaceId) {
            throw new InvalidArgumentException('Missing the required parameter $marketplaceId when calling APlusContentApi');
        }

        $resourcePath = '/aplus/2020-11-01/contentDocuments/{contentReferenceKey}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = $postContentDocumentRequest;
        $multipart = false;

        // query params
        if (null !== $marketplaceId) {
            $queryParams['marketplaceId'] = ObjectSerializer::toQueryValue($marketplaceId);
        }

        // path params
        if (null !== $contentReferenceKey) {
            $resourcePath = str_replace(
                '{'.'contentReferenceKey'.'}',
                ObjectSerializer::toPathValue($contentReferenceKey),
                $resourcePath
            );
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'POST', $httpBody);
    }

    public function listContentDocumentAsinRelations($contentReferenceKey,$marketplaceId,$includedDataSet=null,$asinSet=null,$pageToken=null){
        $request = $this->listContentDocumentAsinRelationsRequest($contentReferenceKey,$marketplaceId, $includedDataSet,$asinSet,$pageToken);
        return $this->send($request);
    }

    protected function listContentDocumentAsinRelationsRequest($contentReferenceKey,$marketplaceId, $includedDataSet=null,$asinSet=null,$pageToken=null)
    {
        // verify the required parameter 'marketplace_id' is set
        if (null === $marketplaceId) {
            throw new InvalidArgumentException('Missing the required parameter $marketplaceId when calling APlusContentApi');
        }

        $resourcePath = '/aplus/2020-11-01/contentDocuments/{contentReferenceKey}/asins';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if (null !== $marketplaceId) {
            $queryParams['marketplaceId'] = ObjectSerializer::toQueryValue($marketplaceId);
        }
        // query params
        if (null !== $includedDataSet) {
            $queryParams['includedDataSet'] = ObjectSerializer::toQueryValue($includedDataSet);
        }
        // query params
        if (null !== $asinSet) {
            $queryParams['asinSet'] = ObjectSerializer::toQueryValue($asinSet);
        }
        // query params
        if (null !== $pageToken) {
            $queryParams['pageToken'] = ObjectSerializer::toQueryValue($pageToken);
        }

        // path params
        if (null !== $contentReferenceKey) {
            $resourcePath = str_replace(
                '{'.'contentReferenceKey'.'}',
                ObjectSerializer::toPathValue($contentReferenceKey),
                $resourcePath
            );
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'GET', $httpBody);
    }

    public function postContentDocumentAsinRelations($contentReferenceKey,$marketplaceId,$postContentDocumentAsinRelationsRequest){
        $request = $this->postContentDocumentAsinRelationsRequest($contentReferenceKey,$marketplaceId, $postContentDocumentAsinRelationsRequest);
        return $this->send($request);
    }

    protected function postContentDocumentAsinRelationsRequest($contentReferenceKey,$marketplaceId, $postContentDocumentAsinRelationsRequest)
    {
        // verify the required parameter 'marketplace_id' is set
        if (null === $marketplaceId) {
            throw new InvalidArgumentException('Missing the required parameter $marketplaceId when calling APlusContentApi');
        }

        $resourcePath = '/aplus/2020-11-01/contentDocuments/{contentReferenceKey}/asins';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = $postContentDocumentAsinRelationsRequest;
        $multipart = false;

        // query params
        if (null !== $marketplaceId) {
            $queryParams['marketplaceId'] = ObjectSerializer::toQueryValue($marketplaceId);
        }

        // path params
        if (null !== $contentReferenceKey) {
            $resourcePath = str_replace(
                '{'.'contentReferenceKey'.'}',
                ObjectSerializer::toPathValue($contentReferenceKey),
                $resourcePath
            );
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'POST', $httpBody);
    }

    public function validateContentDocumentAsinRelations($marketplaceId,$postContentDocumentRequest,$asinSet=NULL){
        $request = $this->validateContentDocumentAsinRelationsRequest($marketplaceId, $postContentDocumentRequest,$asinSet);
        return $this->send($request);
    }

    protected function validateContentDocumentAsinRelationsRequest($marketplaceId, $postContentDocumentRequest,$asinSet=null)
    {
        // verify the required parameter 'marketplace_id' is set
        if (null === $marketplaceId) {
            throw new InvalidArgumentException('Missing the required parameter $marketplaceId when calling APlusContentApi');
        }

        $resourcePath = '/aplus/2020-11-01/contentAsinValidations';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = $postContentDocumentRequest;
        $multipart = false;

        // query params
        if (null !== $marketplaceId) {
            $queryParams['marketplaceId'] = ObjectSerializer::toQueryValue($marketplaceId);
        }
        // query params
        if (null !== $asinSet) {
            $queryParams['asinSet'] = ObjectSerializer::toQueryValue($asinSet);
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'POST', $httpBody);
    }

    public function searchContentPublishRecords($marketplaceId,$asin,$pageToken=NULL){
        $request = $this->searchContentPublishRecordsRequest($marketplaceId, $asin,$pageToken);
        return $this->send($request);
    }

    protected function searchContentPublishRecordsRequest($marketplaceId, $asin,$pageToken=null)
    {
        // verify the required parameter 'marketplace_id' is set
        if (null === $marketplaceId) {
            throw new InvalidArgumentException('Missing the required parameter $marketplaceId when calling APlusContentApi');
        }

        $resourcePath = '/aplus/2020-11-01/contentPublishRecords';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if (null !== $marketplaceId) {
            $queryParams['marketplaceId'] = ObjectSerializer::toQueryValue($marketplaceId);
        }
        // query params
        if (null !== $asin) {
            $queryParams['asin'] = ObjectSerializer::toQueryValue($asin);
        }

        // query params
        if (null !== $pageToken) {
            $queryParams['pageToken'] = ObjectSerializer::toQueryValue($pageToken);
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'GET', $httpBody);
    }

    public function postContentDocumentApprovalSubmission($contentReferenceKey,$marketplaceId){
        $request = $this->postContentDocumentApprovalSubmissionRequest($contentReferenceKey,$marketplaceId);
        return $this->send($request);
    }

    protected function postContentDocumentApprovalSubmissionRequest($contentReferenceKey,$marketplaceId)
    {
        // verify the required parameter 'marketplace_id' is set
        if (null === $marketplaceId) {
            throw new InvalidArgumentException('Missing the required parameter $marketplaceId when calling APlusContentApi');
        }

        $resourcePath = '/aplus/2020-11-01/contentDocuments/{contentReferenceKey}/approvalSubmissions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if (null !== $marketplaceId) {
            $queryParams['marketplaceId'] = ObjectSerializer::toQueryValue($marketplaceId);
        }

        // path params
        if (null !== $contentReferenceKey) {
            $resourcePath = str_replace(
                '{'.'contentReferenceKey'.'}',
                ObjectSerializer::toPathValue($contentReferenceKey),
                $resourcePath
            );
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'POST', $httpBody);
    }


    public function postContentDocumentSuspendSubmission($contentReferenceKey,$marketplaceId){
        $request = $this->postContentDocumentSuspendSubmissionRequest($contentReferenceKey,$marketplaceId);
        return $this->send($request);
    }

    protected function postContentDocumentSuspendSubmissionRequest($contentReferenceKey,$marketplaceId)
    {
        // verify the required parameter 'marketplace_id' is set
        if (null === $marketplaceId) {
            throw new InvalidArgumentException('Missing the required parameter $marketplaceId when calling APlusContentApi');
        }

        $resourcePath = '/aplus/2020-11-01/contentDocuments/{contentReferenceKey}/suspendSubmissions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if (null !== $marketplaceId) {
            $queryParams['marketplaceId'] = ObjectSerializer::toQueryValue($marketplaceId);
        }

        // path params
        if (null !== $contentReferenceKey) {
            $resourcePath = str_replace(
                '{'.'contentReferenceKey'.'}',
                ObjectSerializer::toPathValue($contentReferenceKey),
                $resourcePath
            );
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'POST', $httpBody);
    }

}
