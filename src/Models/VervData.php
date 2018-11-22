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
class VervData implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @var string|null $vervKodeField public property
     */
    public $vervKodeField;

    /**
     * @todo Write general description for this property
     * @var string|null $vervTekstField public property
     */
    public $vervTekstField;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string $vervKodeField  Initialization value for $this->vervKodeField
     * @param string $vervTekstField Initialization value for $this->vervTekstField
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->vervKodeField  = func_get_arg(0);
            $this->vervTekstField = func_get_arg(1);
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
        $json['vervKodeField']  = $this->vervKodeField;
        $json['vervTekstField'] = $this->vervTekstField;

        return array_merge($json, $this->additionalProperties);
    }
}
