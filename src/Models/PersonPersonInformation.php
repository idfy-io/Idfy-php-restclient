<?php
/*
 * Idfy
 *
 * This file was automatically generated for Idfy by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace IdfyLib\Models;

use JsonSerializable;
use IdfyLib\Utils\DateTimeHelper;

/**
 * @todo Write general description for this model
 */
class PersonPersonInformation implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @maps Firstname
     * @var string|null $firstname public property
     */
    public $firstname;

    /**
     * @todo Write general description for this property
     * @maps Middlename
     * @var string|null $middlename public property
     */
    public $middlename;

    /**
     * @todo Write general description for this property
     * @maps Lastname
     * @var string|null $lastname public property
     */
    public $lastname;

    /**
     * @todo Write general description for this property
     * @maps DateOfBirth
     * @var string|null $dateOfBirth public property
     */
    public $dateOfBirth;

    /**
     * @todo Write general description for this property
     * @maps Address
     * @var string|null $address public property
     */
    public $address;

    /**
     * @todo Write general description for this property
     * @maps ZipCode
     * @var string|null $zipCode public property
     */
    public $zipCode;

    /**
     * @todo Write general description for this property
     * @maps City
     * @var string|null $city public property
     */
    public $city;

    /**
     * @todo Write general description for this property
     * @maps Mobile
     * @var string|null $mobile public property
     */
    public $mobile;

    /**
     * @todo Write general description for this property
     * @maps Phone
     * @var string|null $phone public property
     */
    public $phone;

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
     * @todo Write general description for this property
     * @maps Dead
     * @factory \IdfyLib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime|null $dead public property
     */
    public $dead;

    /**
     * @todo Write general description for this property
     * @maps Source
     * @var string|null $source public property
     */
    public $source;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string    $firstname   Initialization value for $this->firstname
     * @param string    $middlename  Initialization value for $this->middlename
     * @param string    $lastname    Initialization value for $this->lastname
     * @param string    $dateOfBirth Initialization value for $this->dateOfBirth
     * @param string    $address     Initialization value for $this->address
     * @param string    $zipCode     Initialization value for $this->zipCode
     * @param string    $city        Initialization value for $this->city
     * @param string    $mobile      Initialization value for $this->mobile
     * @param string    $phone       Initialization value for $this->phone
     * @param string    $gender      Initialization value for $this->gender
     * @param string    $rawJson     Initialization value for $this->rawJson
     * @param string    $requestId   Initialization value for $this->requestId
     * @param \DateTime $dead        Initialization value for $this->dead
     * @param string    $source      Initialization value for $this->source
     */
    public function __construct()
    {
        if (14 == func_num_args()) {
            $this->firstname   = func_get_arg(0);
            $this->middlename  = func_get_arg(1);
            $this->lastname    = func_get_arg(2);
            $this->dateOfBirth = func_get_arg(3);
            $this->address     = func_get_arg(4);
            $this->zipCode     = func_get_arg(5);
            $this->city        = func_get_arg(6);
            $this->mobile      = func_get_arg(7);
            $this->phone       = func_get_arg(8);
            $this->gender      = func_get_arg(9);
            $this->rawJson     = func_get_arg(10);
            $this->requestId   = func_get_arg(11);
            $this->dead        = func_get_arg(12);
            $this->source      = func_get_arg(13);
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
        $json['Firstname']   = $this->firstname;
        $json['Middlename']  = $this->middlename;
        $json['Lastname']    = $this->lastname;
        $json['DateOfBirth'] = $this->dateOfBirth;
        $json['Address']     = $this->address;
        $json['ZipCode']     = $this->zipCode;
        $json['City']        = $this->city;
        $json['Mobile']      = $this->mobile;
        $json['Phone']       = $this->phone;
        $json['Gender']      = $this->gender;
        $json['RawJson']     = $this->rawJson;
        $json['RequestId']   = $this->requestId;
        $json['Dead']        = isset($this->dead) ?
            DateTimeHelper::toRfc3339DateTime($this->dead) : null;
        $json['Source']      = $this->source;

        return array_merge($json, $this->additionalProperties);
    }
}
