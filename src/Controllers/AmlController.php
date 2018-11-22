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
class AmlController extends BaseController
{
    /**
     * @var AmlController The reference to *Singleton* instance of this class
     */
    private static $instance;

    /**
     * Returns the *Singleton* instance of this class.
     * @return AmlController The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }

    /**
     * Person screening with data enhancement enabled for nationalities where data enhancement is provided.
     * For other nationalities the data enhancement will be skipped
     *
     * **Required fields**: Name with either birthDate or ssn.
     *
     * @param string $name          Complete name of person.  (Order of first and last names is not significant.)
     * @param string $ssn           (optional) National Identification number. SSN or Birthdate are REQUIRED (Se
     *                              NationalId format)
     * @param string $birthDate     (optional) Date of birth. SSN or Birthdate are REQUIRED (format: yyyyMMdd)
     * @param string $nationality   (optional) Nationality of person (two letters ISO 3166 )
     * @param string $language      (optional) Language to use in response where applicable, optional. (two letters ISO
     *                              3166 )
     * @param bool   $includeReport (optional) Create a PDF report with the data timestamp and sealed as future proof
     *                              for the process.
     * @param string $mode          (optional) What mode to use. When using identify and screening data enhancement is
     *                              enabled for nationalities where data enhancement is provided.
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function b2CIdentifyAndScreeningRequest(
        $name,
        $ssn = null,
        $birthDate = null,
        $nationality = null,
        $language = null,
        $includeReport = null,
        $mode = null
    ) {
        //check or get oauth token
        OAuthManager::getInstance()->checkAuthorization();
        //check that all required arguments are provided
        if (!isset($name)) {
            throw new \InvalidArgumentException("One or more required arguments were NULL.");
        }


        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/information/aml/b2c';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'name'          => $name,
            'ssn'           => $ssn,
            'birthDate'     => $birthDate,
            'nationality'   => $nationality,
            'language'      => $language,
            'includeReport' => var_export($includeReport, true),
            'mode'          => $mode,
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
        if ($response->code == 400) {
            throw new APIException('Bad request', $_httpContext);
        }

        if ($response->code == 401) {
            throw new APIException('Not authorized', $_httpContext);
        }

        if ($response->code == 404) {
            throw new APIException('Not found', $_httpContext);
        }

        if ($response->code == 500) {
            throw new APIException('Internal Server Error (Miscellaneous)', $_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClass($response->body, 'IdfyLib\\Models\\PersonAmlResponse');
    }

    /**
     * Person screening with data enhancement enabled for nationalities where data enhancement is provided.
     * For other nationalities the data enhancement will be skipped
     *
     * **Required fields**: Name with either birthDate or ssn.
     *
     * @param string $name          Complete name of person.  (Order of first and last names is not significant.)
     * @param string $regNo         (optional) Business registration number
     * @param string $dunsNo        (optional) D-U-N-S number
     * @param string $nationality   (optional) Nationality of person (two letters ISO 3166 )
     * @param string $language      (optional) Language to use in response where applicable, optional. (two letters ISO
     *                              3166 )
     * @param bool   $includeReport (optional) Create a PDF report with the data timestamp and sealed as future proof
     *                              for the process.
     * @param string $mode          (optional) What mode to use. When using identify and screening data enhancement is
     *                              enabled for nationalities where data enhancement is provided.
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function b2BIdentifyAndScreeningRequest(
        $name,
        $regNo = null,
        $dunsNo = null,
        $nationality = null,
        $language = null,
        $includeReport = null,
        $mode = null
    ) {
        //check or get oauth token
        OAuthManager::getInstance()->checkAuthorization();
        //check that all required arguments are provided
        if (!isset($name)) {
            throw new \InvalidArgumentException("One or more required arguments were NULL.");
        }


        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/information/aml/b2b';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'name'          => $name,
            'regNo'         => $regNo,
            'dunsNo'        => $dunsNo,
            'nationality'   => $nationality,
            'language'      => $language,
            'includeReport' => var_export($includeReport, true),
            'mode'          => $mode,
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
        if ($response->code == 400) {
            throw new APIException('Bad request', $_httpContext);
        }

        if ($response->code == 401) {
            throw new APIException('Not authorized', $_httpContext);
        }

        if ($response->code == 404) {
            throw new APIException('Not found', $_httpContext);
        }

        if ($response->code == 500) {
            throw new APIException('Internal Server Error (Miscellaneous)', $_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClass($response->body, 'IdfyLib\\Models\\CompanyAmlResponse');
    }
}
