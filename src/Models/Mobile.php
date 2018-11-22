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
class Mobile implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @var string|null $countryCode public property
     */
    public $countryCode;

    /**
     * @todo Write general description for this property
     * @var string|null $number public property
     */
    public $number;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string $countryCode Initialization value for $this->countryCode
     * @param string $number      Initialization value for $this->number
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->countryCode = func_get_arg(0);
            $this->number      = func_get_arg(1);
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
        $json['countryCode'] = $this->countryCode;
        $json['number']      = $this->number;

        return array_merge($json, $this->additionalProperties);
    }
}
