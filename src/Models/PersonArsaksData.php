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
class PersonArsaksData implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @var string|null $arsaksKodeField public property
     */
    public $arsaksKodeField;

    /**
     * @todo Write general description for this property
     * @var string|null $arsaksTekstField public property
     */
    public $arsaksTekstField;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string $arsaksKodeField  Initialization value for $this->arsaksKodeField
     * @param string $arsaksTekstField Initialization value for $this->arsaksTekstField
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->arsaksKodeField  = func_get_arg(0);
            $this->arsaksTekstField = func_get_arg(1);
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
        $json['arsaksKodeField']  = $this->arsaksKodeField;
        $json['arsaksTekstField'] = $this->arsaksTekstField;

        return array_merge($json, $this->additionalProperties);
    }
}
