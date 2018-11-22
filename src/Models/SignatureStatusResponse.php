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
class SignatureStatusResponse implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @maps RequestId
     * @var string|null $requestId public property
     */
    public $requestId;

    /**
     * @todo Write general description for this property
     * @maps Organizations
     * @var \IdfyLib\Models\OrganizationResponse[]|null $organizations public property
     */
    public $organizations;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string $requestId     Initialization value for $this->requestId
     * @param array  $organizations Initialization value for $this->organizations
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->requestId     = func_get_arg(0);
            $this->organizations = func_get_arg(1);
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
        $json['RequestId']     = $this->requestId;
        $json['Organizations'] = $this->organizations;

        return array_merge($json, $this->additionalProperties);
    }
}
