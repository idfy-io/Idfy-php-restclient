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
class Identifikasjon implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @var integer|null $orgnrField public property
     */
    public $orgnrField;

    /**
     * @todo Write general description for this property
     * @var integer|null $dunsnrField public property
     */
    public $dunsnrField;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param integer $orgnrField  Initialization value for $this->orgnrField
     * @param integer $dunsnrField Initialization value for $this->dunsnrField
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->orgnrField  = func_get_arg(0);
            $this->dunsnrField = func_get_arg(1);
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
        $json['orgnrField']  = $this->orgnrField;
        $json['dunsnrField'] = $this->dunsnrField;

        return array_merge($json, $this->additionalProperties);
    }
}
