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
class UpdateAccountRequest implements JsonSerializable
{
    /**
     * Account Id
     * @required
     * @maps Id
     * @var string $id public property
     */
    public $id;

    /**
     * Name of the account owner (company)
     * @required
     * @maps Name
     * @var string $name public property
     */
    public $name;

    /**
     * Mva / Organization number
     * @required
     * @maps MvaNumber
     * @var string $mvaNumber public property
     */
    public $mvaNumber;

    /**
     * @todo Write general description for this property
     * @required
     * @maps CompanyPhone
     * @var string $companyPhone public property
     */
    public $companyPhone;

    /**
     * @todo Write general description for this property
     * @required
     * @maps CompanyEmail
     * @var string $companyEmail public property
     */
    public $companyEmail;

    /**
     * @todo Write general description for this property
     * @maps CompanyUrl
     * @var string|null $companyUrl public property
     */
    public $companyUrl;

    /**
     * Company contact person
     * @maps Contact
     * @var \IdfyLib\Models\Contact|null $contact public property
     */
    public $contact;

    /**
     * Company address
     * @maps Address
     * @var \IdfyLib\Models\Address|null $address public property
     */
    public $address;

    /**
     * Dealer information
     * @maps Dealer
     * @var \IdfyLib\Models\DealerInfo|null $dealer public property
     */
    public $dealer;

    /**
     * Other account settings
     * @maps Settings
     * @var \IdfyLib\Models\Settings|null $settings public property
     */
    public $settings;

    /**
     * @todo Write general description for this property
     * @maps Country
     * @var string|null $country public property
     */
    public $country;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string     $id           Initialization value for $this->id
     * @param string     $name         Initialization value for $this->name
     * @param string     $mvaNumber    Initialization value for $this->mvaNumber
     * @param string     $companyPhone Initialization value for $this->companyPhone
     * @param string     $companyEmail Initialization value for $this->companyEmail
     * @param string     $companyUrl   Initialization value for $this->companyUrl
     * @param Contact    $contact      Initialization value for $this->contact
     * @param Address    $address      Initialization value for $this->address
     * @param DealerInfo $dealer       Initialization value for $this->dealer
     * @param Settings   $settings     Initialization value for $this->settings
     * @param string     $country      Initialization value for $this->country
     */
    public function __construct()
    {
        if (11 == func_num_args()) {
            $this->id           = func_get_arg(0);
            $this->name         = func_get_arg(1);
            $this->mvaNumber    = func_get_arg(2);
            $this->companyPhone = func_get_arg(3);
            $this->companyEmail = func_get_arg(4);
            $this->companyUrl   = func_get_arg(5);
            $this->contact      = func_get_arg(6);
            $this->address      = func_get_arg(7);
            $this->dealer       = func_get_arg(8);
            $this->settings     = func_get_arg(9);
            $this->country      = func_get_arg(10);
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
        $json['Id']           = $this->id;
        $json['Name']         = $this->name;
        $json['MvaNumber']    = $this->mvaNumber;
        $json['CompanyPhone'] = $this->companyPhone;
        $json['CompanyEmail'] = $this->companyEmail;
        $json['CompanyUrl']   = $this->companyUrl;
        $json['Contact']      = $this->contact;
        $json['Address']      = $this->address;
        $json['Dealer']       = $this->dealer;
        $json['Settings']     = $this->settings;
        $json['Country']      = $this->country;

        return array_merge($json, $this->additionalProperties);
    }
}
