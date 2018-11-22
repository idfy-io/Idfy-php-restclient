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
class PersonIdentifikasjon implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @var integer|null $internrefField public property
     */
    public $internrefField;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param integer $internrefField Initialization value for $this->internrefField
     */
    public function __construct()
    {
        if (1 == func_num_args()) {
            $this->internrefField = func_get_arg(0);
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
        $json['internrefField'] = $this->internrefField;

        return array_merge($json, $this->additionalProperties);
    }
}
