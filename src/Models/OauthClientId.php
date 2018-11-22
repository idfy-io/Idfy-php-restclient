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
class OauthClientId implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @required
     * @maps ClientId
     * @var string $clientId public property
     */
    public $clientId;

    /**
     * @todo Write general description for this property
     * @required
     * @maps AccountId
     * @var string $accountId public property
     */
    public $accountId;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string $clientId  Initialization value for $this->clientId
     * @param string $accountId Initialization value for $this->accountId
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->clientId  = func_get_arg(0);
            $this->accountId = func_get_arg(1);
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
        $json['ClientId']  = $this->clientId;
        $json['AccountId'] = $this->accountId;

        return array_merge($json, $this->additionalProperties);
    }
}
