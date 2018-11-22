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
class BransjeData implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @var integer|null $bransjeKodeField public property
     */
    public $bransjeKodeField;

    /**
     * @todo Write general description for this property
     * @var string|null $bransjeTekstField public property
     */
    public $bransjeTekstField;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param integer $bransjeKodeField  Initialization value for $this->bransjeKodeField
     * @param string  $bransjeTekstField Initialization value for $this->bransjeTekstField
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->bransjeKodeField  = func_get_arg(0);
            $this->bransjeTekstField = func_get_arg(1);
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
        $json['bransjeKodeField']  = $this->bransjeKodeField;
        $json['bransjeTekstField'] = $this->bransjeTekstField;

        return array_merge($json, $this->additionalProperties);
    }
}
