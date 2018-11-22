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
class AdminStyling implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @required
     * @maps AccountId
     * @var string $accountId public property
     */
    public $accountId;

    /**
     * @todo Write general description for this property
     * @required
     * @maps Base64EncodedCssData
     * @var string $base64EncodedCssData public property
     */
    public $base64EncodedCssData;

    /**
     * @todo Write general description for this property
     * @required
     * @maps FileName
     * @var string $fileName public property
     */
    public $fileName;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string $accountId            Initialization value for $this->accountId
     * @param string $base64EncodedCssData Initialization value for $this->base64EncodedCssData
     * @param string $fileName             Initialization value for $this->fileName
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->accountId            = func_get_arg(0);
            $this->base64EncodedCssData = func_get_arg(1);
            $this->fileName             = func_get_arg(2);
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
        $json['AccountId']            = $this->accountId;
        $json['Base64EncodedCssData'] = $this->base64EncodedCssData;
        $json['FileName']             = $this->fileName;

        return array_merge($json, $this->additionalProperties);
    }
}
