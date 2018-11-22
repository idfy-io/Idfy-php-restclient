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
class ClaimLite implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @maps Type
     * @var string|null $type public property
     */
    public $type;

    /**
     * @todo Write general description for this property
     * @maps Value
     * @var string|null $value public property
     */
    public $value;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string $type  Initialization value for $this->type
     * @param string $value Initialization value for $this->value
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->type  = func_get_arg(0);
            $this->value = func_get_arg(1);
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
        $json['Type']  = $this->type;
        $json['Value'] = $this->value;

        return array_merge($json, $this->additionalProperties);
    }
}
