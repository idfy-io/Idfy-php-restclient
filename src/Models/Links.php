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
class Links implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @var string|null $next public property
     */
    public $next;

    /**
     * @todo Write general description for this property
     * @var string|null $previous public property
     */
    public $previous;

    /**
     * @todo Write general description for this property
     * @var string|null $first public property
     */
    public $first;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string $next     Initialization value for $this->next
     * @param string $previous Initialization value for $this->previous
     * @param string $first    Initialization value for $this->first
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->next     = func_get_arg(0);
            $this->previous = func_get_arg(1);
            $this->first    = func_get_arg(2);
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
        $json['next']     = $this->next;
        $json['previous'] = $this->previous;
        $json['first']    = $this->first;

        return array_merge($json, $this->additionalProperties);
    }
}
