<?php
/*
 * Idfy
 *
 * This file was automatically generated for Idfy by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace IdfyLib\Models;

use JsonSerializable;

/**
 *Other account settings
 */
class Settings implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @maps SMSSender
     * @var string|null $sMSSender public property
     */
    public $sMSSender;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string $sMSSender Initialization value for $this->sMSSender
     */
    public function __construct()
    {
        if (1 == func_num_args()) {
            $this->sMSSender = func_get_arg(0);
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
        $json['SMSSender'] = $this->sMSSender;

        return array_merge($json, $this->additionalProperties);
    }
}
