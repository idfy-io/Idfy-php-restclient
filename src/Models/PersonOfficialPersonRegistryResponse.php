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
class PersonOfficialPersonRegistryResponse implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @maps FirstName
     * @var string|null $firstName public property
     */
    public $firstName;

    /**
     * @todo Write general description for this property
     * @maps LastName
     * @var string|null $lastName public property
     */
    public $lastName;

    /**
     * @todo Write general description for this property
     * @maps MiddleName
     * @var string|null $middleName public property
     */
    public $middleName;

    /**
     * @todo Write general description for this property
     * @maps Fullname
     * @var string|null $fullname public property
     */
    public $fullname;

    /**
     * @todo Write general description for this property
     * @maps Address
     * @var string|null $address public property
     */
    public $address;

    /**
     * @todo Write general description for this property
     * @maps Address2
     * @var string|null $address2 public property
     */
    public $address2;

    /**
     * @todo Write general description for this property
     * @maps City
     * @var string|null $city public property
     */
    public $city;

    /**
     * @todo Write general description for this property
     * @maps PostalCode
     * @var string|null $postalCode public property
     */
    public $postalCode;

    /**
     * @todo Write general description for this property
     * @maps Gender
     * @var string|null $gender public property
     */
    public $gender;

    /**
     * @todo Write general description for this property
     * @maps RawJson
     * @var string|null $rawJson public property
     */
    public $rawJson;

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
     * @param string $firstName  Initialization value for $this->firstName
     * @param string $lastName   Initialization value for $this->lastName
     * @param string $middleName Initialization value for $this->middleName
     * @param string $fullname   Initialization value for $this->fullname
     * @param string $address    Initialization value for $this->address
     * @param string $address2   Initialization value for $this->address2
     * @param string $city       Initialization value for $this->city
     * @param string $postalCode Initialization value for $this->postalCode
     * @param string $gender     Initialization value for $this->gender
     * @param string $rawJson    Initialization value for $this->rawJson
     * @param string $requestId  Initialization value for $this->requestId
     */
    public function __construct()
    {
        if (11 == func_num_args()) {
            $this->firstName  = func_get_arg(0);
            $this->lastName   = func_get_arg(1);
            $this->middleName = func_get_arg(2);
            $this->fullname   = func_get_arg(3);
            $this->address    = func_get_arg(4);
            $this->address2   = func_get_arg(5);
            $this->city       = func_get_arg(6);
            $this->postalCode = func_get_arg(7);
            $this->gender     = func_get_arg(8);
            $this->rawJson    = func_get_arg(9);
            $this->requestId  = func_get_arg(10);
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
        $json['FirstName']  = $this->firstName;
        $json['LastName']   = $this->lastName;
        $json['MiddleName'] = $this->middleName;
        $json['Fullname']   = $this->fullname;
        $json['Address']    = $this->address;
        $json['Address2']   = $this->address2;
        $json['City']       = $this->city;
        $json['PostalCode'] = $this->postalCode;
        $json['Gender']     = $this->gender;
        $json['RawJson']    = $this->rawJson;
        $json['RequestId']  = $this->requestId;

        return array_merge($json, $this->additionalProperties);
    }
}
