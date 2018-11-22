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
class IdentificationCompleteResponse implements JsonSerializable
{
    /**
     * Is the idenfication process done?
     * @maps Done
     * @var bool|null $done public property
     */
    public $done;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param bool $done Initialization value for $this->done
     */
    public function __construct()
    {
        if (1 == func_num_args()) {
            $this->done = func_get_arg(0);
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
        $json['Done'] = $this->done;

        return array_merge($json, $this->additionalProperties);
    }
}
