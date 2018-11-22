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
class LeiLegalForm implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @maps OtherLegalForm
     * @var string|null $otherLegalForm public property
     */
    public $otherLegalForm;

    /**
     * @todo Write general description for this property
     * @maps EntityLegalFormCode
     * @var string|null $entityLegalFormCode public property
     */
    public $entityLegalFormCode;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string $otherLegalForm      Initialization value for $this->otherLegalForm
     * @param string $entityLegalFormCode Initialization value for $this->entityLegalFormCode
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->otherLegalForm      = func_get_arg(0);
            $this->entityLegalFormCode = func_get_arg(1);
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
        $json['OtherLegalForm']      = $this->otherLegalForm;
        $json['EntityLegalFormCode'] = $this->entityLegalFormCode;

        return array_merge($json, $this->additionalProperties);
    }
}
