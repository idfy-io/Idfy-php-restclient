<?php
/*
 * Idfy
 *
 * This file was automatically generated for Idfy by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace IdfyLib\Models;

use JsonSerializable;

/**
 *Dealer information
 */
class DealerInfo implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @maps Id
     * @var string|null $id public property
     */
    public $id;

    /**
     * @todo Write general description for this property
     * @maps Reference
     * @var string|null $reference public property
     */
    public $reference;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string $id        Initialization value for $this->id
     * @param string $reference Initialization value for $this->reference
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->id        = func_get_arg(0);
            $this->reference = func_get_arg(1);
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
        $json['Id']        = $this->id;
        $json['Reference'] = $this->reference;

        return array_merge($json, $this->additionalProperties);
    }
}
