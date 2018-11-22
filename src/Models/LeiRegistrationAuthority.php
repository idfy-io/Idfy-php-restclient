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
class LeiRegistrationAuthority implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @maps RegistrationAuthorityId
     * @var string|null $registrationAuthorityId public property
     */
    public $registrationAuthorityId;

    /**
     * @todo Write general description for this property
     * @maps RegistrationAuthorityEntityId
     * @var string|null $registrationAuthorityEntityId public property
     */
    public $registrationAuthorityEntityId;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string $registrationAuthorityId       Initialization value for $this->registrationAuthorityId
     * @param string $registrationAuthorityEntityId Initialization value for $this->registrationAuthorityEntityId
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->registrationAuthorityId       = func_get_arg(0);
            $this->registrationAuthorityEntityId = func_get_arg(1);
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
        $json['RegistrationAuthorityId']       = $this->registrationAuthorityId;
        $json['RegistrationAuthorityEntityId'] = $this->registrationAuthorityEntityId;

        return array_merge($json, $this->additionalProperties);
    }
}
