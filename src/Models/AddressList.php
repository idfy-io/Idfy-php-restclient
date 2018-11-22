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
class AddressList implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @var string|null $countryName public property
     */
    public $countryName;

    /**
     * @todo Write general description for this property
     * @var string|null $countryCode public property
     */
    public $countryCode;

    /**
     * @todo Write general description for this property
     * @var string|null $street public property
     */
    public $street;

    /**
     * @todo Write general description for this property
     * @var string|null $postCode public property
     */
    public $postCode;

    /**
     * @todo Write general description for this property
     * @var string|null $city public property
     */
    public $city;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string $countryName Initialization value for $this->countryName
     * @param string $countryCode Initialization value for $this->countryCode
     * @param string $street      Initialization value for $this->street
     * @param string $postCode    Initialization value for $this->postCode
     * @param string $city        Initialization value for $this->city
     */
    public function __construct()
    {
        if (5 == func_num_args()) {
            $this->countryName = func_get_arg(0);
            $this->countryCode = func_get_arg(1);
            $this->street      = func_get_arg(2);
            $this->postCode    = func_get_arg(3);
            $this->city        = func_get_arg(4);
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
        $json['countryName'] = $this->countryName;
        $json['countryCode'] = $this->countryCode;
        $json['street']      = $this->street;
        $json['postCode']    = $this->postCode;
        $json['city']        = $this->city;

        return array_merge($json, $this->additionalProperties);
    }
}
