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
class DealerLogo implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @required
     * @maps DealerId
     * @var string $dealerId public property
     */
    public $dealerId;

    /**
     * @todo Write general description for this property
     * @required
     * @maps Base64EncodedLogo
     * @var string $base64EncodedLogo public property
     */
    public $base64EncodedLogo;

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
     * @param string $dealerId          Initialization value for $this->dealerId
     * @param string $base64EncodedLogo Initialization value for $this->base64EncodedLogo
     * @param string $fileName          Initialization value for $this->fileName
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->dealerId          = func_get_arg(0);
            $this->base64EncodedLogo = func_get_arg(1);
            $this->fileName          = func_get_arg(2);
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
        $json['DealerId']          = $this->dealerId;
        $json['Base64EncodedLogo'] = $this->base64EncodedLogo;
        $json['FileName']          = $this->fileName;

        return array_merge($json, $this->additionalProperties);
    }
}
