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
class Dealer implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @required
     * @maps Id
     * @var string $id public property
     */
    public $id;

    /**
     * @todo Write general description for this property
     * @required
     * @maps Name
     * @var string $name public property
     */
    public $name;

    /**
     * @todo Write general description for this property
     * @required
     * @maps CustomerNumber
     * @var integer $customerNumber public property
     */
    public $customerNumber;

    /**
     * @todo Write general description for this property
     * @maps MvaNumber
     * @var string|null $mvaNumber public property
     */
    public $mvaNumber;

    /**
     * @todo Write general description for this property
     * @maps CompanyPhone
     * @var string|null $companyPhone public property
     */
    public $companyPhone;

    /**
     * @todo Write general description for this property
     * @maps CompanyEmail
     * @var string|null $companyEmail public property
     */
    public $companyEmail;

    /**
     * @todo Write general description for this property
     * @maps CompanyUrl
     * @var string|null $companyUrl public property
     */
    public $companyUrl;

    /**
     * @todo Write general description for this property
     * @maps Onboarding
     * @var \IdfyLib\Models\Onboarding|null $onboarding public property
     */
    public $onboarding;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string     $id             Initialization value for $this->id
     * @param string     $name           Initialization value for $this->name
     * @param integer    $customerNumber Initialization value for $this->customerNumber
     * @param string     $mvaNumber      Initialization value for $this->mvaNumber
     * @param string     $companyPhone   Initialization value for $this->companyPhone
     * @param string     $companyEmail   Initialization value for $this->companyEmail
     * @param string     $companyUrl     Initialization value for $this->companyUrl
     * @param Onboarding $onboarding     Initialization value for $this->onboarding
     */
    public function __construct()
    {
        if (8 == func_num_args()) {
            $this->id             = func_get_arg(0);
            $this->name           = func_get_arg(1);
            $this->customerNumber = func_get_arg(2);
            $this->mvaNumber      = func_get_arg(3);
            $this->companyPhone   = func_get_arg(4);
            $this->companyEmail   = func_get_arg(5);
            $this->companyUrl     = func_get_arg(6);
            $this->onboarding     = func_get_arg(7);
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
        $json['Id']             = $this->id;
        $json['Name']           = $this->name;
        $json['CustomerNumber'] = $this->customerNumber;
        $json['MvaNumber']      = $this->mvaNumber;
        $json['CompanyPhone']   = $this->companyPhone;
        $json['CompanyEmail']   = $this->companyEmail;
        $json['CompanyUrl']     = $this->companyUrl;
        $json['Onboarding']     = $this->onboarding;

        return array_merge($json, $this->additionalProperties);
    }
}
