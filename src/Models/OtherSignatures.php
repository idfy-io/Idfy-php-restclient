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
class OtherSignatures implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @maps RequiredNumberOfOthers
     * @var integer|null $requiredNumberOfOthers public property
     */
    public $requiredNumberOfOthers;

    /**
     * @todo Write general description for this property
     * @maps List
     * @var \IdfyLib\Models\Signature[]|null $mlist public property
     */
    public $mlist;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param integer $requiredNumberOfOthers Initialization value for $this->requiredNumberOfOthers
     * @param array   $mlist                  Initialization value for $this->mlist
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->requiredNumberOfOthers = func_get_arg(0);
            $this->mlist                  = func_get_arg(1);
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
        $json['RequiredNumberOfOthers'] = $this->requiredNumberOfOthers;
        $json['List']                   = $this->mlist;

        return array_merge($json, $this->additionalProperties);
    }
}
