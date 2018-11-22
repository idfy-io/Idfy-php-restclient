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
class OrganizationInfo implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @var string|null $orgNo public property
     */
    public $orgNo;

    /**
     * @todo Write general description for this property
     * @var string|null $companyName public property
     */
    public $companyName;

    /**
     * @todo Write general description for this property
     * @var string|null $countryCode public property
     */
    public $countryCode;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string $orgNo       Initialization value for $this->orgNo
     * @param string $companyName Initialization value for $this->companyName
     * @param string $countryCode Initialization value for $this->countryCode
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->orgNo       = func_get_arg(0);
            $this->companyName = func_get_arg(1);
            $this->countryCode = func_get_arg(2);
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
        $json['orgNo']       = $this->orgNo;
        $json['companyName'] = $this->companyName;
        $json['countryCode'] = $this->countryCode;

        return array_merge($json, $this->additionalProperties);
    }
}
