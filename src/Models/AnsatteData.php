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
class AnsatteData implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @var integer|null $ansatteArField public property
     */
    public $ansatteArField;

    /**
     * @todo Write general description for this property
     * @var integer|null $ansatteAntallField public property
     */
    public $ansatteAntallField;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param integer $ansatteArField     Initialization value for $this->ansatteArField
     * @param integer $ansatteAntallField Initialization value for $this->ansatteAntallField
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->ansatteArField     = func_get_arg(0);
            $this->ansatteAntallField = func_get_arg(1);
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
        $json['ansatteArField']     = $this->ansatteArField;
        $json['ansatteAntallField'] = $this->ansatteAntallField;

        return array_merge($json, $this->additionalProperties);
    }
}
