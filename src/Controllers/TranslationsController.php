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
class TranslationsController extends BaseController
{
    /**
     * @var TranslationsController The reference to *Singleton* instance of this class
     */
    private static $instance;

    /**
     * Returns the *Singleton* instance of this class.
     * @return TranslationsController The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }

    /**
     * Returns a list of all your translations for the given language set.
     *
     * @param integer $languageSetId TODO: type description here
     * @param string  $language      (optional) TODO: type description here
     * @param string  $format        (optional) TODO: type description here
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function listTranslations(
        $languageSetId,
        $language = null,
        $format = null
    ) {
        //check that all required arguments are provided
        if (!isset($languageSetId)) {
            throw new \InvalidArgumentException("One or more required arguments were NULL.");
        }


        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/text/language-sets/{languageSetId}/translations';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'languageSetId' => $languageSetId,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'language'      => $language,
            'format'        => $format,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'ApiMatic-RestClient-2018-5-18 Sdk-Langauge:PHP',
            'Accept'        => 'application/json'
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

        return $mapper->mapClassArray($response->body, 'IdfyLib\\Models\\TranslationDTO');
    }

    /**
     * Updates the specified translation with the parameters passed.
     *
     * @param integer                     $languageSetId     TODO: type description here
     * @param integer                     $id                TODO: type description here
     * @param Models\TranslationUpdateDTO $translationUpdate (optional) TODO: type description here
     * @return void response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function updateTranslation(
        $languageSetId,
        $id,
        $translationUpdate = null
    ) {
        //check that all required arguments are provided
        if (!isset($languageSetId, $id)) {
            throw new \InvalidArgumentException("One or more required arguments were NULL.");
        }


        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/text/language-sets/{languageSetId}/translations/{id}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'languageSetId'     => $languageSetId,
            'id'                => $id,
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'      => 'ApiMatic-RestClient-2018-5-18 Sdk-Langauge:PHP',
            'content-type'    => 'application/json; charset=utf-8'
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::PATCH, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::patch($_queryUrl, $_headers, Request\Body::Json($translationUpdate));

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);
    }

    /**
     * Retrieves the details of a single translation.
     *
     * @param integer $languageSetId TODO: type description here
     * @param integer $id            TODO: type description here
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function retrieveTranslation(
        $languageSetId,
        $id
    ) {
        //check that all required arguments are provided
        if (!isset($languageSetId, $id)) {
            throw new \InvalidArgumentException("One or more required arguments were NULL.");
        }


        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/text/language-sets/{languageSetId}/translations/{id}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'languageSetId' => $languageSetId,
            'id'            => $id,
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'ApiMatic-RestClient-2018-5-18 Sdk-Langauge:PHP',
            'Accept'        => 'application/json'
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

        return $mapper->mapClass($response->body, 'IdfyLib\\Models\\TranslationDTO');
    }
}
