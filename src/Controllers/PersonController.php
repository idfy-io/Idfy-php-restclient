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
class PersonController extends BaseController
{
    /**
     * @var PersonController The reference to *Singleton* instance of this class
     */
    private static $instance;

    /**
     * Returns the *Singleton* instance of this class.
     * @return PersonController The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }

    /**
     * Run a query using social security number as parameter. The use of this requires username and
     * password for Infortorget with the required permissions.
     *
     * Valid query parameter combinations:
     *
     * socialSecurityNumber,
     *
     * socialSecurityNumber + firstName + lastName,
     *
     * dateOfBirth + firstName + lastName,
     *
     * firstName + lastName + address + postalCode
     *
     * @param string  $username             Infotorget username
     * @param string  $password             Infotorget password
     * @param string  $reason               Reason for request
     * @param string  $system               Your system name (Cannot contain any special characters or numbers)
     * @param string  $socialSecurityNumber (optional) TODO: type description here
     * @param string  $firstname            (optional) TODO: type description here
     * @param string  $lastname             (optional) TODO: type description here
     * @param integer $dateofbirth          (optional) TODO: type description here
     * @param string  $address              (optional) TODO: type description here
     * @param string  $postalcode           (optional) TODO: type description here
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function retrievePersonInfoThroughInfotorget(
        $username,
        $password,
        $reason,
        $system,
        $socialSecurityNumber = null,
        $firstname = null,
        $lastname = null,
        $dateofbirth = null,
        $address = null,
        $postalcode = null
    ) {
        //check or get oauth token
        OAuthManager::getInstance()->checkAuthorization();
        //check that all required arguments are provided
        if (!isset($username, $password, $reason, $system)) {
            throw new \InvalidArgumentException("One or more required arguments were NULL.");
        }


        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/information/person/info/infotorget';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'username'             => $username,
            'password'             => $password,
            'reason'               => $reason,
            'system'               => $system,
            'socialSecurityNumber' => $socialSecurityNumber,
            'firstname'            => $firstname,
            'lastname'             => $lastname,
            'dateofbirth'          => $dateofbirth,
            'address'              => $address,
            'postalcode'           => $postalcode,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'         => 'ApiMatic-RestClient-2018-5-18 Sdk-Langauge:PHP',
            'Accept'             => 'application/json',
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

        if ($response->code == 500) {
            throw new APIException('Internal server error (Miscellaneous)', $_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClass($response->body, 'IdfyLib\\Models\\PersonOfficialPersonRegistryResponse');
    }

    /**
     * Returns (unofficial) person information, this method returns the best match from the query
     * parameters served. The information is delievered by Matchit.
     *
     * Valid query parameter combinations: name + dateOfBirth, name + socialSec, name + address,
     * phonenumber
     *
     * @param string $name        (optional) TODO: type description here
     * @param string $socialSec   (optional) TODO: type description here
     * @param string $dateOfBirth (optional) TODO: type description here
     * @param string $phonenumber (optional) TODO: type description here
     * @param string $address     (optional) TODO: type description here
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function retrievePersonInfoThroughMatchit(
        $name = null,
        $socialSec = null,
        $dateOfBirth = null,
        $phonenumber = null,
        $address = null
    ) {
        //check or get oauth token
        OAuthManager::getInstance()->checkAuthorization();

        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/information/person/info/matchit';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'name'        => $name,
            'socialSec'   => $socialSec,
            'dateOfBirth' => $dateOfBirth,
            'phonenumber' => $phonenumber,
            'address'     => $address,
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

        if ($response->code == 500) {
            throw new APIException('Internal server error (Miscellaneous)', $_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClass($response->body, 'IdfyLib\\Models\\PersonPersonInformation');
    }

    /**
     * Credit check of a single person. The use of this will produce a duplicate letter to the person that
     * is checked.
     *
     * A pdf report will be awailable to download the first 48 hours.
     *
     * @param integer $socialSecurityNumber TODO: type description here
     * @param string  $userId               (optional) Override bisnode user Id
     * @param string  $password             (optional) Override bisnode password
     * @param integer $phonenumber          (optional) Specify this to use electronic duplicate letters
     * @param string  $email                (optional) Specify this to use electronic duplicate letters
     * @param bool    $includeReport        (optional) Specify if you want a pdf report (defaults to false)
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function runCreditCheck(
        $socialSecurityNumber,
        $userId = null,
        $password = null,
        $phonenumber = null,
        $email = null,
        $includeReport = null
    ) {
        //check or get oauth token
        OAuthManager::getInstance()->checkAuthorization();
        //check that all required arguments are provided
        if (!isset($socialSecurityNumber)) {
            throw new \InvalidArgumentException("One or more required arguments were NULL.");
        }


        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/information/person/creditcheck';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'socialSecurityNumber' => $socialSecurityNumber,
            'userId'               => $userId,
            'password'             => $password,
            'phonenumber'          => $phonenumber,
            'email'                => $email,
            'includeReport'        => var_export($includeReport, true),
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'         => 'ApiMatic-RestClient-2018-5-18 Sdk-Langauge:PHP',
            'Accept'             => 'application/json',
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

        if ($response->code == 500) {
            throw new APIException('Internal server error (Miscellaneous)', $_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClass($response->body, 'IdfyLib\\Models\\PersonCreditCheckPersonResponse');
    }

    /**
     * Returns (unofficial) person information, this method returns the 5 best matches from the query
     * parameters served (freetext). The information is delievered by Matchit.
     *
     * @param string $queryString TODO: type description here
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function listPersonInfoThroughMatchitByQuery(
        $queryString
    ) {
        //check or get oauth token
        OAuthManager::getInstance()->checkAuthorization();
        //check that all required arguments are provided
        if (!isset($queryString)) {
            throw new \InvalidArgumentException("One or more required arguments were NULL.");
        }


        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/information/person/info/matchit/query';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'queryString' => $queryString,
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

        if ($response->code == 500) {
            throw new APIException('Internal server error (Miscellaneous)', $_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClassArray($response->body, 'IdfyLib\\Models\\PersonPersonInformation');
    }
}
