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
class SpecialProperties implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @var string|null $bisnodeUsername public property
     */
    public $bisnodeUsername;

    /**
     * @todo Write general description for this property
     * @var string|null $bisnodePassword public property
     */
    public $bisnodePassword;

    /**
     * @todo Write general description for this property
     * @var string|null $includePdfReports public property
     */
    public $includePdfReports;

    /**
     * @todo Write general description for this property
     * @var string|null $officialUsername public property
     */
    public $officialUsername;

    /**
     * @todo Write general description for this property
     * @var string|null $officialPassword public property
     */
    public $officialPassword;

    /**
     * @todo Write general description for this property
     * @var string|null $officialReason public property
     */
    public $officialReason;

    /**
     * @todo Write general description for this property
     * @var string|null $officialSystem public property
     */
    public $officialSystem;

    /**
     * @todo Write general description for this property
     * @var string|null $amlNationality public property
     */
    public $amlNationality;

    /**
     * @todo Write general description for this property
     * @var string|null $amlLanguage public property
     */
    public $amlLanguage;

    /**
     * @todo Write general description for this property
     * @var string|null $amlMode public property
     */
    public $amlMode;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string $bisnodeUsername   Initialization value for $this->bisnodeUsername
     * @param string $bisnodePassword   Initialization value for $this->bisnodePassword
     * @param string $includePdfReports Initialization value for $this->includePdfReports
     * @param string $officialUsername  Initialization value for $this->officialUsername
     * @param string $officialPassword  Initialization value for $this->officialPassword
     * @param string $officialReason    Initialization value for $this->officialReason
     * @param string $officialSystem    Initialization value for $this->officialSystem
     * @param string $amlNationality    Initialization value for $this->amlNationality
     * @param string $amlLanguage       Initialization value for $this->amlLanguage
     * @param string $amlMode           Initialization value for $this->amlMode
     */
    public function __construct()
    {
        if (10 == func_num_args()) {
            $this->bisnodeUsername   = func_get_arg(0);
            $this->bisnodePassword   = func_get_arg(1);
            $this->includePdfReports = func_get_arg(2);
            $this->officialUsername  = func_get_arg(3);
            $this->officialPassword  = func_get_arg(4);
            $this->officialReason    = func_get_arg(5);
            $this->officialSystem    = func_get_arg(6);
            $this->amlNationality    = func_get_arg(7);
            $this->amlLanguage       = func_get_arg(8);
            $this->amlMode           = func_get_arg(9);
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
        $json['bisnodeUsername']   = $this->bisnodeUsername;
        $json['bisnodePassword']   = $this->bisnodePassword;
        $json['includePdfReports'] = $this->includePdfReports;
        $json['officialUsername']  = $this->officialUsername;
        $json['officialPassword']  = $this->officialPassword;
        $json['officialReason']    = $this->officialReason;
        $json['officialSystem']    = $this->officialSystem;
        $json['amlNationality']    = $this->amlNationality;
        $json['amlLanguage']       = $this->amlLanguage;
        $json['amlMode']           = $this->amlMode;

        return array_merge($json, $this->additionalProperties);
    }
}
