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
class ParseSDORequest implements JsonSerializable
{
    /**
     * Base 64 encoded SDO (Signed document)
     * @required
     * @var string $sdoData public property
     */
    public $sdoData;

    /**
     * The service reference for the signing. Will be used for auditlog, and invoicing
     * @required
     * @var string $externalReference public property
     */
    public $externalReference;

    /**
     * Fetch social security number (Requires valid scope)
     * @var bool|null $fetchSSN public property
     */
    public $fetchSSN;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string $sdoData           Initialization value for $this->sdoData
     * @param string $externalReference Initialization value for $this->externalReference
     * @param bool   $fetchSSN          Initialization value for $this->fetchSSN
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->sdoData           = func_get_arg(0);
            $this->externalReference = func_get_arg(1);
            $this->fetchSSN          = func_get_arg(2);
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
        $json['sdoData']           = $this->sdoData;
        $json['externalReference'] = $this->externalReference;
        $json['fetchSSN']          = $this->fetchSSN;

        return array_merge($json, $this->additionalProperties);
    }
}
