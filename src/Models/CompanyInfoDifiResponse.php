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
class CompanyInfoDifiResponse implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @maps OrgNr
     * @var string|null $orgNr public property
     */
    public $orgNr;

    /**
     * @todo Write general description for this property
     * @maps OrgName
     * @var string|null $orgName public property
     */
    public $orgName;

    /**
     * @todo Write general description for this property
     * @maps Address
     * @var string|null $address public property
     */
    public $address;

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
     * @maps Website
     * @var string|null $website public property
     */
    public $website;

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
     * @param string $orgNr      Initialization value for $this->orgNr
     * @param string $orgName    Initialization value for $this->orgName
     * @param string $address    Initialization value for $this->address
     * @param string $postalCode Initialization value for $this->postalCode
     * @param string $city       Initialization value for $this->city
     * @param string $website    Initialization value for $this->website
     * @param string $country    Initialization value for $this->country
     */
    public function __construct()
    {
        if (7 == func_num_args()) {
            $this->orgNr      = func_get_arg(0);
            $this->orgName    = func_get_arg(1);
            $this->address    = func_get_arg(2);
            $this->postalCode = func_get_arg(3);
            $this->city       = func_get_arg(4);
            $this->website    = func_get_arg(5);
            $this->country    = func_get_arg(6);
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
        $json['OrgNr']      = $this->orgNr;
        $json['OrgName']    = $this->orgName;
        $json['Address']    = $this->address;
        $json['PostalCode'] = $this->postalCode;
        $json['City']       = $this->city;
        $json['Website']    = $this->website;
        $json['Country']    = $this->country;

        return array_merge($json, $this->additionalProperties);
    }
}
