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
class AccountNameItem implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @maps AccountId
     * @var string|null $accountId public property
     */
    public $accountId;

    /**
     * @todo Write general description for this property
     * @maps Name
     * @var string|null $name public property
     */
    public $name;

    /**
     * @todo Write general description for this property
     * @maps Enabled
     * @var bool|null $enabled public property
     */
    public $enabled;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string $accountId Initialization value for $this->accountId
     * @param string $name      Initialization value for $this->name
     * @param bool   $enabled   Initialization value for $this->enabled
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->accountId = func_get_arg(0);
            $this->name      = func_get_arg(1);
            $this->enabled   = func_get_arg(2);
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
        $json['AccountId'] = $this->accountId;
        $json['Name']      = $this->name;
        $json['Enabled']   = $this->enabled;

        return array_merge($json, $this->additionalProperties);
    }
}
