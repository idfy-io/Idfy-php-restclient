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
class Meldinger implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @var integer|null $meldingsKodeField public property
     */
    public $meldingsKodeField;

    /**
     * @todo Write general description for this property
     * @var string|null $meldingsTekstField public property
     */
    public $meldingsTekstField;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param integer $meldingsKodeField  Initialization value for $this->meldingsKodeField
     * @param string  $meldingsTekstField Initialization value for $this->meldingsTekstField
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->meldingsKodeField  = func_get_arg(0);
            $this->meldingsTekstField = func_get_arg(1);
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
        $json['meldingsKodeField']  = $this->meldingsKodeField;
        $json['meldingsTekstField'] = $this->meldingsTekstField;

        return array_merge($json, $this->additionalProperties);
    }
}
