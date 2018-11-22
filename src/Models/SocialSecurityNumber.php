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
class SocialSecurityNumber implements JsonSerializable
{
    /**
     * The social security number
     * @var string|null $value public property
     */
    public $value;

    /**
     * Iso 3166-1 Alfa-2 (2 letters) country code
     * @var string|null $countryCode public property
     */
    public $countryCode;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string $value       Initialization value for $this->value
     * @param string $countryCode Initialization value for $this->countryCode
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->value       = func_get_arg(0);
            $this->countryCode = func_get_arg(1);
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
        $json['value']       = $this->value;
        $json['countryCode'] = $this->countryCode;

        return array_merge($json, $this->additionalProperties);
    }
}
