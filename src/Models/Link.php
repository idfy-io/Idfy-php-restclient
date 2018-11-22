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
class Link implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @var string|null $href public property
     */
    public $href;

    /**
     * @todo Write general description for this property
     * @var string|null $rel public property
     */
    public $rel;

    /**
     * @todo Write general description for this property
     * @var string|null $type public property
     */
    public $type;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string $href Initialization value for $this->href
     * @param string $rel  Initialization value for $this->rel
     * @param string $type Initialization value for $this->type
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->href = func_get_arg(0);
            $this->rel  = func_get_arg(1);
            $this->type = func_get_arg(2);
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
        $json['href'] = $this->href;
        $json['rel']  = $this->rel;
        $json['type'] = $this->type;

        return array_merge($json, $this->additionalProperties);
    }
}
