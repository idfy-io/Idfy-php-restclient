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
class SignSuccess implements JsonSerializable
{
    /**
     * The unique id retrieved from the signature method provider
     * @var string|null $signatureMethodUniqueId public property
     */
    public $signatureMethodUniqueId;

    /**
     * The signers first name
     * @var string|null $firstName public property
     */
    public $firstName;

    /**
     * The signers middle name
     * @var string|null $middleName public property
     */
    public $middleName;

    /**
     * The signers last name
     * @var string|null $lastName public property
     */
    public $lastName;

    /**
     * The signers full name
     * @var string|null $fullName public property
     */
    public $fullName;

    /**
     * The signers date of birth
     * @var string|null $dateOfBirth public property
     */
    public $dateOfBirth;

    /**
     * The signaturemethod used to sign the document
     * @var string|null $signatureMethod public property
     */
    public $signatureMethod;

    /**
     * Signed time (ISO 8601)
     * @factory \IdfyLib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime|null $signedTime public property
     */
    public $signedTime;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string    $signatureMethodUniqueId Initialization value for $this->signatureMethodUniqueId
     * @param string    $firstName               Initialization value for $this->firstName
     * @param string    $middleName              Initialization value for $this->middleName
     * @param string    $lastName                Initialization value for $this->lastName
     * @param string    $fullName                Initialization value for $this->fullName
     * @param string    $dateOfBirth             Initialization value for $this->dateOfBirth
     * @param string    $signatureMethod         Initialization value for $this->signatureMethod
     * @param \DateTime $signedTime              Initialization value for $this->signedTime
     */
    public function __construct()
    {
        if (8 == func_num_args()) {
            $this->signatureMethodUniqueId = func_get_arg(0);
            $this->firstName               = func_get_arg(1);
            $this->middleName              = func_get_arg(2);
            $this->lastName                = func_get_arg(3);
            $this->fullName                = func_get_arg(4);
            $this->dateOfBirth             = func_get_arg(5);
            $this->signatureMethod         = func_get_arg(6);
            $this->signedTime              = func_get_arg(7);
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
        $json['signatureMethodUniqueId'] = $this->signatureMethodUniqueId;
        $json['firstName']               = $this->firstName;
        $json['middleName']              = $this->middleName;
        $json['lastName']                = $this->lastName;
        $json['fullName']                = $this->fullName;
        $json['dateOfBirth']             = $this->dateOfBirth;
        $json['signatureMethod']         = $this->signatureMethod;
        $json['signedTime']              = isset($this->signedTime) ?
            DateTimeHelper::toRfc3339DateTime($this->signedTime) : null;

        return array_merge($json, $this->additionalProperties);
    }
}
