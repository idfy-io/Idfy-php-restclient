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
class SignatureObject implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @maps RequirementsDescription
     * @var string|null $requirementsDescription public property
     */
    public $requirementsDescription;

    /**
     * @todo Write general description for this property
     * @maps Required
     * @var \IdfyLib\Models\RequiredSignatures|null $required public property
     */
    public $required;

    /**
     * @todo Write general description for this property
     * @maps Others
     * @var \IdfyLib\Models\OtherSignatures|null $others public property
     */
    public $others;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string             $requirementsDescription Initialization value for $this->requirementsDescription
     * @param RequiredSignatures $required                Initialization value for $this->required
     * @param OtherSignatures    $others                  Initialization value for $this->others
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->requirementsDescription = func_get_arg(0);
            $this->required                = func_get_arg(1);
            $this->others                  = func_get_arg(2);
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
        $json['RequirementsDescription'] = $this->requirementsDescription;
        $json['Required']                = $this->required;
        $json['Others']                  = $this->others;

        return array_merge($json, $this->additionalProperties);
    }
}
