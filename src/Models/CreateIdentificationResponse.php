<?php
/*
 * Idfy
 *
 * This file was automatically generated for Idfy by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace IdfyLib\Models;

use JsonSerializable;

/**
 *The response of the Create Identitiy request
 */
class CreateIdentificationResponse implements JsonSerializable
{
    /**
     * The url to use as src for iframe or to redirect the user to
     * @maps Url
     * @var string|null $url public property
     */
    public $url;

    /**
     * Requestid used to get the reponse form server afterwards
     * @maps RequestId
     * @var string|null $requestId public property
     */
    public $requestId;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string $url       Initialization value for $this->url
     * @param string $requestId Initialization value for $this->requestId
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->url       = func_get_arg(0);
            $this->requestId = func_get_arg(1);
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
        $json['Url']       = $this->url;
        $json['RequestId'] = $this->requestId;

        return array_merge($json, $this->additionalProperties);
    }
}
