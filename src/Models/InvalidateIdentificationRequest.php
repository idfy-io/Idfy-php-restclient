<?php
/*
 * Idfy
 *
 * This file was automatically generated for Idfy by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace IdfyLib\Models;

use JsonSerializable;

/**
 *Invalidates a identifyrequest so that it cannot be used twice.
 */
class InvalidateIdentificationRequest implements JsonSerializable
{
    /**
     * The requestid of the identification process
     * @required
     * @maps RequestId
     * @var string $requestId public property
     */
    public $requestId;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string $requestId Initialization value for $this->requestId
     */
    public function __construct()
    {
        if (1 == func_num_args()) {
            $this->requestId = func_get_arg(0);
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
        $json['RequestId'] = $this->requestId;

        return array_merge($json, $this->additionalProperties);
    }
}
