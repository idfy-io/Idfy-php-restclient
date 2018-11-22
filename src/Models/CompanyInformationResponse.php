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
class CompanyInformationResponse implements JsonSerializable
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
     * @maps Country
     * @var string|null $country public property
     */
    public $country;

    /**
     * @todo Write general description for this property
     * @maps RawJson
     * @var string|null $rawJson public property
     */
    public $rawJson;

    /**
     * @todo Write general description for this property
     * @maps Phone
     * @var string|null $phone public property
     */
    public $phone;

    /**
     * @todo Write general description for this property
     * @maps Mobile
     * @var string|null $mobile public property
     */
    public $mobile;

    /**
     * @todo Write general description for this property
     * @maps RequestId
     * @var string|null $requestId public property
     */
    public $requestId;

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
     * @param string $country    Initialization value for $this->country
     * @param string $rawJson    Initialization value for $this->rawJson
     * @param string $phone      Initialization value for $this->phone
     * @param string $mobile     Initialization value for $this->mobile
     * @param string $requestId  Initialization value for $this->requestId
     */
    public function __construct()
    {
        if (10 == func_num_args()) {
            $this->orgNr      = func_get_arg(0);
            $this->orgName    = func_get_arg(1);
            $this->address    = func_get_arg(2);
            $this->postalCode = func_get_arg(3);
            $this->city       = func_get_arg(4);
            $this->country    = func_get_arg(5);
            $this->rawJson    = func_get_arg(6);
            $this->phone      = func_get_arg(7);
            $this->mobile     = func_get_arg(8);
            $this->requestId  = func_get_arg(9);
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
        $json['Country']    = $this->country;
        $json['RawJson']    = $this->rawJson;
        $json['Phone']      = $this->phone;
        $json['Mobile']     = $this->mobile;
        $json['RequestId']  = $this->requestId;

        return array_merge($json, $this->additionalProperties);
    }
}
