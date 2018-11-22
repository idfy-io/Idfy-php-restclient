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
class LeiEntity implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @maps HeadquartersAddress
     * @var \IdfyLib\Models\LeiEntityAddress|null $headquartersAddress public property
     */
    public $headquartersAddress;

    /**
     * @todo Write general description for this property
     * @maps LegalAddress
     * @var \IdfyLib\Models\LeiEntityAddress|null $legalAddress public property
     */
    public $legalAddress;

    /**
     * @todo Write general description for this property
     * @maps LegalJurisdiction
     * @var string|null $legalJurisdiction public property
     */
    public $legalJurisdiction;

    /**
     * @todo Write general description for this property
     * @maps LegalName
     * @var string|null $legalName public property
     */
    public $legalName;

    /**
     * @todo Write general description for this property
     * @maps EntityStatus
     * @var string|null $entityStatus public property
     */
    public $entityStatus;

    /**
     * @todo Write general description for this property
     * @maps EntityCategory
     * @var string|null $entityCategory public property
     */
    public $entityCategory;

    /**
     * @todo Write general description for this property
     * @maps LegalForm
     * @var \IdfyLib\Models\LeiLegalForm|null $legalForm public property
     */
    public $legalForm;

    /**
     * @todo Write general description for this property
     * @maps RegistrationAuthority
     * @var \IdfyLib\Models\LeiRegistrationAuthority|null $registrationAuthority public property
     */
    public $registrationAuthority;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param LeiEntityAddress         $headquartersAddress   Initialization value for $this->headquartersAddress
     * @param LeiEntityAddress         $legalAddress          Initialization value for $this->legalAddress
     * @param string                   $legalJurisdiction     Initialization value for $this->legalJurisdiction
     * @param string                   $legalName             Initialization value for $this->legalName
     * @param string                   $entityStatus          Initialization value for $this->entityStatus
     * @param string                   $entityCategory        Initialization value for $this->entityCategory
     * @param LeiLegalForm             $legalForm             Initialization value for $this->legalForm
     * @param LeiRegistrationAuthority $registrationAuthority Initialization value for $this->registrationAuthority
     */
    public function __construct()
    {
        if (8 == func_num_args()) {
            $this->headquartersAddress   = func_get_arg(0);
            $this->legalAddress          = func_get_arg(1);
            $this->legalJurisdiction     = func_get_arg(2);
            $this->legalName             = func_get_arg(3);
            $this->entityStatus          = func_get_arg(4);
            $this->entityCategory        = func_get_arg(5);
            $this->legalForm             = func_get_arg(6);
            $this->registrationAuthority = func_get_arg(7);
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
        $json['HeadquartersAddress']   = $this->headquartersAddress;
        $json['LegalAddress']          = $this->legalAddress;
        $json['LegalJurisdiction']     = $this->legalJurisdiction;
        $json['LegalName']             = $this->legalName;
        $json['EntityStatus']          = $this->entityStatus;
        $json['EntityCategory']        = $this->entityCategory;
        $json['LegalForm']             = $this->legalForm;
        $json['RegistrationAuthority'] = $this->registrationAuthority;

        return array_merge($json, $this->additionalProperties);
    }
}
