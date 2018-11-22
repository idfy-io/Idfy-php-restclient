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
class ExtendedDocumentSignature implements JsonSerializable
{
    /**
     * The signer Id
     * @var string|null $signerId public property
     */
    public $signerId;

    /**
     * Your reference for the signer
     * @var string|null $externalSignerId public property
     */
    public $externalSignerId;

    /**
     * The signature method used to sign the document
     * @var string|null $signatureMethod public property
     */
    public $signatureMethod;

    /**
     * Full name of the signer retrieved from the signature-method provider
     * @var string|null $fullName public property
     */
    public $fullName;

    /**
     * First name of the signer
     * @var string|null $firstName public property
     */
    public $firstName;

    /**
     * Last name of the signer
     * @var string|null $lastName public property
     */
    public $lastName;

    /**
     * Middle name of the signer
     * @var string|null $middleName public property
     */
    public $middleName;

    /**
     * The time signature was registered (ISO 8601)
     * @factory \IdfyLib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime|null $signedTime public property
     */
    public $signedTime;

    /**
     * The signers date of birth (ddMMyy)
     * @var string|null $dateOfBirth public property
     */
    public $dateOfBirth;

    /**
     * The signature method unique Id
     * @var string|null $signatureMethodUniqueId public property
     */
    public $signatureMethodUniqueId;

    /**
     * The signers social security number, this will get a value if you specified that you wanted social
     * security number in your request (if you are allowed to)
     * @var \IdfyLib\Models\SocialSecurityNumber|null $socialSecurityNumber public property
     */
    public $socialSecurityNumber;

    /**
     * The Ip address of the signer
     * @var string|null $clientIp public property
     */
    public $clientIp;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string                $signerId                Initialization value for $this->signerId
     * @param string                $externalSignerId        Initialization value for $this->externalSignerId
     * @param string                $signatureMethod         Initialization value for $this->signatureMethod
     * @param string                $fullName                Initialization value for $this->fullName
     * @param string                $firstName               Initialization value for $this->firstName
     * @param string                $lastName                Initialization value for $this->lastName
     * @param string                $middleName              Initialization value for $this->middleName
     * @param \DateTime             $signedTime              Initialization value for $this->signedTime
     * @param string                $dateOfBirth             Initialization value for $this->dateOfBirth
     * @param string                $signatureMethodUniqueId Initialization value for $this->signatureMethodUniqueId
     * @param SocialSecurityNumber  $socialSecurityNumber    Initialization value for $this->socialSecurityNumber
     * @param string                $clientIp                Initialization value for $this->clientIp
     */
    public function __construct()
    {
        if (12 == func_num_args()) {
            $this->signerId                = func_get_arg(0);
            $this->externalSignerId        = func_get_arg(1);
            $this->signatureMethod         = func_get_arg(2);
            $this->fullName                = func_get_arg(3);
            $this->firstName               = func_get_arg(4);
            $this->lastName                = func_get_arg(5);
            $this->middleName              = func_get_arg(6);
            $this->signedTime              = func_get_arg(7);
            $this->dateOfBirth             = func_get_arg(8);
            $this->signatureMethodUniqueId = func_get_arg(9);
            $this->socialSecurityNumber    = func_get_arg(10);
            $this->clientIp                = func_get_arg(11);
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
        $json['signerId']                = $this->signerId;
        $json['externalSignerId']        = $this->externalSignerId;
        $json['signatureMethod']         = $this->signatureMethod;
        $json['fullName']                = $this->fullName;
        $json['firstName']               = $this->firstName;
        $json['lastName']                = $this->lastName;
        $json['middleName']              = $this->middleName;
        $json['signedTime']              = isset($this->signedTime) ?
            DateTimeHelper::toRfc3339DateTime($this->signedTime) : null;
        $json['dateOfBirth']             = $this->dateOfBirth;
        $json['signatureMethodUniqueId'] = $this->signatureMethodUniqueId;
        $json['socialSecurityNumber']    = $this->socialSecurityNumber;
        $json['clientIp']                = $this->clientIp;

        return array_merge($json, $this->additionalProperties);
    }
}
