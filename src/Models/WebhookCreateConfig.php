<?php
/*
 * Idfy
 *
 * This file was automatically generated for Idfy by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace IdfyLib\Models;

use JsonSerializable;

/**
 * @todo Write general description for this model
 */
class WebhookCreateConfig implements JsonSerializable
{
    /**
     * The URL to which the payloads will be delivered.
     * @required
     * @var string $url public property
     */
    public $url;

    /**
     * Optional secret used to compute a HMAC hex digest of the payload,
     *
     * which is passed with the HTTP request as an ``X-Idfy-Signature`` header.
     * @var string|null $secret public property
     */
    public $secret;

    /**
     * Determines whether to log webhook delivery attempts. Defaults to `never`.
     * @var string|null $deliveryLogging public property
     */
    public $deliveryLogging;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string $url             Initialization value for $this->url
     * @param string $secret          Initialization value for $this->secret
     * @param string $deliveryLogging Initialization value for $this->deliveryLogging
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->url             = func_get_arg(0);
            $this->secret          = func_get_arg(1);
            $this->deliveryLogging = func_get_arg(2);
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
        $json['url']             = $this->url;
        $json['secret']          = $this->secret;
        $json['deliveryLogging'] = $this->deliveryLogging;

        return array_merge($json, $this->additionalProperties);
    }
}
