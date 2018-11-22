<?php
/*
 * Idfy
 *
 * This file was automatically generated for Idfy by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace IdfyLib\Models;

use JsonSerializable;

/**
 *Company address
 */
class Address implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @maps Address1
     * @var string|null $address1 public property
     */
    public $address1;

    /**
     * @todo Write general description for this property
     * @maps Address2
     * @var string|null $address2 public property
     */
    public $address2;

    /**
     * @todo Write general description for this property
     * @maps PostalCode
     * @var string|null $postalCode public property
     */
    public $postalCode;

    /**
     * @todo Write general description for this property
     * @maps City
     * @var string|null $city public property
     */
    public $city;

    /**
     * @todo Write general description for this property
     * @maps Country
     * @var string|null $country public property
     */
    public $country;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string $address1   Initialization value for $this->address1
     * @param string $address2   Initialization value for $this->address2
     * @param string $postalCode Initialization value for $this->postalCode
     * @param string $city       Initialization value for $this->city
     * @param string $country    Initialization value for $this->country
     */
    public function __construct()
    {
        if (5 == func_num_args()) {
            $this->address1   = func_get_arg(0);
            $this->address2   = func_get_arg(1);
            $this->postalCode = func_get_arg(2);
            $this->city       = func_get_arg(3);
            $this->country    = func_get_arg(4);
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
        $json['Address1']   = $this->address1;
        $json['Address2']   = $this->address2;
        $json['PostalCode'] = $this->postalCode;
        $json['City']       = $this->city;
        $json['Country']    = $this->country;

        return array_merge($json, $this->additionalProperties);
    }
}
