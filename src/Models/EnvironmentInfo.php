<?php
/*
 * Idfy
 *
 * This file was automatically generated for Idfy by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace IdfyLib\Models;

use JsonSerializable;

/**
 *Information aboute users enviroment
 */
class EnvironmentInfo implements JsonSerializable
{
    /**
     * The users user-agent (browser/device)
     * @maps UserAgent
     * @var string|null $userAgent public property
     */
    public $userAgent;

    /**
     * The IP-address of the user
     * @maps IPAddress
     * @var string|null $iPAddress public property
     */
    public $iPAddress;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string $userAgent Initialization value for $this->userAgent
     * @param string $iPAddress Initialization value for $this->iPAddress
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->userAgent = func_get_arg(0);
            $this->iPAddress = func_get_arg(1);
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
        $json['UserAgent'] = $this->userAgent;
        $json['IPAddress'] = $this->iPAddress;

        return array_merge($json, $this->additionalProperties);
    }
}
