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
class LeiNormalization implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @maps Cleaned
     * @var string|null $cleaned public property
     */
    public $cleaned;

    /**
     * @todo Write general description for this property
     * @maps Normalized
     * @var string|null $normalized public property
     */
    public $normalized;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string $cleaned    Initialization value for $this->cleaned
     * @param string $normalized Initialization value for $this->normalized
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->cleaned    = func_get_arg(0);
            $this->normalized = func_get_arg(1);
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
        $json['Cleaned']    = $this->cleaned;
        $json['Normalized'] = $this->normalized;

        return array_merge($json, $this->additionalProperties);
    }
}
