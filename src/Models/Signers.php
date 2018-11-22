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
class Signers implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @var string|null $identificator public property
     */
    public $identificator;

    /**
     * @todo Write general description for this property
     * @var string|null $identificatorType public property
     */
    public $identificatorType;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string $identificator     Initialization value for $this->identificator
     * @param string $identificatorType Initialization value for $this->identificatorType
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->identificator     = func_get_arg(0);
            $this->identificatorType = func_get_arg(1);
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
        $json['identificator']     = $this->identificator;
        $json['identificatorType'] = $this->identificatorType;

        return array_merge($json, $this->additionalProperties);
    }
}
