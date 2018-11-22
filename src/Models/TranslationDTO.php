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
class TranslationDTO implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @var integer|null $id public property
     */
    public $id;

    /**
     * @todo Write general description for this property
     * @var string|null $key public property
     */
    public $key;

    /**
     * @todo Write general description for this property
     * @var string|null $value public property
     */
    public $value;

    /**
     * @todo Write general description for this property
     * @var string|null $language public property
     */
    public $language;

    /**
     * @todo Write general description for this property
     * @var string|null $defaultValue public property
     */
    public $defaultValue;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param integer $id           Initialization value for $this->id
     * @param string  $key          Initialization value for $this->key
     * @param string  $value        Initialization value for $this->value
     * @param string  $language     Initialization value for $this->language
     * @param string  $defaultValue Initialization value for $this->defaultValue
     */
    public function __construct()
    {
        if (5 == func_num_args()) {
            $this->id           = func_get_arg(0);
            $this->key          = func_get_arg(1);
            $this->value        = func_get_arg(2);
            $this->language     = func_get_arg(3);
            $this->defaultValue = func_get_arg(4);
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
        $json['id']           = $this->id;
        $json['key']          = $this->key;
        $json['value']        = $this->value;
        $json['language']     = $this->language;
        $json['defaultValue'] = $this->defaultValue;

        return array_merge($json, $this->additionalProperties);
    }
}
