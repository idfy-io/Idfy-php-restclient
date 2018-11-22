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
class OrganizationRequest implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @maps OrgNumber
     * @var string|null $orgNumber public property
     */
    public $orgNumber;

    /**
     * @todo Write general description for this property
     * @maps Prokura
     * @var bool|null $prokura public property
     */
    public $prokura;

    /**
     * @todo Write general description for this property
     * @maps Signature
     * @var bool|null $signature public property
     */
    public $signature;

    /**
     * @todo Write general description for this property
     * @maps Signatures
     * @var \IdfyLib\Models\CheckSignature[]|null $signatures public property
     */
    public $signatures;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string $orgNumber  Initialization value for $this->orgNumber
     * @param bool   $prokura    Initialization value for $this->prokura
     * @param bool   $signature  Initialization value for $this->signature
     * @param array  $signatures Initialization value for $this->signatures
     */
    public function __construct()
    {
        if (4 == func_num_args()) {
            $this->orgNumber  = func_get_arg(0);
            $this->prokura    = func_get_arg(1);
            $this->signature  = func_get_arg(2);
            $this->signatures = func_get_arg(3);
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
        $json['OrgNumber']  = $this->orgNumber;
        $json['Prokura']    = $this->prokura;
        $json['Signature']  = $this->signature;
        $json['Signatures'] = $this->signatures;

        return array_merge($json, $this->additionalProperties);
    }
}
