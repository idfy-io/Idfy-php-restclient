<?php
/*
 * Idfy
 *
 * This file was automatically generated for Idfy by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace IdfyLib\Models;

use JsonSerializable;

/**
 *Creates a BankID mobile identification process
 */
class CreateBankIDMobileRequest implements JsonSerializable
{
    /**
     * Mobile number for the user that is to be identified
     * @required
     * @maps MobileNumber
     * @var string $mobileNumber public property
     */
    public $mobileNumber;

    /**
     * Date of birth for the user that is to be identified
     * @required
     * @maps DateOfBirth
     * @var string $dateOfBirth public property
     */
    public $dateOfBirth;

    /**
     * Should the socialsecuritynumber be fetched from the identityprovider? Beware that there is an extra
     * cost of doing this every time and one need permission to do it.
     * @maps GetSocialSecurityNumber
     * @var bool|null $getSocialSecurityNumber public property
     */
    public $getSocialSecurityNumber;

    /**
     * The merchants reference to the identification process
     * @maps ExternalReference
     * @var string|null $externalReference public property
     */
    public $externalReference;

    /**
     * List of addon data that can be orderd. The result will be in MetaData list of the reponse
     * @maps Addonservices
     * @var array|null $addonservices public property
     */
    public $addonservices;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string $mobileNumber            Initialization value for $this->mobileNumber
     * @param string $dateOfBirth             Initialization value for $this->dateOfBirth
     * @param bool   $getSocialSecurityNumber Initialization value for $this->getSocialSecurityNumber
     * @param string $externalReference       Initialization value for $this->externalReference
     * @param array  $addonservices           Initialization value for $this->addonservices
     */
    public function __construct()
    {
        if (5 == func_num_args()) {
            $this->mobileNumber            = func_get_arg(0);
            $this->dateOfBirth             = func_get_arg(1);
            $this->getSocialSecurityNumber = func_get_arg(2);
            $this->externalReference       = func_get_arg(3);
            $this->addonservices           = func_get_arg(4);
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
        $json['MobileNumber']            = $this->mobileNumber;
        $json['DateOfBirth']             = $this->dateOfBirth;
        $json['GetSocialSecurityNumber'] = $this->getSocialSecurityNumber;
        $json['ExternalReference']       = $this->externalReference;
        $json['Addonservices']           = $this->addonservices;

        return array_merge($json, $this->additionalProperties);
    }
}
