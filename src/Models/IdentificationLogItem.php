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
 *An identification historic item
 */
class IdentificationLogItem implements JsonSerializable
{
    /**
     * The sessionID for the identitication
     * @maps Id
     * @var string|null $id public property
     */
    public $id;

    /**
     * The fullname of the user as reported back from the IdentityProvider if the identification was a
     * success
     * @maps Name
     * @var string|null $name public property
     */
    public $name;

    /**
     * The status of the identification process. If not success the identification process is not completed.
     * @maps Status
     * @var string|null $status public property
     */
    public $status;

    /**
     * The IP-address of the user
     * @maps ClientIp
     * @var string|null $clientIp public property
     */
    public $clientIp;

    /**
     * The users user-agent (browser/device)
     * @maps UserAgent
     * @var string|null $userAgent public property
     */
    public $userAgent;

    /**
     * The identityprovider type (Norwegian BanKID, SwedishBankID, Nemid, etc)
     * @maps IdentityProviderType
     * @var string|null $identityProviderType public property
     */
    public $identityProviderType;

    /**
     * The language  used for the identification process
     * @maps Language
     * @var string|null $language public property
     */
    public $language;

    /**
     * The merchants reference to the identification process, this will also be used to identify an
     * identification in a detailed invoice.
     * @maps Externalid
     * @var string|null $externalid public property
     */
    public $externalid;

    /**
     * The error code for the error
     * @maps Errorcode
     * @var string|null $errorcode public property
     */
    public $errorcode;

    /**
     * The timestamp for the creation of the identification process
     * @maps Timestamp
     * @factory \IdfyLib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime|null $timestamp public property
     */
    public $timestamp;

    /**
     * Was an iFrame used
     * @var bool|null $iFrame public property
     */
    public $iFrame;

    /**
     * Was social securitynumber fetched
     * @maps SocialSecurityNumber
     * @var bool|null $socialSecurityNumber public property
     */
    public $socialSecurityNumber;

    /**
     * @todo Write general description for this property
     * @maps AccountId
     * @var string|null $accountId public property
     */
    public $accountId;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string    $id                   Initialization value for $this->id
     * @param string    $name                 Initialization value for $this->name
     * @param string    $status               Initialization value for $this->status
     * @param string    $clientIp             Initialization value for $this->clientIp
     * @param string    $userAgent            Initialization value for $this->userAgent
     * @param string    $identityProviderType Initialization value for $this->identityProviderType
     * @param string    $language             Initialization value for $this->language
     * @param string    $externalid           Initialization value for $this->externalid
     * @param string    $errorcode            Initialization value for $this->errorcode
     * @param \DateTime $timestamp            Initialization value for $this->timestamp
     * @param bool      $iFrame               Initialization value for $this->iFrame
     * @param bool      $socialSecurityNumber Initialization value for $this->socialSecurityNumber
     * @param string    $accountId            Initialization value for $this->accountId
     */
    public function __construct()
    {
        if (13 == func_num_args()) {
            $this->id                   = func_get_arg(0);
            $this->name                 = func_get_arg(1);
            $this->status               = func_get_arg(2);
            $this->clientIp             = func_get_arg(3);
            $this->userAgent            = func_get_arg(4);
            $this->identityProviderType = func_get_arg(5);
            $this->language             = func_get_arg(6);
            $this->externalid           = func_get_arg(7);
            $this->errorcode            = func_get_arg(8);
            $this->timestamp            = func_get_arg(9);
            $this->iFrame               = func_get_arg(10);
            $this->socialSecurityNumber = func_get_arg(11);
            $this->accountId            = func_get_arg(12);
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
        $json['Id']                   = $this->id;
        $json['Name']                 = $this->name;
        $json['Status']               = $this->status;
        $json['ClientIp']             = $this->clientIp;
        $json['UserAgent']            = $this->userAgent;
        $json['IdentityProviderType'] = $this->identityProviderType;
        $json['Language']             = $this->language;
        $json['Externalid']           = $this->externalid;
        $json['Errorcode']            = $this->errorcode;
        $json['Timestamp']            = isset($this->timestamp) ?
            DateTimeHelper::toRfc3339DateTime($this->timestamp) : null;
        $json['iFrame']               = $this->iFrame;
        $json['SocialSecurityNumber'] = $this->socialSecurityNumber;
        $json['AccountId']            = $this->accountId;

        return array_merge($json, $this->additionalProperties);
    }
}
