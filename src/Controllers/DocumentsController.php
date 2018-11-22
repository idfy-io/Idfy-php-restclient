<?php
/*
 * Idfy
 *
 * This file was automatically generated for Idfy by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace IdfyLib\Controllers;

use IdfyLib\APIException;
use IdfyLib\APIHelper;
use IdfyLib\Configuration;
use IdfyLib\Models;
use IdfyLib\Exceptions;
use IdfyLib\Utils\DateTimeHelper;
use IdfyLib\Http\HttpRequest;
use IdfyLib\Http\HttpResponse;
use IdfyLib\Http\HttpMethod;
use IdfyLib\Http\HttpContext;
use IdfyLib\OAuthManager;
use IdfyLib\Servers;
use Unirest\Request;

/**
 * @todo Add a general description for this controller.
 */
class DocumentsController extends BaseController
{
    /**
     * @var DocumentsController The reference to *Singleton* instance of this class
     */
    private static $instance;

    /**
     * Returns the *Singleton* instance of this class.
     * @return DocumentsController The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }

    /**
     * Queries your documents using the provided parameters.
     *
     * @param string   $externalId       (optional) Documents external id
     * @param string   $signerId         (optional) Signer Id
     * @param string   $externalSignerId (optional) External signer Id
     * @param DateTime $fromDate         (optional) Documents created from date (ticks)
     * @param DateTime $toDate           (optional) Documents created to date (ticks)
     * @param DateTime $lastUpdated      (optional) Documents updated after this date (ticks)
     * @param DateTime $signedDate       (optional) Documents signed after this date (ticks)
     * @param string   $nameOfSigner     (optional) Name of signer
     * @param string   $title            (optional) TODO: type description here
     * @param string   $status           (optional) Document status
     * @param string   $tags             (optional) Document tags
     * @param integer  $offset           (optional) Used for paging (will be automatically set in response links)
     * @param integer  $limit            (optional) Set how many results you want per page (max/default 100)
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function documentsGetCollection(
        $externalId = null,
        $signerId = null,
        $externalSignerId = null,
        $fromDate = null,
        $toDate = null,
        $lastUpdated = null,
        $signedDate = null,
        $nameOfSigner = null,
        $title = null,
        $status = null,
        $tags = null,
        $offset = null,
        $limit = null
    ) {
        //check or get oauth token
        OAuthManager::getInstance()->checkAuthorization();

        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/signature/documents/summary';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'externalId'       => $externalId,
            'signerId'         => $signerId,
            'externalSignerId' => $externalSignerId,
            'fromDate'         => DateTimeHelper::toRfc3339DateTime($fromDate),
            'toDate'           => DateTimeHelper::toRfc3339DateTime($toDate),
            'lastUpdated'      => DateTimeHelper::toRfc3339DateTime($lastUpdated),
            'signedDate'       => DateTimeHelper::toRfc3339DateTime($signedDate),
            'nameOfSigner'     => $nameOfSigner,
            'title'            => $title,
            'status'           => $status,
            'tags'             => $tags,
            'offset'           => $offset,
            'limit'            => $limit,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'     => 'ApiMatic-RestClient-2018-5-18 Sdk-Langauge:PHP',
            'Accept'         => 'application/json',
            'Authorization' => sprintf('Bearer %1$s', Configuration::$oAuthToken->accessToken)
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::get($_queryUrl, $_headers);

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClass($response->body, 'IdfyLib\\Models\\CollectionWithPagingDocumentSummary');
    }

    /**
     * Get the status of a document
     *
     * @param string $documentId TODO: type description here
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function documentsStatus(
        $documentId
    ) {
        //check or get oauth token
        OAuthManager::getInstance()->checkAuthorization();
        //check that all required arguments are provided
        if (!isset($documentId)) {
            throw new \InvalidArgumentException("One or more required arguments were NULL.");
        }


        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/signature/documents/{documentId}/status';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'documentId' => $documentId,
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'ApiMatic-RestClient-2018-5-18 Sdk-Langauge:PHP',
            'Accept'        => 'application/json',
            'Authorization' => sprintf('Bearer %1$s', Configuration::$oAuthToken->accessToken)
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::get($_queryUrl, $_headers);

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClass($response->body, 'IdfyLib\\Models\\Status85');
    }

    /**
     * Cancel document
     *
     * @param string $documentId TODO: type description here
     * @param string $reason     TODO: type description here
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function documentsCancel(
        $documentId,
        $reason
    ) {
        //check or get oauth token
        OAuthManager::getInstance()->checkAuthorization();
        //check that all required arguments are provided
        if (!isset($documentId, $reason)) {
            throw new \InvalidArgumentException("One or more required arguments were NULL.");
        }


        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/signature/documents/{documentId}/cancel';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'documentId' => $documentId,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'reason'     => $reason,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'ApiMatic-RestClient-2018-5-18 Sdk-Langauge:PHP',
            'Accept'        => 'application/json',
            'Authorization' => sprintf('Bearer %1$s', Configuration::$oAuthToken->accessToken)
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::post($_queryUrl, $_headers);

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        return $response->body;
    }

    /**
     * Update document
     *
     * @param string                              $documentId TODO: type description here
     * @param Models\UpdateDocumentRequestWrapper $request    TODO: type description here
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function documentsUpdate(
        $documentId,
        $request
    ) {
        //check or get oauth token
        OAuthManager::getInstance()->checkAuthorization();
        //check that all required arguments are provided
        if (!isset($documentId, $request)) {
            throw new \InvalidArgumentException("One or more required arguments were NULL.");
        }


        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/signature/documents/{documentId}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'documentId' => $documentId,
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'ApiMatic-RestClient-2018-5-18 Sdk-Langauge:PHP',
            'Accept'        => 'application/json',
            'content-type'  => 'application/json; charset=utf-8',
            'Authorization' => sprintf('Bearer %1$s', Configuration::$oAuthToken->accessToken)
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::PATCH, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::patch($_queryUrl, $_headers, Request\Body::Json($request));

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClass($response->body, 'IdfyLib\\Models\\UpdateDocumentRequest');
    }

    /**
     * Get information about a document
     *
     * @param string $documentId TODO: type description here
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function documentsGetSummary(
        $documentId
    ) {
        //check or get oauth token
        OAuthManager::getInstance()->checkAuthorization();
        //check that all required arguments are provided
        if (!isset($documentId)) {
            throw new \InvalidArgumentException("One or more required arguments were NULL.");
        }


        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/signature/documents/{documentId}/summary';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'documentId' => $documentId,
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'ApiMatic-RestClient-2018-5-18 Sdk-Langauge:PHP',
            'Accept'        => 'application/json',
            'Authorization' => sprintf('Bearer %1$s', Configuration::$oAuthToken->accessToken)
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::get($_queryUrl, $_headers);

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClass($response->body, 'IdfyLib\\Models\\DocumentSummary');
    }

    /**
     * Retrieves details of a single document.
     *
     * @param string $documentId TODO: type description here
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function documentsGet(
        $documentId
    ) {
        //check or get oauth token
        OAuthManager::getInstance()->checkAuthorization();
        //check that all required arguments are provided
        if (!isset($documentId)) {
            throw new \InvalidArgumentException("One or more required arguments were NULL.");
        }


        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/signature/documents/{documentId}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'documentId' => $documentId,
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'ApiMatic-RestClient-2018-5-18 Sdk-Langauge:PHP',
            'Accept'        => 'application/json',
            'Authorization' => sprintf('Bearer %1$s', Configuration::$oAuthToken->accessToken)
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::get($_queryUrl, $_headers);

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClass($response->body, 'IdfyLib\\Models\\CreateDocumentResponse');
    }

    /**
     * Creates a new document. In the response you will receive a document ID to retrieve info about the
     * document at a later time.
     *
     * You also receive a URL and unique identifier per signer.
     *
     * @param Models\CreateDocumentRequestWrapper $request TODO: type description here
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function documentsCreate(
        $request
    ) {
        //check or get oauth token
        OAuthManager::getInstance()->checkAuthorization();
        //check that all required arguments are provided
        if (!isset($request)) {
            throw new \InvalidArgumentException("One or more required arguments were NULL.");
        }


        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/signature/documents';

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'ApiMatic-RestClient-2018-5-18 Sdk-Langauge:PHP',
            'Accept'        => 'application/json',
            'content-type'  => 'application/json; charset=utf-8',
            'Authorization' => sprintf('Bearer %1$s', Configuration::$oAuthToken->accessToken)
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::post($_queryUrl, $_headers, Request\Body::Json($request));

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClass($response->body, 'IdfyLib\\Models\\CreateDocumentResponse');
    }
}
