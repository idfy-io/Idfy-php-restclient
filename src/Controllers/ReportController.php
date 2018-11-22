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
class ReportController extends BaseController
{
    /**
     * @var ReportController The reference to *Singleton* instance of this class
     */
    private static $instance;

    /**
     * Returns the *Singleton* instance of this class.
     * @return ReportController The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }

    /**
     * The pdf report will be awailable to download the first 48 hours.
     *
     * @param string $reportId The reportId returned from the Get
     * @return void response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function retriveReport(
        $reportId
    ) {
        //check or get oauth token
        OAuthManager::getInstance()->checkAuthorization();
        //check that all required arguments are provided
        if (!isset($reportId)) {
            throw new \InvalidArgumentException("One or more required arguments were NULL.");
        }


        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/information/report/{reportId}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'reportId' => $reportId,
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'ApiMatic-RestClient-2018-5-18 Sdk-Langauge:PHP',
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
        if ($response->code == 400) {
            throw new APIException('Bad request', $_httpContext);
        }

        if ($response->code == 401) {
            throw new APIException('Not authorized', $_httpContext);
        }

        if ($response->code == 404) {
            throw new APIException('Data not found', $_httpContext);
        }

        if ($response->code == 500) {
            throw new APIException('Internal server error (Miscellaneous)', $_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);
    }
}
