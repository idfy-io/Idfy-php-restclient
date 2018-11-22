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
class SignerInfo implements JsonSerializable
{
    /**
     * The signers first name
     * @var string|null $firstName public property
     */
    public $firstName;

    /**
     * The signers last name
     * @var string|null $lastName public property
     */
    public $lastName;

    /**
     * The signers email adress, define this if you are using notifications
     * @var string|null $email public property
     */
    public $email;

    /**
     * Prefill social security number
     * @var string|null $socialSecurityNumber public property
     */
    public $socialSecurityNumber;

    /**
     * The signers mobile, define this if you are using notifications
     * @var \IdfyLib\Models\Mobile|null $mobile public property
     */
    public $mobile;

    /**
     * The signers organization info
     * @var \IdfyLib\Models\OrganizationInfo|null $organizationInfo public property
     */
    public $organizationInfo;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string           $firstName            Initialization value for $this->firstName
     * @param string           $lastName             Initialization value for $this->lastName
     * @param string           $email                Initialization value for $this->email
     * @param string           $socialSecurityNumber Initialization value for $this->socialSecurityNumber
     * @param Mobile           $mobile               Initialization value for $this->mobile
     * @param OrganizationInfo $organizationInfo     Initialization value for $this->organizationInfo
     */
    public function __construct()
    {
        if (6 == func_num_args()) {
            $this->firstName            = func_get_arg(0);
            $this->lastName             = func_get_arg(1);
            $this->email                = func_get_arg(2);
            $this->socialSecurityNumber = func_get_arg(3);
            $this->mobile               = func_get_arg(4);
            $this->organizationInfo     = func_get_arg(5);
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
        $json['firstName']            = $this->firstName;
        $json['lastName']             = $this->lastName;
        $json['email']                = $this->email;
        $json['socialSecurityNumber'] = $this->socialSecurityNumber;
        $json['mobile']               = $this->mobile;
        $json['organizationInfo']     = $this->organizationInfo;

        return array_merge($json, $this->additionalProperties);
    }
}
