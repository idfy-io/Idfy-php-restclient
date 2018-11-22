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
class ValidatedSigners implements JsonSerializable
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
     * @todo Write general description for this property
     * @var bool|null $valid public property
     */
    public $valid;

    /**
     * @todo Write general description for this property
     * @var string|null $name public property
     */
    public $name;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string $identificator     Initialization value for $this->identificator
     * @param string $identificatorType Initialization value for $this->identificatorType
     * @param bool   $valid             Initialization value for $this->valid
     * @param string $name              Initialization value for $this->name
     */
    public function __construct()
    {
        if (4 == func_num_args()) {
            $this->identificator     = func_get_arg(0);
            $this->identificatorType = func_get_arg(1);
            $this->valid             = func_get_arg(2);
            $this->name              = func_get_arg(3);
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
        $json['valid']             = $this->valid;
        $json['name']              = $this->name;

        return array_merge($json, $this->additionalProperties);
    }
}
