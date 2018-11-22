<?php
/*
 * Idfy
 *
 * This file was automatically generated for Idfy by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace IdfyLib\Models;

use JsonSerializable;

/**
 *The reponse for the identity process. Contains users name, id number etc
 */
class IdentificationResponse implements JsonSerializable
{
    /**
     * The fullname of the user as reported back from the IdentityProvider
     * @maps Name
     * @var string|null $name public property
     */
    public $name;

    /**
     * The first name of the user
     * @maps FirstName
     * @var string|null $firstName public property
     */
    public $firstName;

    /**
     * The middle name of the user (not always available)
     * @maps MiddleName
     * @var string|null $middleName public property
     */
    public $middleName;

    /**
     * The last name of the user
     * @maps LastName
     * @var string|null $lastName public property
     */
    public $lastName;

    /**
     * The users date of birth (not always available)
     * @maps DateOfBirth
     * @var string|null $dateOfBirth public property
     */
    public $dateOfBirth;

    /**
     * The status of the identification process. If not success the identification process is not completed.
     * @maps Status
     * @var string|null $status public property
     */
    public $status;

    /**
     * The social security number for the user (if allowed and if the GetSocialSecurityNumber is set to
     * true in the request)
     * @maps SocialSecurityNumber
     * @var string|null $socialSecurityNumber public property
     */
    public $socialSecurityNumber;

    /**
     * The uniqueID from the e-ID, this ID is unique for the user and is the same every time the user logs
     * on. This is not a sensitiv ID and you could store this to identify the user in you database.
     *
     * Remark: The Swedish BankID do not have an unique ID.
     * @maps IdentityProviderUniqueId
     * @var string|null $identityProviderUniqueId public property
     */
    public $identityProviderUniqueId;

    /**
     * The identityprovider type (Norwegian BanKID, SwedishBankID, Nemid, etc)
     * @maps IdentityProvider
     * @var string|null $identityProvider public property
     */
    public $identityProvider;

    /**
     * Information about error if the identification process failed. (Only set if an error occured, if not
     * is null)
     * @maps Error
     * @var \IdfyLib\Models\Error|null $error public property
     */
    public $error;

    /**
     * Information about the users environment as seen by IdentiSign, can be used to compare with own data.
     * @maps EnvironmentInfo
     * @var \IdfyLib\Models\EnvironmentInfo|null $environmentInfo public property
     */
    public $environmentInfo;

    /**
     * A dicitonary with extra information from each identityprovider, and extra services. See developer
     * documentation for more information
     * @maps MetaData
     * @var array|null $metaData public property
     */
    public $metaData;

    /**
     * The RequestId
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
     * @param string          $name                     Initialization value for $this->name
     * @param string          $firstName                Initialization value for $this->firstName
     * @param string          $middleName               Initialization value for $this->middleName
     * @param string          $lastName                 Initialization value for $this->lastName
     * @param string          $dateOfBirth              Initialization value for $this->dateOfBirth
     * @param string          $status                   Initialization value for $this->status
     * @param string          $socialSecurityNumber     Initialization value for $this->socialSecurityNumber
     * @param string          $identityProviderUniqueId Initialization value for $this->identityProviderUniqueId
     * @param string          $identityProvider         Initialization value for $this->identityProvider
     * @param Error           $error                    Initialization value for $this->error
     * @param EnvironmentInfo $environmentInfo          Initialization value for $this->environmentInfo
     * @param array           $metaData                 Initialization value for $this->metaData
     * @param string          $requestId                Initialization value for $this->requestId
     */
    public function __construct()
    {
        if (13 == func_num_args()) {
            $this->name                     = func_get_arg(0);
            $this->firstName                = func_get_arg(1);
            $this->middleName               = func_get_arg(2);
            $this->lastName                 = func_get_arg(3);
            $this->dateOfBirth              = func_get_arg(4);
            $this->status                   = func_get_arg(5);
            $this->socialSecurityNumber     = func_get_arg(6);
            $this->identityProviderUniqueId = func_get_arg(7);
            $this->identityProvider         = func_get_arg(8);
            $this->error                    = func_get_arg(9);
            $this->environmentInfo          = func_get_arg(10);
            $this->metaData                 = func_get_arg(11);
            $this->requestId                = func_get_arg(12);
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
        $json['Name']                     = $this->name;
        $json['FirstName']                = $this->firstName;
        $json['MiddleName']               = $this->middleName;
        $json['LastName']                 = $this->lastName;
        $json['DateOfBirth']              = $this->dateOfBirth;
        $json['Status']                   = $this->status;
        $json['SocialSecurityNumber']     = $this->socialSecurityNumber;
        $json['IdentityProviderUniqueId'] = $this->identityProviderUniqueId;
        $json['IdentityProvider']         = $this->identityProvider;
        $json['Error']                    = $this->error;
        $json['EnvironmentInfo']          = $this->environmentInfo;
        $json['MetaData']                 = $this->metaData;
        $json['RequestId']                = $this->requestId;

        return array_merge($json, $this->additionalProperties);
    }
}
