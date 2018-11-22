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
class ValidationError implements JsonSerializable
{
    /**
     * Null if no errors is registered
     * @var string|null $errorCode public property
     */
    public $errorCode;

    /**
     * Null if no errors is registered
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
     * @param string $errorCode    Initialization value for $this->errorCode
     * @param string $errorMessage Initialization value for $this->errorMessage
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->errorCode    = func_get_arg(0);
            $this->errorMessage = func_get_arg(1);
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
        $json['errorCode']    = $this->errorCode;
        $json['errorMessage'] = $this->errorMessage;

        return array_merge($json, $this->additionalProperties);
    }
}
