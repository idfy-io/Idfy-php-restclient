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
class LeiController extends BaseController
{
    /**
     * @var LeiController The reference to *Singleton* instance of this class
     */
    private static $instance;

    /**
     * Returns the *Singleton* instance of this class.
     * @return LeiController The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }

    /**
     * QueryLeiRecords for LEI-registered entities with filters
     *
     * @param string  $countryCode                   (optional) ISO 3166-1 alpha-2 country code for country entity is
     *                                               registered in
     * @param string  $lei                           (optional) LEI of entity
     * @param string  $legalNameContains             (optional) Words included in entity's legal name
     * @param string  $legalNameEquals               (optional) Exact phrase included in entity's legal name
     * @param string  $registrationAuthorityEntityId (optional) Entity Id provided by local business registry authority.
     *                                               For Norway this is the 'organisasjonsnummer' or tax
     *                                               identification number of the business
     * @param integer $pageSize                      (optional) Size of result set per request. Defaults to 25
     * @param integer $page                          (optional) Current page number for result set. Defaults to 0
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function queryLEIRecords(
        $countryCode = null,
        $lei = null,
        $legalNameContains = null,
        $legalNameEquals = null,
        $registrationAuthorityEntityId = null,
        $pageSize = null,
        $page = null
    ) {
        //check or get oauth token
        OAuthManager::getInstance()->checkAuthorization();

        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/information/lei/search';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'countryCode'                   => $countryCode,
            'lei'                           => $lei,
            'legalNameContains'             => $legalNameContains,
            'legalNameEquals'               => $legalNameEquals,
            'registrationAuthorityEntityId' => $registrationAuthorityEntityId,
            'pageSize'                      => $pageSize,
            'page'                          => $page,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'                  => 'ApiMatic-RestClient-2018-5-18 Sdk-Langauge:PHP',
            'Accept'                      => 'application/json',
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

        //Error handling using HTTP status codes
        if ($response->code == 401) {
            throw new APIException('Not authorized', $_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClass($response->body, 'IdfyLib\\Models\\SearchResult');
    }

    /**
     * Retrieve the entity record for a given LEI
     *
     * @param string $lei LEI to retrieve
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function retrieveLEIRecord(
        $lei
    ) {
        //check or get oauth token
        OAuthManager::getInstance()->checkAuthorization();
        //check that all required arguments are provided
        if (!isset($lei)) {
            throw new \InvalidArgumentException("One or more required arguments were NULL.");
        }


        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/information/lei/{lei}/lookup';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'lei' => $lei,
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

        //Error handling using HTTP status codes
        if ($response->code == 401) {
            throw new APIException('Not authorized', $_httpContext);
        }

        if ($response->code == 404) {
            throw new APIException('Not found', $_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClass($response->body, 'IdfyLib\\Models\\LeiRecord');
    }
}
