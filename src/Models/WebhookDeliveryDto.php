<?php
/*
 * Idfy
 *
 * This file was automatically generated for Idfy by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace IdfyLib\Models;

use JsonSerializable;
use IdfyLib\Utils\DateTimeHelper;

/**
 * @todo Write general description for this model
 */
class WebhookDeliveryDto implements JsonSerializable
{
    /**
     * The webhooks unique identifier.
     * @var string|null $id public property
     */
    public $id;

    /**
     * @todo Write general description for this property
     * @var integer|null $webhookId public property
     */
    public $webhookId;

    /**
     * @todo Write general description for this property
     * @var string|null $eventId public property
     */
    public $eventId;

    /**
     * @todo Write general description for this property
     * @factory \IdfyLib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime|null $timestamp public property
     */
    public $timestamp;

    /**
     * @todo Write general description for this property
     * @var string|null $url public property
     */
    public $url;

    /**
     * @todo Write general description for this property
     * @var integer|null $elapsedMs public property
     */
    public $elapsedMs;

    /**
     * @todo Write general description for this property
     * @var object|null $requestHeaders public property
     */
    public $requestHeaders;

    /**
     * @todo Write general description for this property
     * @var object|null $requestBody public property
     */
    public $requestBody;

    /**
     * @todo Write general description for this property
     * @var object|null $responseHeaders public property
     */
    public $responseHeaders;

    /**
     * @todo Write general description for this property
     * @var object|null $responseBody public property
     */
    public $responseBody;

    /**
     * @todo Write general description for this property
     * @var integer|null $responseStatusCode public property
     */
    public $responseStatusCode;

    /**
     * @todo Write general description for this property
     * @var string|null $responseMessage public property
     */
    public $responseMessage;

    /**
     * @todo Write general description for this property
     * @var string|null $errorMessage public property
     */
    public $errorMessage;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string    $id                 Initialization value for $this->id
     * @param integer   $webhookId          Initialization value for $this->webhookId
     * @param string    $eventId            Initialization value for $this->eventId
     * @param \DateTime $timestamp          Initialization value for $this->timestamp
     * @param string    $url                Initialization value for $this->url
     * @param integer   $elapsedMs          Initialization value for $this->elapsedMs
     * @param object    $requestHeaders     Initialization value for $this->requestHeaders
     * @param object    $requestBody        Initialization value for $this->requestBody
     * @param object    $responseHeaders    Initialization value for $this->responseHeaders
     * @param object    $responseBody       Initialization value for $this->responseBody
     * @param integer   $responseStatusCode Initialization value for $this->responseStatusCode
     * @param string    $responseMessage    Initialization value for $this->responseMessage
     * @param string    $errorMessage       Initialization value for $this->errorMessage
     */
    public function __construct()
    {
        if (13 == func_num_args()) {
            $this->id                 = func_get_arg(0);
            $this->webhookId          = func_get_arg(1);
            $this->eventId            = func_get_arg(2);
            $this->timestamp          = func_get_arg(3);
            $this->url                = func_get_arg(4);
            $this->elapsedMs          = func_get_arg(5);
            $this->requestHeaders     = func_get_arg(6);
            $this->requestBody        = func_get_arg(7);
            $this->responseHeaders    = func_get_arg(8);
            $this->responseBody       = func_get_arg(9);
            $this->responseStatusCode = func_get_arg(10);
            $this->responseMessage    = func_get_arg(11);
            $this->errorMessage       = func_get_arg(12);
        }
    }

    
    /**
     * Add an additional property to this model.
     * @param string $name  Name of property
     * @param mixed  $value Value of property
     */
    public function addAdditionalProperty($name, $value)
    {
        $this->additionalProperties[$name] = $value;
    }

    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['id']                 = $this->id;
        $json['webhookId']          = $this->webhookId;
        $json['eventId']            = $this->eventId;
        $json['timestamp']          = isset($this->timestamp) ?
            DateTimeHelper::toRfc3339DateTime($this->timestamp) : null;
        $json['url']                = $this->url;
        $json['elapsedMs']          = $this->elapsedMs;
        $json['requestHeaders']     = $this->requestHeaders;
        $json['requestBody']        = $this->requestBody;
        $json['responseHeaders']    = $this->responseHeaders;
        $json['responseBody']       = $this->responseBody;
        $json['responseStatusCode'] = $this->responseStatusCode;
        $json['responseMessage']    = $this->responseMessage;
        $json['errorMessage']       = $this->errorMessage;

        return array_merge($json, $this->additionalProperties);
    }
}
