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
class LanguageDTO implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @var integer|null $id public property
     */
    public $id;

    /**
     * @todo Write general description for this property
     * @var string|null $code public property
     */
    public $code;

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
     * @param integer $id   Initialization value for $this->id
     * @param string  $code Initialization value for $this->code
     * @param string  $name Initialization value for $this->name
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->id   = func_get_arg(0);
            $this->code = func_get_arg(1);
            $this->name = func_get_arg(2);
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
        $json['id']   = $this->id;
        $json['code'] = $this->code;
        $json['name'] = $this->name;

        return array_merge($json, $this->additionalProperties);
    }
}
