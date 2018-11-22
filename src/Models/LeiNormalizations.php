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
class LeiNormalizations implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @maps LegalName
     * @var \IdfyLib\Models\LeiNormalization|null $legalName public property
     */
    public $legalName;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param LeiNormalization $legalName Initialization value for $this->legalName
     */
    public function __construct()
    {
        if (1 == func_num_args()) {
            $this->legalName = func_get_arg(0);
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
        $json['LegalName'] = $this->legalName;

        return array_merge($json, $this->additionalProperties);
    }
}
