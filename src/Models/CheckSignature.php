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
class CheckSignature implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @maps Name
     * @var string|null $name public property
     */
    public $name;

    /**
     * @todo Write general description for this property
     * @maps DateOfBirth
     * @var string|null $dateOfBirth public property
     */
    public $dateOfBirth;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string $name        Initialization value for $this->name
     * @param string $dateOfBirth Initialization value for $this->dateOfBirth
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->name        = func_get_arg(0);
            $this->dateOfBirth = func_get_arg(1);
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
        $json['Name']        = $this->name;
        $json['DateOfBirth'] = $this->dateOfBirth;

        return array_merge($json, $this->additionalProperties);
    }
}
