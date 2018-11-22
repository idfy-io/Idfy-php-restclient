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
class LeiEntityAddress implements JsonSerializable
{
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
     * @todo Write general description for this property
     * @maps FirstAddressLine
     * @var string|null $firstAddressLine public property
     */
    public $firstAddressLine;

    /**
     * @todo Write general description for this property
     * @maps AdditionalAddressLine
     * @var array|null $additionalAddressLine public property
     */
    public $additionalAddressLine;

    /**
     * @todo Write general description for this property
     * @maps PostalCode
     * @var string|null $postalCode public property
     */
    public $postalCode;

    /**
     * @todo Write general description for this property
     * @maps Region
     * @var string|null $region public property
     */
    public $region;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string $city                  Initialization value for $this->city
     * @param string $country               Initialization value for $this->country
     * @param string $firstAddressLine      Initialization value for $this->firstAddressLine
     * @param array  $additionalAddressLine Initialization value for $this->additionalAddressLine
     * @param string $postalCode            Initialization value for $this->postalCode
     * @param string $region                Initialization value for $this->region
     */
    public function __construct()
    {
        if (6 == func_num_args()) {
            $this->city                  = func_get_arg(0);
            $this->country               = func_get_arg(1);
            $this->firstAddressLine      = func_get_arg(2);
            $this->additionalAddressLine = func_get_arg(3);
            $this->postalCode            = func_get_arg(4);
            $this->region                = func_get_arg(5);
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
        $json['City']                  = $this->city;
        $json['Country']               = $this->country;
        $json['FirstAddressLine']      = $this->firstAddressLine;
        $json['AdditionalAddressLine'] = $this->additionalAddressLine;
        $json['PostalCode']            = $this->postalCode;
        $json['Region']                = $this->region;

        return array_merge($json, $this->additionalProperties);
    }
}
