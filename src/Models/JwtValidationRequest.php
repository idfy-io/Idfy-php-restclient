<?php
/*
 * Idfy
 *
 * This file was automatically generated for Idfy by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace IdfyLib\Models;

use JsonSerializable;

/**
 *Jwt validation request
 */
class JwtValidationRequest implements JsonSerializable
{
    /**
     * The JWT to be validated as an string
     * @required
     * @var string $jwt public property
     */
    public $jwt;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string $jwt Initialization value for $this->jwt
     */
    public function __construct()
    {
        if (1 == func_num_args()) {
            $this->jwt = func_get_arg(0);
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
        $json['jwt'] = $this->jwt;

        return array_merge($json, $this->additionalProperties);
    }
}
