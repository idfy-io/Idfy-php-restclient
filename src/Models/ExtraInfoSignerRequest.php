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
class ExtraInfoSignerRequest implements JsonSerializable
{
    /**
     * Add a list of the addons you want to order, some of them requires specialproperties (read more in
     * our documentation). (Extra costs will occur for addons (except difi company info))
     * @var array|null $types public property
     */
    public $types;

    /**
     * Add a dictionay of special properties, see our documentation for more info
     * @var \IdfyLib\Models\SpecialProperties|null $specialProperties public property
     */
    public $specialProperties;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param array             $types             Initialization value for $this->types
     * @param SpecialProperties $specialProperties Initialization value for $this->specialProperties
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->types             = func_get_arg(0);
            $this->specialProperties = func_get_arg(1);
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
        $json['types']             = $this->types;
        $json['specialProperties'] = $this->specialProperties;

        return array_merge($json, $this->additionalProperties);
    }
}
