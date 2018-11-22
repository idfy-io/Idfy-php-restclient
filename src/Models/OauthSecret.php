<?php
/*
 * Idfy
 *
 * This file was automatically generated for Idfy by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace IdfyLib\Models;

use JsonSerializable;
use IdfyLib\Utils\DateTimeHelper;

/**
 * @todo Write general description for this model
 */
class OauthSecret implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @maps Description
     * @var string|null $description public property
     */
    public $description;

    /**
     * @todo Write general description for this property
     * @maps Value
     * @var string|null $value public property
     */
    public $value;

    /**
     * @todo Write general description for this property
     * @maps Expiration
     * @factory \IdfyLib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime|null $expiration public property
     */
    public $expiration;

    /**
     * @todo Write general description for this property
     * @maps Type
     * @var string|null $type public property
     */
    public $type;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string    $description Initialization value for $this->description
     * @param string    $value       Initialization value for $this->value
     * @param \DateTime $expiration  Initialization value for $this->expiration
     * @param string    $type        Initialization value for $this->type
     */
    public function __construct()
    {
        if (4 == func_num_args()) {
            $this->description = func_get_arg(0);
            $this->value       = func_get_arg(1);
            $this->expiration  = func_get_arg(2);
            $this->type        = func_get_arg(3);
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
        $json['Description'] = $this->description;
        $json['Value']       = $this->value;
        $json['Expiration']  = isset($this->expiration) ?
            DateTimeHelper::toRfc3339DateTime($this->expiration) : null;
        $json['Type']        = $this->type;

        return array_merge($json, $this->additionalProperties);
    }
}
