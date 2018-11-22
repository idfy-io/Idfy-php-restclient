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
class Security implements JsonSerializable
{
    /**
     * (Coming soon) The link can only be used one time
     * @var bool|null $oneTimeUse public property
     */
    public $oneTimeUse;

    /**
     * (Coming soon) Define a list of IP's that are allowed to see / sign the document
     * @var array|null $ipWhiteList public property
     */
    public $ipWhiteList;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param bool  $oneTimeUse  Initialization value for $this->oneTimeUse
     * @param array $ipWhiteList Initialization value for $this->ipWhiteList
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->oneTimeUse  = func_get_arg(0);
            $this->ipWhiteList = func_get_arg(1);
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
        $json['oneTimeUse']  = $this->oneTimeUse;
        $json['ipWhiteList'] = $this->ipWhiteList;

        return array_merge($json, $this->additionalProperties);
    }
}
